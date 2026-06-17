<?php
/**
 * 疑いと言われた方へ | わたしたちのSLE | SLE（全身性エリテマトーデス）を患者目線でやさしく解説
 * 元ファイル: doubt.html
 */
$GLOBALS['oursle_center_id'] = 'first';
get_header();
?>
      <section class="center__wrapper" aria-label="デスクトップ用ヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">疑いと診断された方へ</a></li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="わたしたちのSLE">
        </a>
        <h1 class="title">疑いと診断された方へ</h1>
        <h2 class="sub_title">気になることを整理にして診察してくださいね</h2>
      </section>
      <section class="sec01">
        <p class="first__text">難病である全身性エリテマトーデスの疑いです。</p>
        <p class="first__text">と言われたらとても不安ですよね</p>
        <p class="first__text">主治医からの言葉をしっかりお聞きになりどう付き合ったらいいのかどんな薬があるのかもしくはどんな薬がないのかを尋ねられるとるといいかと思います。</p>
        <p class="first__text">膠原病内科のある大きな病院に紹介状を書いてもらい受診して検査をすることも一つの手かもしれません</p>
        <p class="first__text">あと、大事なこととして、<span class="under_line">無理をせずにいてくださいね</span>。ストレスになるようなことは避けてください</p>
        <p class="first__text">医療費がかかると思いますので、<span class="under_line">高額療養費制度</span>を利用されることをお勧めします</p>
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

      <section class="sec03 bg-green">
        <img class="sec03__top-img" src="<?= THEME_URI ?>/assets/images/background/bg_green03.webp" alt="">
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
