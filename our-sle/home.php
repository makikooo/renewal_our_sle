<?php
/**
 * ブログ投稿一覧（投稿ページ）
 * 設定 → 表示設定 で「投稿ページ」に指定した固定ページ（例: 更新情報一覧）で使われます。
 * デザインは blog/blogs.html を踏襲し、記事リストを投稿ループに置き換えています。
 *
 * @package oursle
 */
$GLOBALS['oursle_center_id'] = 'blog';
get_header();
?>
      <section class="center__wrapper" aria-label="デスクトップ用ヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">わたしたちのSLE</a></li>
          <li class="breadcrumb__item">更新情報一覧</li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="わたしたちのSLE">
        </a>
        <h1 class="title">更新情報一覧</h1>
      </section>

      <section class="news__section">
        <?php if ( have_posts() ) : ?>
        <ul class="news__list">
          <?php
          while ( have_posts() ) :
              the_post();
              $badge = oursle_news_badge( get_the_ID() );
              ?>
          <li>
            <a href="<?php the_permalink(); ?>" class="news__item">
              <time class="news__date" datetime="<?php echo esc_attr( get_the_date( 'Y-m-d' ) ); ?>"><?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?></time>
              <p class="news__text"><?php the_title(); ?></p>
              <span class="news__cat <?php echo esc_attr( $badge['class'] ); ?>"><?php echo esc_html( $badge['label'] ); ?></span>
            </a>
          </li>
          <?php endwhile; ?>
        </ul>
        <div class="pager">
          <?php the_posts_pagination( array( 'mid_size' => 2, 'prev_text' => '前へ', 'next_text' => '次へ' ) ); ?>
        </div>
        <?php else : ?>
        <p class="news__empty">更新情報はまだありません。</p>
        <?php endif; ?>
      </section>

      <img class="bg_blue_victor" src="<?= THEME_URI ?>/assets/images/background/bg-blue02.webp" alt="">

      <section class="pics bg-blue">
        <h2 class="pics__title">おすすめのページ</h2>
        <div class="pics__links">
          <a href="<?php echo esc_url( home_url( '/symptoms/' ) ); ?>" class="pics__left-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_shoujou.webp" alt="SLEの症状のサムネイル">
            <div class="button">
              <span>つづきを読む</span>
              <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
            </div>
          </a>
          <a href="<?php echo esc_url( home_url( '/treatment/' ) ); ?>" class="pics__right-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_tiryou.webp" alt="SLEの治療のサムネイル">
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
