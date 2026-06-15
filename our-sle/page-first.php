<?php
/**
 * 初めて診断された方へ | わたしたちのSLE | SLE（全身性エリテマトーデス）を患者目線でやさしく解説
 * 元ファイル: first.html
 */
$GLOBALS['oursle_center_id'] = 'first';
get_header();
?>
      <section class="center__wrapper" aria-label="デスクトップ用ヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a>トップページ</li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">初めて診断された方へ</a></li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="わたしたちのSLE">
        </a>
        <h1 class="title">初めて診断された方へ</h1>
        <h2 class="sub_title">まず最初にやること</h2>
      </section>
      <section class="sec01">
        <p class="first__text">私が診断を受けたばかりの時は寝たきりのように寝込んでいたので子育てがうまくいかずに悔しい思いをしました。</p>
        <p class="first__text">今すぐに治したい気持ちは分かりますが焦ると本当によくないです。気長に気長にいてくださいね</p>
        <p class="first__text">気になることがたくさんある中で<span class="under_line">医療費</span>が特に気になりますよね。</p>
        <p class="first__text">SLE(全身性エリテマトーデス)ですとお医者さんから言われましたら、指定難病の医療券（<span class="under_line">特定疾患受給者票</span>）の手続きを早めにしてください。昨年の世帯の所得によって金額は変わりますが難病に関しての診察代、薬代などが月に決まったお金までしか払わなくていい制度があります。特定疾患治療研究事業の医療費助成制度と言います。</p>
        <p class="first__text">詳しくは病院のソーシャルワーカーさんや保健所に聞くのが一番話が進みやすいかと思います</p>
      </section>
      
      <img class="bg_lightblue" src="<?= THEME_URI ?>/assets/images/background/bg-blue02.webp" alt="">
      
      <section class="sec02 bg-blue">
        <h2 class="sec02__title">おすすめのページ</h2>
        <div class="sec02__links">
          <a href="<?php echo esc_url( home_url( '/system/' ) ); ?>" class="sec02__left-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_medical-support.webp" alt="医療費の制度のサムネイル">
            <div class="button">
              <span>つづきを読む</span>
              <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
            </div>
          </a>
          <a href="<?php echo esc_url( home_url( '/about-sle/' ) ); ?>" class="sec02__right-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_about-sle.webp" alt="医療費の制度のサムネイル">
            <div class="button">
              <span>つづきを読む</span>
              <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
            </div>
          </a>
        </div>
      </section>

      <img class="sec03__top-img bg-blue" src="<?= THEME_URI ?>/assets/images/background/bg_green03.webp" alt="">
      <section class="sec03 bg-green">
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
