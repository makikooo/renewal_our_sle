<?php
/**
 * SLEの治療 | SLE（全身性エリテマトーデス）を患者目線でやさしく解説
 * 元ファイル: menu-sle/treatment.html
 */
$GLOBALS['oursle_center_id'] = 'about__sle';
get_header();
?>
      <section class="center__wrapper" aria-label="デスクトップ用ヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a>トップページ</li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">SLEについて</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">SLEの治療</a></li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="わたしたちのSLE">
        </a>
        <h1 class="title">SLEの治療</h1>
      </section>
      
      <section class="sec01">
        <p class="subtitle">かつては「生存率3年」と言われた難病も、ステロイドや新薬の登場で10年生存率90%超に。患者さん一人ひとりに合わせた治療で、社会的寛解を目指せる時代になりました。治療は“長く上手に”。自分に合う形を見つけましょう。</p>
        <div class="index">
          <h2 class="index__title">もくじ</h2>
          <ul>
            <li class="index__item">
              <a class="index__link" href="#about-sle">
                <div class="index__title">SLEの治療の背景</div>
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
                <div class="index__title">治療の方法</div>
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
          SLEの治療の背景
        </h2>
        <p class="about-sle__text">
          SLEは国から難病指定されています。根本的な治療法は現代の医療ではありません。重症の場合は命に関わることがあります。かつては亡くなる人も多く、十数年前までは「生存率３年」と言われるほど治療が難しい病気でした。しかし、グルココルチコイドいわゆるステロイドが使われるようになってから炎症や免疫反応を強力に抑える働きがあり、治療が大きく進みました。最近では免疫抑制薬や免疫調整薬、生物学的製剤などの効果の高い薬が次々と登場して10年生存率が90%以上超えるようになり社会的寛解が治療の目標となっています。グルココルチコイドを使う量は、今ではぐっと少なく抑えられるようになりました。場合によっては、グルココルチコイドを使わずに治療できるケースも増えています。治療に使える薬の選択肢が増えたことで、患者さんごとにより効果が高く、副作用の少ない治療法を選びやすくなってきています。
        </p>
        <div class="button_wrapper">
          <a class="button" href="<?php echo esc_url( home_url( '/remission/' ) ); ?>">
            <span>社会的寛解とは</span>
            <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
          </a>
        </div>
      </section>
      
      <section class="sec03 section" id="early-symptoms">
        <h2 class="about-sle__title">
          治療の方法
        </h2>
        <p class="about-sle__text">
          病態、臓器障害の種類や程度、合併症など全身の状態を診て治療方針が決められます。個々の症状により治療方法が異なります。
        </p>
        <img src="<?= THEME_URI ?>/assets/images/menu-sle/treatment.webp" alt="">
      </section>   
      
      <section class="category__wrapper bg-white section">
        <div class="category">
          カテゴリー：
          <a href="#">#SLEの治療 </a>
          <a href="#">#ステロイド </a>
          <a href="#">#グリオコルチコイド </a>
          <a href="#">#免疫抑制剤 </a>
          <a href="#">#免疫調整剤 </a>
          <a href="#">#治療方法 </a>
        </div>
        <p class="up-dated__text">
          作成日・更新日 <time datetime="2026-05-29">2026.05.29</time>
        </p>
      </section>

      <img class="bg_blue_victor" src="<?= THEME_URI ?>/assets/images/background/bg-blue02.webp" alt="">

      <section class="pics bg-blue">
        <h2 class="pics__title">おすすめのページ</h2>
        <div class="pics__links">
          <a href="<?php echo esc_url( home_url( '/diagnosis/' ) ); ?>" class="pics__left-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_sindan.webp" alt="SLEの診断のサムネイル">
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
        <h3 class="concern__title">いま、気になること</h3>
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
