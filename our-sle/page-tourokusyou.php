<?php
/**
 * 難病登録証 | SLE（全身性エリテマトーデス）を患者目線でやさしく解説
 * 元ファイル: check-sle/tourokusyou.html
 */
$GLOBALS['oursle_center_id'] = 'about__sle_';
get_header();
?>
      <section class="center__wrapper" aria-label="デスクトップ用ヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">調べたいこと</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">難病登録証</a></li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="わたしたちのSLE">
        </a>
        <h1 class="title">難病登録証</h1>
      </section>
      
      <section class="sec01">
        <p class="subtitle">現時点では活用場面が限られていますが、これから広がっていく可能性があります。</p>
      </section>
      <section class="section">
        <h2 class="about-sle__title" id="systemic">
          登録者証の概要
        </h2>
        <p class="about-sle__text">
          <span class="bold">目的: </span><br>
          指定難病患者であることを証明し、障害福祉サービスやハローワークでの就労支援などをスムーズに利用できるようにする。<br>
          <span class="bold">発行</span><br>
          診断基準を満たした患者からの申請に基づき、市町村などが発行する（紙またはマイナポータル連携）。<br>
          <span class="bold">メリット</span><br>
          診断書なしで難病患者であることを証明でき、手続きの負担軽減になる。<br>
          <span class="bold">対象</span><br>
          医療費助成の重症度要件を満たさない方でも交付対象となる場合がある。<br>
        </p>
        
        <h2 class="about-sle__title" id="systemic">
          受給者証（医療費助成）との違い
        </h2>
        <p class="about-sle__text">
          <span class="bold">受給者証</span><br>
          医療費助成（公費負担医療）を受けるためのもので、審査が必要。指定医療機関での受診に限定される。<br>
          <span class="bold">登録者証</span><br>
          支援利用のための証明。受給者証がなくても、難病であることの証明として利用可能
        </p>
        
      </section>    
      
      <section class="category__wrapper bg-white">
        <div class="category">
          タグ：
          <a href="#">#特定疾患受給者票 </a>
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
          <a href="<?php echo esc_url( home_url( '/jukyuusyahyou/' ) ); ?>" class="pics__left-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_jukyuusya.webp" alt="便利な受給者票の使い方のサムネイル">
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
        <?php get_template_part( 'template-parts/concern-tags' ); ?>
      </section>

      
<?php get_footer();
