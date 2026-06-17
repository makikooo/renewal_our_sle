<?php
/**
 * 妊娠と出産 | SLE（全身性エリテマトーデス）を患者目線でやさしく解説
 * 元ファイル: support-sle/pregnancy.html
 */
$GLOBALS['oursle_center_id'] = 'about__sle';
get_header();
?>
      <section class="center__wrapper" aria-label="デスクトップ用ヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">困っていること</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">妊娠と出産</a></li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="わたしたちのSLE">
        </a>
        <h1 class="title">妊娠と出産</h1>
      </section>
      
      <section class="sec01">
        <p class="subtitle">
          妊娠や出産について、不安や疑問を抱くのは自然なことです。<br>
          病気と向き合いながら考える妊娠・出産のポイントや、知っておきたい基本情報をまとめました。
        </p>
        <div class="index">
          <h2 class="index__title">もくじ</h2>
          <ul>
            <li class="index__item">
              <a class="index__link" href="#about-sle">
                <div class="index__title">妊娠はできる？出産できる？</div>
                <div class="section__button">
                  <svg viewBox="0 0 24 24" width="20" height="20">
                    <line x1="12" y1="6" x2="12" y2="18" />  <!-- 縦棒 -->
                    <polyline points="9 15 12 18 15 15" />    <!-- 下向き矢印 -->
                  </svg>
                </div>
              </a>
            </li>
            <li class="index__item">
              <a class="index__link" href="#early-symptoms">
                <div class="index__title">まず大事な結論</div>
                <div class="section__button">
                  <svg viewBox="0 0 24 24" width="20" height="20">
                    <line x1="12" y1="6" x2="12" y2="18" />  <!-- 縦棒 -->
                    <polyline points="9 15 12 18 15 15" />    <!-- 下向き矢印 -->
                  </svg>
                </div>
              </a>
            </li>
            <li class="index__item">
              <a class="index__link" href="#patient-population">
                <div class="index__title">妊娠前チェック（主治医に相談）</div>
                <div class="section__button">
                  <svg viewBox="0 0 24 24" width="20" height="20">
                    <line x1="12" y1="6" x2="12" y2="18" />  <!-- 縦棒 -->
                    <polyline points="9 15 12 18 15 15" />    <!-- 下向き矢印 -->
                  </svg>
                </div>
              </a>
            </li>
            <li class="index__item">
              <a class="index__link" href="#pregnancy">
                <div class="index__title">妊娠中にやること</div>
                <div class="section__button">
                  <svg viewBox="0 0 24 24" width="20" height="20">
                    <line x1="12" y1="6" x2="12" y2="18" />  <!-- 縦棒 -->
                    <polyline points="9 15 12 18 15 15" />    <!-- 下向き矢印 -->
                  </svg>
                </div>
              </a>
            </li>
            <li class="index__item">
              <a class="index__link" href="#immune-dysfunction">
                <div class="index__title">薬の話（超重要：自己判断で止めない）</div>
                <div class="section__button">
                  <svg viewBox="0 0 24 24" width="20" height="20">
                    <line x1="12" y1="6" x2="12" y2="18" />  <!-- 縦棒 -->
                    <polyline points="9 15 12 18 15 15" />    <!-- 下向き矢印 -->
                  </svg>
                </div>
              </a>
            </li>
            <li class="index__item">
              <a class="index__link" href="#long-term-prognosis">
                <div class="index__title">出産（分娩方法は「病状と産科判断」）</div>
                <div class="section__button">
                  <svg viewBox="0 0 24 24" width="20" height="20">
                    <line x1="12" y1="6" x2="12" y2="18" />  <!-- 縦棒 -->
                    <polyline points="9 15 12 18 15 15" />    <!-- 下向き矢印 -->
                  </svg>
                </div>
              </a>
            </li>
            <li class="index__item">
              <a class="index__link" href="#meyasu01">
                <div class="index__title">産後</div>
                <div class="section__button">
                  <svg viewBox="0 0 24 24" width="20" height="20">
                    <line x1="12" y1="6" x2="12" y2="18" />  <!-- 縦棒 -->
                    <polyline points="9 15 12 18 15 15" />    <!-- 下向き矢印 -->
                  </svg>
                </div>
              </a>
            </li>
            <li class="index__item">
              <a class="index__link" href="#meyasu02">
                <div class="index__title">受診の目安（危険サイン）</div>
                <div class="section__button">
                  <svg viewBox="0 0 24 24" width="20" height="20">
                    <line x1="12" y1="6" x2="12" y2="18" />  <!-- 縦棒 -->
                    <polyline points="9 15 12 18 15 15" />    <!-- 下向き矢印 -->
                  </svg>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="sec02 section" id="about-sle">
        <h2 class="about-sle__title">
          妊娠はできる？出産できる？
        </h2>
        <p class="about-sle__text">
          多くの人が妊娠・出産できます。<br>
          ただしSLEは妊娠中の合併症（高血圧・妊娠高血圧腎症、早産、赤ちゃんの発育不良、血栓など）が起きやすく、計画して準備するほど安全性が上がるとされています。
        </p>
      </section>
      
      <section class="section" id="early-symptoms">
        <h2 class="about-sle__title">
          まず大事な結論
        </h2>
        <h3 class="pregnancy-subtitle under_line">1、「いま妊娠してOKな状態か」を主治医に確認する</h3>
        <p class="about-sle__text">
          ガイドラインは、病気が落ち着いたタイミング（低疾患活動性／寛解）で妊娠を計画することを強く推します。
        </p>
        <h3 class="pregnancy-subtitle under_line">2、薬は「妊娠OKに組み替えてから」トライする</h3>
        <p class="about-sle__text">
          自己判断の中断は再燃の原因になりやすいです。妊娠可能な薬への調整を主治医と一緒に行います。
        </p>
        <h3 class="pregnancy-subtitle under_line">3、妊娠中も続けたほうが良い薬がある</h3>
        <p class="about-sle__text">
          代表の薬がプラケニル（ジェネリック名：ヒドロキシクロロキン／HCQ）で、SLEでは妊娠中も継続（または適応があれば開始）が推奨されています。
        </p>
      </section>
      
      <section class="section" id="patient-population">
        <h2 class="about-sle__title">
          妊娠前チェック（主治医に相談）
        </h2>
        <p class="about-sle__text">
          「妊娠希望」を伝えるときに、これをメモして持っていくと話が早いです。<br>
          ・最近の病状：いつから落ち着いているか／最近の再燃の有無<br>
          ・腎炎の既往、血圧、むくみの出やすさ<br>
          ・いま飲んでいる薬（サプリも）<br>
          ・採血で確認したい項目の例<br>
          　・抗リン脂質抗体（aPL）<br>
          　・抗Ro/SSA・抗La/SSB抗体<br>
          　　（赤ちゃんの心臓のリスク評価に関係）
        </p>
      </section>
      
      <section class="section" id="pregnancy">
        <h2 class="about-sle__title">
          妊娠中にやること
        </h2>
        <h3 class="pregnancy-subtitle under_line">通院先の基本</h3>
        <p class="about-sle__text">
          膠原病内科（リウマチ科）＋産科（できればハイリスク妊娠を診る所）の連携が安心です。
        </p>
        <h3 class="pregnancy-subtitle under_line">よくある管理の考え方</h3>
        <p class="about-sle__text">
          ・妊娠中も病勢を見ながら、安全な範囲で治療を続ける（再燃の方がリスクになることがある）<br>
          ・妊娠高血圧腎症とループス腎炎の見分けが重要（症状が似るため）<br>
          ・抗Ro/SSAや抗La/SSBが陽性の人は、妊娠16〜26週に胎児心エコーを定期的に行うことが推奨されています。
        </p>
      </section>
      
      <section class="section" id="immune-dysfunction">
        <h2 class="about-sle__title">
          薬の話（超重要：自己判断で止めない）
        </h2>
        <h3 class="pregnancy-subtitle under_line">妊娠中も推奨されることが多い薬の例</h3>
        <p class="about-sle__text">
          ・プラケニル（ジェネリック名：ヒドロキシクロロキン／HCQ）：妊娠中も継続推奨<br>
          ・バイアスピリン（ジェネリック名：アスピリン）：状況により妊娠高血圧腎症予防などで使うことがあります
        </p>
        <h3 class="pregnancy-subtitle under_line">抗リン脂質症候群（APS）や条件を満たす場合</h3>
        <p class="about-sle__text">
          ・バイアスピリン（ジェネリック名：アスピリン）＋ヘパリン（低分子ヘパリン／LMWHなど）の併用が強く推奨されます（産科と相談が必須）。
        </p>
        <h3 class="pregnancy-subtitle under_line">妊娠中は避ける薬がある</h3>
        <p class="about-sle__text">
          ・例：セルセプト（ジェネリック名：ミコフェノール酸モフェチル）、リウマトレックス（ジェネリック名：メトトレキサート／MTX）等は妊娠に不適とされます（切替が必要）。
        </p>
      </section>
      
      <section class="sec06 section" id="long-term-prognosis">
        <h2 class="about-sle__title">
          出産（分娩方法は「病状と産科判断」）
        </h2>
        <p class="about-sle__text">
          SLEだから必ず帝王切開ではありません。<br>
          ただし、母体の状態・赤ちゃんの発育・血圧などで方針が変わるため、“産科の一般論”より個別判断になります。
        </p>
      </section>
      
      <section class="sec06 section" id="meyasu01">
        <h2 class="about-sle__title">
          産後
        </h2>
        <p class="about-sle__text">
          産後は再燃しやすいと言われているので、産後の通院計画を先に決めておくと安心です。<br>
          授乳と薬の両立はケースバイケース。「授乳したい」希望も最初に伝えるのがコツです。<br>
          また、産後すぐの時期はもともと血栓（血のかたまり）ができやすいと言われています。SLEや抗リン脂質抗体があるとそのリスクはさらに高まるため、血栓リスクが高い人は、産後もしばらく抗凝固治療が推奨されることがあります。<br>
          息苦しさ・胸の痛み・片脚の腫れや痛みなどは血栓のサインのことがあるので、気づいたら早めに医療機関へ相談してください。
        </p>
      </section>
      <section class="sec06 section" id="meyasu02">
        <h2 class="about-sle__title">
          受診の目安（危険サイン）
        </h2>
        <p class="about-sle__text">
          妊娠中・産後に、次があるときは早めに医療機関へ（救急含む）：<br>
          強い頭痛、目がチカチカ／見えにくい、上腹部痛（みぞおち）<br>
          急なむくみ、急な体重増加、血圧上昇<br>
          息苦しさ、胸痛、片脚の腫れ・痛み（血栓のサイン）<br>
          出血、破水っぽい、赤ちゃんの動きが明らかに少ない<br>
          発熱が続く、尿が極端に減る
        </p>
      </section>
      
      <img class="bg_yellow_victor" src="<?= THEME_URI ?>/assets/images/background/bg-yellow03.webp" alt="">
      
      <section class="sec07 summary__wrapper bg-yellow section">
        <div class="summary__header">
          <span class="summary__title">まとめ</span>
        </div>
        <p class="summary__text">
          SLEがあっても多くの人が妊娠・出産できます。ただし高血圧や早産などの合併症リスクがあるため、計画的な準備が大切です。<br>
          基本の流れは、病気が落ち着いた状態（寛解）で妊娠を検討し、薬を妊娠対応のものに切り替えてからトライすること。プラケニル（ジェネリック名：ヒドロキシクロロキン）は妊娠中も継続が推奨されており、自己判断での中断は再燃につながります。<br>
          妊娠中は膠原病内科と産科が連携して管理するのが理想。産後は再燃しやすいため、通院計画をあらかじめ立てておきましょう。
        </p>
      </section>
      
      
      <img class="bg_white_victor" src="<?= THEME_URI ?>/assets/images/background/bg-yellow04.webp" alt="">
      <section class="category__wrapper bg-white section">
        <div class="category">
          カテゴリー：
          <a href="#">#妊娠 </a>
          <a href="#">#出産 </a>
          <a href="#">#SLEの症状 </a>
        </div>
        <p class="up-dated__text">
          作成日・更新日 <time datetime="2026-06-06">2026.06.06</time>
        </p>
      </section>

      <img class="bg_blue_victor" src="<?= THEME_URI ?>/assets/images/background/bg-blue02.webp" alt="">

      <section class="pics bg-blue">
        <h2 class="pics__title">おすすめのページ</h2>
        <div class="pics__links">
          <a href="<?php echo esc_url( home_url( '/about-sle/' ) ); ?>" class="pics__left-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_about-sle.webp" alt="SLEのとはのサムネイル">
            <div class="button">
              <span>つづきを読む</span>
              <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
            </div>
          </a>
          <a href="<?php echo esc_url( home_url( '/treatment/' ) ); ?>" class="pics__right-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_kusuri.webp" alt="薬のサムネイル">
            <div class="button">
              <span>つづきを読む</span>
              <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
            </div>
          </a>
        </div>
      </section>

      <section class="concern">
        <img class="concern__top-img" src="<?= THEME_URI ?>/assets/images/background/bg_green03.webp" alt="">
        <h3 class="pregnancy-subtitle">いま、気になること</h3>
        <p class="concern__text">気になる言葉を押すと関連ページに飛びます</p>
        <div class="concern__wrapper">
          <a class="concern__link" href="<?php echo esc_url( home_url( '/symptoms/' ) ); ?>">
            <img class="darusa" src="<?= THEME_URI ?>/assets/images/toppage/kininaru-darusa.webp" alt="#だるさ">
          </a>
          <a class="concern__link" href="<?php echo esc_url( home_url( '/kokoro-care/' ) ); ?>">
            <img class="fuan" src="<?= THEME_URI ?>/assets/images/toppage/kininaru-fuan.webp" alt="#不安">
          </a>
          <a class="concern__link" href="<?php echo esc_url( home_url( '/school-job/' ) ); ?>">
            <img class="school" src="<?= THEME_URI ?>/assets/images/toppage/kininaru-gakkou.webp" alt="#学校">
          </a>
          <a class="concern__link" href="<?php echo esc_url( home_url( '/doctor/' ) ); ?>">
            <img class="doctor" src="<?= THEME_URI ?>/assets/images/toppage/kininaru-isi.webp" alt="#医師との信頼関係">
          </a>
          <a class="concern__link" href="<?php echo esc_url( home_url( '/symptoms/' ) ); ?>">
            <img class="skin" src="<?= THEME_URI ?>/assets/images/toppage/kininaru-hisinn.webp" alt="#皮疹">
          </a>
          <a class="concern__link" href="<?php echo esc_url( home_url( '/sle-life-tips/' ) ); ?>">
            <img class="qol" src="<?= THEME_URI ?>/assets/images/toppage/kininaru-seikatunokotu.webp" alt="#生活のコツ">
          </a>
          <a class="concern__link" href="<?php echo esc_url( home_url( '/treatment/' ) ); ?>">
            <img class="medicine" src="<?= THEME_URI ?>/assets/images/toppage/kininaru-medicine.webp" alt="#薬">
          </a>
        </div>
      </section>

      
<?php get_footer();
