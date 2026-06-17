<?php
/**
 * タグ一覧 | 「タグ：」のタグをクリックしたときに開く関連ページ一覧。
 *
 * /tags/?t=<ラベル> で開き、そのタグを含む固定ページを一覧表示する。
 * 元データは functions.php の oursle_tag_index()（台帳）。
 *
 * @package oursle
 */
$GLOBALS['oursle_center_id']    = 'tag__archive';
$GLOBALS['oursle_center_class'] = 'diagnosis center__column';
get_header();

// クエリからタグのラベルを取得（先頭の「#」が付いていても除く）。
$oursle_tag_raw   = isset( $_GET['t'] ) ? sanitize_text_field( wp_unslash( $_GET['t'] ) ) : '';
$oursle_tag_label = ltrim( $oursle_tag_raw, '#' );
$oursle_tag_label = trim( $oursle_tag_label );

$oursle_tag_pages = $oursle_tag_label ? oursle_pages_for_tag( $oursle_tag_label ) : array();
?>
      <section class="center__wrapper" aria-label="デスクトップ用ヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
          <li class="breadcrumb__item">タグ</li>
          <?php if ( $oursle_tag_label ) : ?>
          <li class="breadcrumb__item">#<?php echo esc_html( $oursle_tag_label ); ?></li>
          <?php endif; ?>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="わたしたちのSLE">
        </a>
        <h1 class="title"><?php echo $oursle_tag_label ? '#' . esc_html( $oursle_tag_label ) : 'タグ'; ?></h1>
      </section>

      <section class="section">
        <?php if ( $oursle_tag_label && $oursle_tag_pages ) : ?>
          <p class="subtitle">「#<?php echo esc_html( $oursle_tag_label ); ?>」に関連するページ（<?php echo count( $oursle_tag_pages ); ?>件）</p>
          <ul class="tag-archive__list">
            <?php
            foreach ( $oursle_tag_pages as $oursle_slug ) :
				$oursle_pid = oursle_page_id_by_slug( $oursle_slug );
				if ( ! $oursle_pid ) {
					continue;
				}
				?>
            <li class="tag-archive__item">
              <a class="tag-archive__link" href="<?php echo esc_url( oursle_url_by_slug( $oursle_slug ) ); ?>">
                <span class="tag-archive__page"><?php echo esc_html( get_the_title( $oursle_pid ) ); ?></span>
                <i class="fa-regular fa-circle-right fa-xl" style="color: #71936d;"></i>
              </a>
            </li>
            <?php endforeach; ?>
          </ul>
        <?php elseif ( $oursle_tag_label ) : ?>
          <p class="subtitle">「#<?php echo esc_html( $oursle_tag_label ); ?>」に関連するページは見つかりませんでした。</p>
        <?php else : ?>
          <p class="subtitle">気になるタグを選んでください。</p>
        <?php endif; ?>
      </section>

      <section class="category__wrapper bg-white section">
        <div class="category">
          すべてのタグ：
          <?php foreach ( oursle_all_tag_labels() as $oursle_label ) : ?>
          <a href="<?php echo esc_url( oursle_tag_url( $oursle_label ) ); ?>">#<?php echo esc_html( $oursle_label ); ?> </a>
          <?php endforeach; ?>
        </div>
      </section>

      <section class="concern">
        <img class="concern__top-img" src="<?= THEME_URI ?>/assets/images/background/bg_green03.webp" alt="">
        <h3 class="concern__title">いま、気になること</h3>
        <p class="concern__text">気になる言葉を押すと関連ページに飛びます</p>
        <?php get_template_part( 'template-parts/concern-tags' ); ?>
      </section>

<?php get_footer();
