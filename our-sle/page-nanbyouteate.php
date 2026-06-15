<?php
/**
 * 難病手当 | SLE（全身性エリテマトーデス）を患者目線でやさしく解説
 * 元ファイル: check-sle/nanbyouteate.html
 */
$GLOBALS['oursle_center_id'] = 'about__sle_';
get_header();
?>
      <section class="center__wrapper" aria-label="デスクトップ用ヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a>トップページ</li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">調べたいこと</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">難病手当</a></li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="わたしたちのSLE">
        </a>
        <h1 class="title">難病手当</h1>
      </section>
      
      <section class="sec01">
        <p class="subtitle">自治体によっては難病患者さんへの手当制度があります。お住まいの地域でもらえるかもしれないので、確認してみましょう。</p>
      </section>
      <section class="sec02 section">
        <h2 class="about-sle__title" id="systemic">
          自治体の難病見舞金・福祉手当
        </h2>
        <p class="about-sle__text">
          自治体の「難病見舞金・福祉手当」は、国の制度じゃなくて市区町村の独自給付なので、内容がかなりバラつきます。取り扱っていない自治体も多いです。
        </p>
        <p class="about-sle__text">
          難病患者福祉手当<br>
          心身障害者福祉手当（難病要件あり）<br>
          難病療養者見舞金など<br>
          自治体によって呼び方も違いがあります。
        </p>
        <p class="about-sle__text">
          例えば<br>
          東京都中央区：月額15,500円。申請月から支給で、年3回まとめて振込。<br>
          栃木県小山市：申請して認定された人に支給。2025/10/1改正で「1回あたり24,000円」へ変更、など（基準日や振込時期が設定されている）
        </p>
      </section>    
      
      <section class="category__wrapper bg-white">
        <div class="category">
          カテゴリー：
          <a href="#">#難病手当 </a>
          <a href="#">#市区町村 </a>
        </div>
        <p class="up-dated__text">
          作成日・更新日 <time datetime="2026-06-12">2026.06.12</time>
        </p>
      </section>

      <img class="bg_blue_victor" src="<?= THEME_URI ?>/assets/images/background/bg-blue02.webp" alt="">

      <section class="pics bg-blue">
        <h2 class="pics__title">おすすめのページ</h2>
        <div class="pics__links">
          <a href="<?php echo esc_url( home_url( '/diagnosis/' ) ); ?>" class="pics__left-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_sindan.webp" alt="医療費の制度のサムネイル">
            <div class="button">
              <span>つづきを読む</span>
              <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
            </div>
          </a>
          <a href="<?php echo esc_url( home_url( '/treatment/' ) ); ?>" class="pics__right-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_tiryou.webp" alt="医療費の制度のサムネイル">
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
