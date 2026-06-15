<?php
/**
 * 汎用一覧テンプレート（フォールバック）
 * アーカイブ・検索結果・投稿一覧などで使われます。
 * デザインは blog/blogs.html の更新情報リストを踏襲しています。
 *
 * @package oursle
 */
$GLOBALS['oursle_center_id'] = 'blog';
get_header();
?>
      <section class="center__wrapper" aria-label="デスクトップ用ヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">わたしたちのSLE</a></li>
          <li class="breadcrumb__item">
            <?php
            if ( is_search() ) {
                echo '検索結果：' . esc_html( get_search_query() );
            } elseif ( is_archive() ) {
                the_archive_title();
            } else {
                echo '更新情報一覧';
            }
            ?>
          </li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="<?php bloginfo( 'name' ); ?>">
        </a>
        <h1 class="title">
          <?php
          if ( is_search() ) {
              echo '検索結果';
          } elseif ( is_archive() ) {
              the_archive_title();
          } else {
              echo '更新情報一覧';
          }
          ?>
        </h1>
      </section>

      <section class="news__section">
        <?php if ( have_posts() ) : ?>
        <ul class="news__list">
          <?php while ( have_posts() ) : the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>" class="news__item">
              <i class="fa-regular fa-clock news__icon"></i>
              <time class="news__date" datetime="<?php echo esc_attr( get_the_date( 'Y-m-d' ) ); ?>"><?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?></time>
              <p class="news__text"><?php the_title(); ?></p>
              <?php
              $cats = get_the_category();
              if ( ! empty( $cats ) ) {
                  echo '<span class="news__cat">' . esc_html( $cats[0]->name ) . '</span>';
              }
              ?>
            </a>
          </li>
          <?php endwhile; ?>
        </ul>
        <div class="pager">
          <?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?>
        </div>
        <?php else : ?>
        <p class="news__empty">記事がまだありません。</p>
        <?php endif; ?>
      </section>
<?php get_footer();
