<?php
/**
 * SLEのオープンチャット | SLE（全身性エリテマトーデス）を患者目線でやさしく解説
 * 元ファイル: communication-sle/openchat.html
 */
$GLOBALS['oursle_center_id'] = 'about__sle_';
get_header();
?>
      <section class="center__wrapper" aria-label="デスクトップ用ヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/menu-communication/' ) ); ?>">仲間とつながる</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">オープンチャット</a></li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="わたしたちのSLE">
        </a>
        <h1 class="title">オープンチャット（LINE）</h1>
      </section>
      
      <section class="sec01">
        <p class="subtitle">匿名で参加できるLINEのグループチャットです。SLE患者さんやご家族が集まって、日々の悩みや情報を共有しています。</p>
      </section>
      <section class="section" id="about-sle">
        <h2 class="about-sle__title">
          仲間さがしの方法
        </h2>
        <p class="about-sle__text">
          SLEって、分かってもらえないことが多くて、ちょっと孤独になりやすいですよね。<br>
          そんな時に、気軽に立ち寄れる場所があると楽になります。<br>
          <br>
          わたしが管理している、LINEの「オープンチャット」は 匿名で参加できて、いつでも退会OK。読むだけ・たまにひと言だけ でも大丈夫です。<br>
          オープンチャットでは、患者さん・ご家族・身近な方が、「体調の波」「薬のこと」「仕事や家のこと」などをゆるく話しています。 重い空気ではなく、無理せず、安心して過ごせる雰囲気を大切にしています。<br>
          よかったら、まずは“のぞくだけ”でもしてみませんか？<br>
          お待ちしてますね😊
        </p>
        <a class="button update__button" href="https://line.me/ti/g2/vthSUWGZnAREorbZw_pkxZ1umVSj0lhslOhGsA?utm_source=invitation&utm_medium=link_copy&utm_campaign=default" target="_blank" rel="noopener noreferrer">
            <span>
              オープンチャットは<br>
              こちら
            </span>
            <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d; transform: rotate(-45deg);"></i>
          </a>
      </section>
      <section class="category__wrapper bg-white section">
        <div class="category">
          タグ：
          <a href="<?php echo esc_url( oursle_tag_url( 'オープンチャット' ) ); ?>">#オープンチャット </a>
          <a href="<?php echo esc_url( oursle_tag_url( '仲間さがし' ) ); ?>">#仲間さがし </a>
        </div>
        <p class="up-dated__text">
          作成日・更新日 <time datetime="2026-06-12">2026.06.12</time>
        </p>
      </section>

      <img class="bg_blue_victor" src="<?= THEME_URI ?>/assets/images/background/bg-blue02.webp" alt="">

      <section class="pics bg-blue">
        <h2 class="pics__title">おすすめのページ</h2>
        <div class="pics__links">
          <a href="<?php echo esc_url( home_url( '/symptoms/' ) ); ?>" class="pics__left-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_shoujou.webp" alt="症状のサムネイル">
            <div class="button">
              <span>つづきを読む</span>
              <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
            </div>
          </a>
          <a href="<?php echo esc_url( home_url( '/treatment/' ) ); ?>" class="pics__right-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_tiryou.webp" alt="治療のサムネイル">
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
        <?php get_template_part( 'template-parts/concern-tags' ); ?>
      </section>

      
<?php get_footer();
