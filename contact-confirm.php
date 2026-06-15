<?php
session_start();

// PHPMailer（SMTP送信）を読み込み
require __DIR__ . '/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

// ===== 設定 =====
// SMTPの接続情報・宛先は mail-config.php に記載（Git管理外）
$MAIL = require __DIR__ . '/mail-config.php';
$ADMIN_EMAIL = $MAIL['ADMIN_EMAIL'];
$SITE_NAME   = $MAIL['SITE_NAME'];

// 出力エスケープ用ヘルパー
function h($v) {
  return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8');
}

/**
 * SMTPで1通メールを送る。成功でtrue、失敗でfalse。
 */
function sendSmtpMail(array $cfg, string $toEmail, string $toName, string $subject, string $body, string $replyToEmail, string $replyToName): bool {
  $mail = new PHPMailer(true);
  try {
    $mail->isSMTP();
    $mail->Host       = $cfg['SMTP_HOST'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $cfg['SMTP_USER'];
    $mail->Password   = $cfg['SMTP_PASS'];
    $mail->SMTPSecure = $cfg['SMTP_SECURE']; // 'tls' or 'ssl'
    $mail->Port       = (int)$cfg['SMTP_PORT'];
    $mail->CharSet    = 'UTF-8';
    $mail->Encoding   = 'base64';

    $mail->setFrom($cfg['MAIL_FROM'], $cfg['MAIL_FROM_NAME']);
    $mail->addAddress($toEmail, $toName);
    if ($replyToEmail !== '') {
      $mail->addReplyTo($replyToEmail, $replyToName);
    }
    $mail->Subject = $subject;
    $mail->Body    = $body;
    $mail->send();
    return true;
  } catch (PHPMailerException $e) {
    // 送信失敗の理由はサーバーのログに記録（画面には出さない）
    error_log('[contact mail] ' . $mail->ErrorInfo);
    return false;
  }
}

// POST以外でのアクセスは入力画面へ戻す
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: contact.php');
  exit;
}

// CSRFトークン検証
$token = $_POST['csrf_token'] ?? '';
if (empty($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $token)) {
  http_response_code(400);
  exit('不正なリクエストです。お手数ですが、最初からやり直してください。');
}

$action = $_POST['action'] ?? 'confirm';

// ====================================================================
// フェーズ2：確認画面で「送信する」を押したとき → メール送信 → thanks.html
// ====================================================================
if ($action === 'send') {
  $data = $_SESSION['contact_old'] ?? null;
  if (!$data) {
    header('Location: contact.php');
    exit;
  }

  // 件名・メッセージの共通パーツ
  $title_disp = $data['title'] !== '' ? $data['title'] : '（未入力）';

  // ── ① 管理者（あなた）宛：お問い合わせが届いたお知らせメール ──
  $admin_subject = '【' . $SITE_NAME . '】お問い合わせがありました：' . $title_disp;
  $admin_body  = "サイトのお問い合わせフォームから新しいお問い合わせが届きました。\n\n";
  $admin_body .= "──────────────────────\n";
  $admin_body .= "お名前　　：{$data['name']}\n";
  $admin_body .= "メール　　：{$data['email']}\n";
  $admin_body .= "件名　　　：{$title_disp}\n";
  $admin_body .= "──────────────────────\n";
  $admin_body .= "【メッセージ】\n{$data['message']}\n";
  $admin_body .= "──────────────────────\n\n";
  $admin_body .= "※このメールにそのまま返信すると、お問い合わせ者（{$data['email']}）宛に届きます。\n";

  // 返信できるよう Reply-To をお問い合わせ者に設定
  $sent_admin = sendSmtpMail($MAIL, $ADMIN_EMAIL, $SITE_NAME, $admin_subject, $admin_body, $data['email'], $data['name']);

  // ── ② お問い合わせ者宛：自動返信のお礼メール ──
  $user_subject = '【' . $SITE_NAME . '】お問い合わせありがとうございます';
  $user_body  = "{$data['name']} 様\n\n";
  $user_body .= "この度は「{$SITE_NAME}」にお問い合わせいただき、誠にありがとうございます。\n";
  $user_body .= "下記の内容でお問い合わせを受け付けいたしました。\n";
  $user_body .= "ご返信は5日以内（土日祝日を除く）を心がけております。今しばらくお待ちくださいませ。\n\n";
  $user_body .= "──────────────────────\n";
  $user_body .= "お名前　　：{$data['name']}\n";
  $user_body .= "メール　　：{$data['email']}\n";
  $user_body .= "件名　　　：{$title_disp}\n";
  $user_body .= "──────────────────────\n";
  $user_body .= "【メッセージ】\n{$data['message']}\n";
  $user_body .= "──────────────────────\n\n";
  $user_body .= "※このメールは自動送信です。お心当たりのない場合は破棄してくださいませ。\n\n";
  $user_body .= "────────────\n";
  $user_body .= "{$SITE_NAME}\n";

  // 自動返信。返信先は管理者アドレス
  sendSmtpMail($MAIL, $data['email'], $data['name'], $user_subject, $user_body, $ADMIN_EMAIL, $SITE_NAME);

  // 送信が終わったら入力データとトークンを破棄（二重送信防止）
  unset($_SESSION['contact_old'], $_SESSION['contact_errors'], $_SESSION['csrf_token']);

  // 管理者宛が送れていれば完了画面へ（お礼メールは補助的なので失敗しても完了扱い）
  if ($sent_admin) {
    header('Location: thanks.html');
    exit;
  } else {
    // 送信失敗時
    http_response_code(500);
    exit('申し訳ありません。メールの送信に失敗しました。時間をおいて再度お試しください。');
  }
}

// ====================================================================
// フェーズ1：入力画面から来たとき → バリデーション → 確認画面表示
// ====================================================================

// ハニーポット：botが隠しフィールドに入力していたら静かに弾く
if (!empty($_POST['website'])) {
  header('Location: thanks.html');
  exit;
}

// 入力値を取得（前後の空白を除去）
$data = [
  'name'    => trim($_POST['name']    ?? ''),
  'email'   => trim($_POST['email']   ?? ''),
  'title'   => trim($_POST['title']   ?? ''),
  'message' => trim($_POST['message'] ?? ''),
];

// バリデーション
$errors = [];
if ($data['name'] === '') {
  $errors['name'] = 'お名前を入力してください。';
} elseif (mb_strlen($data['name']) > 50) {
  $errors['name'] = 'お名前は50文字以内で入力してください。';
}

if ($data['email'] === '') {
  $errors['email'] = 'メールアドレスを入力してください。';
} elseif (strlen($data['email']) !== mb_strlen($data['email'])) {
  // バイト数と文字数が一致しない＝全角文字などのマルチバイト文字が含まれている
  $errors['email'] = 'メールアドレスは半角英数字で入力してください。（全角文字が含まれています）';
} elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
  $errors['email'] = 'メールアドレスの形式が正しくありません。';
}

if (mb_strlen($data['title']) > 100) {
  $errors['title'] = '件名は100文字以内で入力してください。';
}

if ($data['message'] === '') {
  $errors['message'] = 'メッセージを入力してください。';
} elseif (mb_strlen($data['message']) > 2000) {
  $errors['message'] = 'メッセージは2000文字以内で入力してください。';
} elseif (!preg_match('/[\x{3040}-\x{309F}\x{30A0}-\x{30FF}\x{4E00}-\x{9FFF}]/u', $data['message'])) {
  // ひらがな・カタカナ・漢字が1文字も含まれていない＝日本語以外（英語のみのスパム等）
  $errors['message'] = 'メッセージは日本語で入力してください。';
}

// エラーがあれば入力値とエラーをセッションに保存して入力画面へ戻す
if (!empty($errors)) {
  $_SESSION['contact_old']    = $data;
  $_SESSION['contact_errors'] = $errors;
  header('Location: contact.php');
  exit;
}

// 確認画面で「戻る」ボタンを押したときに値を復元できるよう保存しておく
$_SESSION['contact_old'] = $data;
$csrf = $_SESSION['csrf_token'];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="わたしたちのSLEは、SLE（全身性エリテマトーデス）の症状・検査・治療・暮らしの工夫を、患者目線でやさしくまとめた情報サイトです。不安や悩みを抱える方へ、日常を少しでも楽にするヒントを届けます。">
  <meta name="keywords" content="SLE,全身性エリテマトーデス,自己免疫疾患,難病,SLE 症状,SLE 治療,膠原病,ループス,患者会,医療費助成,社会的寛解,難病生活">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ確認 | わたしたちのSLE | SLE（全身性エリテマトーデス）を患者目線でやさしく解説</title>
  <link rel="stylesheet" href="./assets/css/reset.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <!-- font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon_io/favicon.ico">
</head>
<body>
  <!-- sp表示ハンバーガーボタン -->
  <header class="sp__header" aria-label="モバイル用ヘッダー">
    <a href="index.html" class="logo__link">
      <img src="assets/images/logo.webp" alt="わたしたちのSLE" class="logo">
    </a>
    <div class="hambergar__container">
      <div class="hambergar_box">
        <span></span><span></span><span></span>
      </div>
      <img src="assets/images/serch.webp" alt="検索" class="serch__img">
    </div>
  </header>

  <!-- pc表示ハンバーガーボタン -->
  <div id="hambergar" class="hambergar__container pc_only">
    <div class="hambergar__box">
      <span></span><span></span><span></span>
    </div>
    <img class="serch_img" src="assets/images/serch.webp" alt="検索">
  </div>

  <!-- ハンバーガーメニュー -->
  <div class="hambergar__menu">
    <div class="hambergar__top">
      <a class="go_to_home_link" href="index.html">
        <img class="logo" src="assets/images/logo.webp" alt="わたしたちのSLE">
      </a>
      <div class="hambergar__button close_hambergar sp_only">
        <span></span><span></span>
      </div>
    </div>
    <form class="search__wrapper">
      <input type="text" placeholder="症状、検査 …で検索">
      <button>検索</button>
    </form>
    <nav>
      <div class="nav__category-header">
        <a href="menu-sle/menu-sle.html" class="nav__category-link">
          <h2 class="nav__category-title">SLEについて</h2>
        </a>
        <div class="accordion__button">
          <span></span>
          <span></span>
        </div>
      </div>
      <ul>
        <li><a href="menu-sle/about-sle.html"><span class="green"></span>SLEとは</a></li>
        <li><a href="menu-sle/symptoms.html"><span class="orange"></span>SLEの症状</a></li>
        <li><a href="menu-sle/complications.html"><span class="red"></span>起こりやすい合併症</a></li>
        <li><a href="menu-sle/diagnosis.html"><span class="green"></span>SLEの診断基準</a></li>
        <li><a href="menu-sle/treatment.html"><span class="orange"></span>SLEの治療</a></li>
        <li><a href="menu-sle/remission.html"><span class="red"></span>社会的寛解とは</a></li>
      </ul>

      <div class="nav__category-header">
        <a href="support-sle/menu-support.html" class="nav__category-link">
          <h2 class="nav__category-title">困っている</h2>
        </a>
        <div class="accordion__button">
          <span></span>
          <span></span>
        </div>
      </div>

      <ul>
        <li><a href="support-sle/school-job.html"><span class="green"></span>仕事・学校</a></li>
        <li><a href="support-sle/kokoro-care.html"><span class="orange"></span>こころ</a></li>
        <li><a href="support-sle/sle-life-tips.html"><span class="red"></span>SLEと付き合うコツ</a></li>
        <li><a href="support-sle/doctor.html"><span class="green"></span>医師との信頼関係</a></li>
        <li><a href="support-sle/care-guide.html"><span class="orange"></span>受診の目安</a></li>
        <li><a href="support-sle/pregnancy.html"><span class="red"></span>妊娠と出産</a></li>
        <li><a href="support-sle/faq.html"><span class="red"></span>よくある質問</a></li>
      </ul>

      <div class="nav__category-header">
        <a href="check-sle/menu-check.html" class="nav__category-link">
          <h2 class="nav__category-title">調べたい</h2>
        </a>
        <div class="accordion__button">
          <span></span>
          <span></span>
        </div>
      </div>

      <ul>
        <li><a href="check-sle/results.html"><span class="green"></span>検査結果の見方</a></li>
        <li><a href="check-sle/aboutmedicine.html"><span class="orange"></span>お薬について</a></li>
        <li><a href="check-sle/system.html"><span class="red"></span>医療費の制度</a></li>
        <li><a href="check-sle/jukyuusyahyou.html"><span class="green"></span>医療費以外の受給者票</a></li>
        <li><a href="check-sle/nanbyouteate.html"><span class="orange"></span>難病手当</a></li>
        <li><a href="check-sle/tourokusyou.html"><span class="red"></span>登録者証</a></li>
      </ul>

      <div class="nav__category-header">
        <a href="communication-sle/menu-communication.html" class="nav__category-link">
          <h2 class="nav__category-title">仲間さがし</h2>
        </a>
        <div class="accordion__button">
          <span></span>
          <span></span>
        </div>
      </div>

      <ul>
        <li><a href="communication-sle/openchat.html"><span class="green"></span>オープンチャット（LINE）</a></li>
        <li><a href="communication-sle/about-me.html"><span class="orange"></span>わたしについて</a></li>
      </ul>

      <div class="nav__category-header">
        <a href="enquete/menu-enquete.html" class="nav__category-link">
          <h2 class="nav__category-title">参加する</h2>
        </a>
        <div class="accordion__button">
          <span></span>
          <span></span>
        </div>
      </div>

      <ul>
        <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSc7O8RoWahgaMXc7ilKptHCIFuQyfkdG1ReZwCvg66EoGjMGA/viewform?usp=sharing" target="_blank" rel="noopener"><span class="green"></span>あるあるアンケート（2分）</a></li>
        <li><a href="enquete/enquete01.html"><span class="orange"></span>アンケート結果第1回</a></li>
        <li><a href="enquete/enquete02.html"><span class="red"></span>アンケート結果第2回</a></li>
        <li><a href="enquete/enquete03.html"><span class="green"></span>アンケート結果第3回</a></li>
      </ul>
    </nav>
    <div class="button_wrapper">
      <a class="button" href="contact.php">
        <span>お問い合わせ</span>
        <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
      </a>
    </div>
    <div id="close_hambergar" class="close-hambergar__container close_hambergar">
      <div class="hambergar__box">
        <span></span><span></span>
      </div>
      <h3 class="close-title">閉じる</h3>
    </div>
  </div>

  <main id="main" class="container">
    <aside class="left__column">
      <a href="https://line.me/ti/g2/vthSUWGZnAREorbZw_pkxZ1umVSj0lhslOhGsA?utm_source=invitation&utm_medium=link_copy&utm_campaign=default" target="_blank" class="line__container">
        <img class="line__img" src="assets/images/line_icon.webp" alt="LINEのアイコン">
        <img class="qr__img" src="assets/images/qr.webp" alt="LINEのQRコード">
        <div class="oc__text_box">
          <p class="oc__text">SLE仲間<br class="column_br">募集してます<br>オープンチャット</p>
        </div>
      </a>
      <img class="mizutama mizutama01" src="assets/images/mizutama/mizutama01.webp" alt="">
      <img class="mizutama mizutama02" src="assets/images/mizutama/mizutama02.webp" alt="">
      <img class="mizutama mizutama03" src="assets/images/mizutama/mizutama03.webp" alt="">
      <img class="mizutama mizutama04" src="assets/images/mizutama/mizutama04.webp" alt="">
      <img class="mizutama mizutama05" src="assets/images/mizutama/mizutama05.webp" alt="">
      <img class="mizutama mizutama06" src="assets/images/mizutama/mizutama06.webp" alt="">
      <img class="mizutama mizutama07" src="assets/images/mizutama/mizutama07.webp" alt="">
      <img class="mizutama mizutama08" src="assets/images/mizutama/mizutama08.webp" alt="">
    </aside>
    <div id="contact" class="center__column">
      <section class="center__wrapper" aria-label="デスクトップ用ヘッダー">
        <a class="logo__link pc_only" href="index.html">
          <img class="logo" src="assets/images/logo.webp" alt="わたしたちのSLE">
        </a>
        <h1 class="title">ご確認</h1>
      </section>
      <section class="sec01">
        <p class="title__text"><span class="under_line">まだ送信されていません。</span><br>この画面で内容を確認してから送信するを押してください。</p>
        <div class="sec01__flex">
          <div class="sec01__flex-item">入力</div>
          <span>
            <svg width="20" height="24" viewBox="0 0 20 24">
              <polygon
                points="0,0 20,12 0,24"
                fill="#fff"
                stroke="#A5FF9F"
                stroke-width="2"
              />
            </svg>
          </span>
          <div class="sec01__flex-item active">確認</div>
          <span>
            <svg width="20" height="24" viewBox="0 0 20 24">
              <polygon
                points="0,0 20,12 0,24"
                fill="#fff"
                stroke="#A5FF9F"
                stroke-width="2"
              />
            </svg>
          </span>
          <div class="sec01__flex-item">送信</div>
        </div>
      </section>

      <section class="sec02 confirm">
        <table>
          <tr><th>お名前</th></tr>
          <tr><td><?= h($data['name']) ?></td></tr>
          <tr><th>メールアドレス</th></tr>
          <tr><td><?= h($data['email']) ?></td></tr>
          <tr><th>件名</th></tr>
          <tr><td><?= $data['title'] !== '' ? nl2br(h($data['title'])) : '（未入力）' ?></td></tr>
          <tr><th>メッセージ</th></tr>
          <tr><td><?= nl2br(h($data['message'])) ?></td></tr>
        </table>

        <!-- 送信する：メール送信してthanks.htmlへ -->
        <form action="contact-confirm.php" method="post">
          <input type="hidden" name="csrf_token" value="<?= h($csrf) ?>">
          <input type="hidden" name="action" value="send">
          <button type="submit" class="button contact__button">
            <span>送信する</span>
            <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
          </button>
        </form>

        <!-- 入力画面に戻る：入力値はセッションに保持されているので復元される -->
        <a class="button contact__button back" href="contact.php">
          <span>入力画面に戻る</span>
          <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
        </a>
      </section>


      <img class="footer__top-img" src="assets/images/background/bg_yellow02.webp" alt="">
      <footer class="footer">
        <small class="footer__copy">&copy;わたしたちのSLE 2022-2026</small>
        <img class="footer__flower" src="assets/images/flower.webp" alt="">
      </footer>
    </div>
    <aside class="right__column">
      <img class="mizutama mizutama01" src="assets/images/mizutama/mizutama01.webp" alt="">
      <img class="mizutama mizutama02" src="assets/images/mizutama/mizutama02.webp" alt="">
      <img class="mizutama mizutama03" src="assets/images/mizutama/mizutama03.webp" alt="">
      <img class="mizutama mizutama04" src="assets/images/mizutama/mizutama04.webp" alt="">
      <img class="mizutama mizutama05" src="assets/images/mizutama/mizutama05.webp" alt="">
      <img class="mizutama mizutama06" src="assets/images/mizutama/mizutama06.webp" alt="">
      <img class="mizutama mizutama07" src="assets/images/mizutama/mizutama07.webp" alt="">
      <img class="mizutama mizutama08" src="assets/images/mizutama/mizutama08.webp" alt="">
    </aside>
  </main>

  <script src="./assets/js/main.js" defer></script>
</body>
</html>
