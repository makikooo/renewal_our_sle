<?php
/**
 * 汎用固定ページテンプレート
 * 専用の page-{slug}.php が無い固定ページで使われます。
 * 管理画面の本文（the_content）を表示します。
 *
 * @package oursle
 */
$GLOBALS['oursle_center_id'] = 'page';
get_header();
?>
      <section class="center__wrapper" aria-label="デスクトップ用ヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
          <li class="breadcrumb__item"><?php the_title(); ?></li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="<?php bloginfo( 'name' ); ?>">
        </a>
        <h1 class="title"><?php the_title(); ?></h1>
      </section>

      <section class="sec01 section">
        <?php
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>
      </section>
<?php get_footer();
