<?php
/**
 * ヘッダー（共通）
 * doctype 〜 メインコンテナの center__column 開始タグまでを出力します。
 *
 * @package oursle
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="keywords" content="SLE,全身性エリテマトーデス,自己免疫疾患,難病,SLE 症状,SLE 治療,膠原病,ループス,患者会,医療費助成,社会的寛解,難病生活">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="<?= THEME_URI ?>/assets/images/favicon_io/favicon.ico">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <!-- sp表示ハンバーガーボタン -->
  <header class="sp__header" aria-label="モバイル用ヘッダー">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo__link">
      <img src="<?= THEME_URI ?>/assets/images/logo.webp" alt="<?php bloginfo( 'name' ); ?>" class="logo">
    </a>
    <div class="hambergar__container">
      <div class="hambergar_box">
        <span></span><span></span><span></span>
      </div>
      <img src="<?= THEME_URI ?>/assets/images/serch.webp" alt="検索" class="serch__img">
    </div>
  </header>

  <!-- pc表示ハンバーガーボタン -->
  <div id="hambergar" class="hambergar__container pc_only">
    <div class="hambergar__box">
      <span></span><span></span><span></span>
    </div>
    <img class="serch_img" src="<?= THEME_URI ?>/assets/images/serch.webp" alt="検索">
  </div>

  <!-- ハンバーガーメニュー -->
  <div class="hambergar__menu">
    <div class="hambergar__top">
      <a class="go_to_home_link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="<?php bloginfo( 'name' ); ?>">
      </a>
      <div class="hambergar__button close_hambergar sp_only">
        <span></span><span></span>
      </div>
    </div>
    <form class="search__wrapper" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" role="search">
      <input type="text" name="s" placeholder="症状、検査 …で検索" value="<?php echo get_search_query(); ?>">
      <button type="submit">検索</button>
    </form>
    <nav>
      <div class="nav__category-header">
        <a href="<?php echo esc_url( home_url( '/menu-sle/' ) ); ?>" class="nav__category-link">
          <h2 class="nav__category-title">SLEについて</h2>
        </a>
        <div class="accordion__button">
          <span></span>
          <span></span>
        </div>
      </div>
      <ul>
        <li><a href="<?php echo esc_url( home_url( '/about-sle/' ) ); ?>"><span class="green"></span>SLEとは</a></li>
        <li><a href="<?php echo esc_url( home_url( '/symptoms/' ) ); ?>"><span class="orange"></span>SLEの症状</a></li>
        <li><a href="<?php echo esc_url( home_url( '/complications/' ) ); ?>"><span class="red"></span>起こりやすい合併症</a></li>
        <li><a href="<?php echo esc_url( home_url( '/diagnosis/' ) ); ?>"><span class="green"></span>SLEの診断基準</a></li>
        <li><a href="<?php echo esc_url( home_url( '/treatment/' ) ); ?>"><span class="orange"></span>SLEの治療</a></li>
        <li><a href="<?php echo esc_url( home_url( '/remission/' ) ); ?>"><span class="red"></span>社会的寛解とは</a></li>
      </ul>

      <div class="nav__category-header">
        <a href="<?php echo esc_url( home_url( '/menu-support/' ) ); ?>" class="nav__category-link">
          <h2 class="nav__category-title">困っている</h2>
        </a>
        <div class="accordion__button">
          <span></span>
          <span></span>
        </div>
      </div>

      <ul>
        <li><a href="<?php echo esc_url( home_url( '/school-job/' ) ); ?>"><span class="green"></span>仕事・学校</a></li>
        <li><a href="<?php echo esc_url( home_url( '/kokoro-care/' ) ); ?>"><span class="orange"></span>こころ</a></li>
        <li><a href="<?php echo esc_url( home_url( '/sle-life-tips/' ) ); ?>"><span class="red"></span>SLEと付き合うコツ</a></li>
        <li><a href="<?php echo esc_url( home_url( '/doctor/' ) ); ?>"><span class="green"></span>医師との信頼関係</a></li>
        <li><a href="<?php echo esc_url( home_url( '/care-guide/' ) ); ?>"><span class="orange"></span>受診の目安</a></li>
        <li><a href="<?php echo esc_url( home_url( '/pregnancy/' ) ); ?>"><span class="red"></span>妊娠と出産</a></li>
        <li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>"><span class="red"></span>よくある質問</a></li>
      </ul>

      <div class="nav__category-header">
        <a href="<?php echo esc_url( home_url( '/menu-check/' ) ); ?>" class="nav__category-link">
          <h2 class="nav__category-title">調べたい</h2>
        </a>
        <div class="accordion__button">
          <span></span>
          <span></span>
        </div>
      </div>

      <ul>
        <li><a href="<?php echo esc_url( home_url( '/results/' ) ); ?>"><span class="green"></span>検査結果の見方</a></li>
        <li><a href="<?php echo esc_url( home_url( '/aboutmedicine/' ) ); ?>"><span class="orange"></span>お薬について</a></li>
        <li><a href="<?php echo esc_url( home_url( '/system/' ) ); ?>"><span class="red"></span>医療費の制度</a></li>
        <li><a href="<?php echo esc_url( home_url( '/jukyuusyahyou/' ) ); ?>"><span class="green"></span>医療費以外の受給者票</a></li>
        <li><a href="<?php echo esc_url( home_url( '/nanbyouteate/' ) ); ?>"><span class="orange"></span>難病手当</a></li>
        <li><a href="<?php echo esc_url( home_url( '/tourokusyou/' ) ); ?>"><span class="red"></span>登録者証</a></li>
      </ul>

      <div class="nav__category-header">
        <a href="<?php echo esc_url( home_url( '/menu-communication/' ) ); ?>" class="nav__category-link">
          <h2 class="nav__category-title">仲間さがし</h2>
        </a>
        <div class="accordion__button">
          <span></span>
          <span></span>
        </div>
      </div>

      <ul>
        <li><a href="<?php echo esc_url( home_url( '/openchat/' ) ); ?>"><span class="green"></span>オープンチャット（LINE）</a></li>
        <li><a href="<?php echo esc_url( home_url( '/about-me/' ) ); ?>"><span class="orange"></span>わたしについて</a></li>
      </ul>

      <div class="nav__category-header">
        <a href="<?php echo esc_url( home_url( '/menu-enquete/' ) ); ?>" class="nav__category-link">
          <h2 class="nav__category-title">参加する</h2>
        </a>
        <div class="accordion__button">
          <span></span>
          <span></span>
        </div>
      </div>

      <ul>
        <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSc7O8RoWahgaMXc7ilKptHCIFuQyfkdG1ReZwCvg66EoGjMGA/viewform?usp=sharing" target="_blank" rel="noopener"><span class="green"></span>あるあるアンケート（2分）</a></li>
        <li><a href="<?php echo esc_url( home_url( '/enquete01/' ) ); ?>"><span class="orange"></span>アンケート結果第1回</a></li>
        <li><a href="<?php echo esc_url( home_url( '/enquete02/' ) ); ?>"><span class="red"></span>アンケート結果第2回</a></li>
        <li><a href="<?php echo esc_url( home_url( '/enquete03/' ) ); ?>"><span class="green"></span>アンケート結果第3回</a></li>
      </ul>

      <div class="nav__category-header">
        <a href="<?php echo esc_url( home_url( '/blogs/' ) ); ?>" class="nav__category-link">
          <h2 class="nav__category-title">更新情報</h2>
        </a>
        <div class="accordion__button">
          <span></span>
          <span></span>
        </div>
      </div>

      <ul>
        <li><a href="<?php echo esc_url( home_url( '/blogs/' ) ); ?>"><span class="green"></span>更新情報一覧</a></li>
      </ul>
    </nav>
    <div class="button_wrapper">
      <a class="button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
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

<?php if ( is_front_page() ) : ?>
  <!-- ローディング -->
  <div id="loading">
    <div class="loading__inner">
      <h1 class="loading__title">
        <img src="<?= THEME_URI ?>/assets/images/logo.webp" alt="">
      </h1>
      <p class="loading__text">
        あなたは一人じゃない
      </p>
    </div>
  </div>
<?php endif; ?>

  <main id="main" class="container">
    <aside class="left__column">
      <a href="https://line.me/ti/g2/vthSUWGZnAREorbZw_pkxZ1umVSj0lhslOhGsA?utm_source=invitation&utm_medium=link_copy&utm_campaign=default" target="_blank" rel="noopener" class="line__container">
        <img class="line__img" src="<?= THEME_URI ?>/assets/images/line_icon.webp" alt="LINEのアイコン">
        <img class="qr__img" src="<?= THEME_URI ?>/assets/images/qr.webp" alt="LINEのQRコード">
        <div class="oc__text_box">
          <p class="oc__text">SLE仲間<br class="column_br">募集してます<br>オープンチャット</p>
        </div>
      </a>
      <img class="mizutama mizutama01" src="<?= THEME_URI ?>/assets/images/mizutama/mizutama01.webp" alt="">
      <img class="mizutama mizutama02" src="<?= THEME_URI ?>/assets/images/mizutama/mizutama02.webp" alt="">
      <img class="mizutama mizutama03" src="<?= THEME_URI ?>/assets/images/mizutama/mizutama03.webp" alt="">
      <img class="mizutama mizutama04" src="<?= THEME_URI ?>/assets/images/mizutama/mizutama04.webp" alt="">
      <img class="mizutama mizutama05" src="<?= THEME_URI ?>/assets/images/mizutama/mizutama05.webp" alt="">
      <img class="mizutama mizutama06" src="<?= THEME_URI ?>/assets/images/mizutama/mizutama06.webp" alt="">
      <img class="mizutama mizutama07" src="<?= THEME_URI ?>/assets/images/mizutama/mizutama07.webp" alt="">
      <img class="mizutama mizutama08" src="<?= THEME_URI ?>/assets/images/mizutama/mizutama08.webp" alt="">
    </aside>

    <div id="<?php echo oursle_center_id(); ?>" class="<?php echo oursle_center_class(); ?>">
