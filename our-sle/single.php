<?php
/**
 * 単一記事（ブログ）テンプレート
 * デザインは blog/article.html を踏襲しています。
 *
 * @package oursle
 */
$GLOBALS['oursle_center_id'] = 'blog-article';
get_header();
?>
      <section class="center__wrapper" aria-label="デスクトップ用ヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">わたしたちのSLE</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( oursle_blog_url() ); ?>">更新情報一覧</a></li>
          <li class="breadcrumb__item"><?php the_title(); ?></li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="<?php bloginfo( 'name' ); ?>">
        </a>
        <h1 class="title">ブログ</h1>
      </section>

      <div class="article__layout">
        <?php while ( have_posts() ) : the_post(); ?>
        <article class="article__main">
          <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'large', array( 'class' => 'article__img' ) ); ?>
          <?php endif; ?>
          <p class="article__date">公開日：<?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?></p>
          <div class="article__tags">
            <?php
            foreach ( get_the_category() as $cat ) {
                echo '<span class="article__tag">' . esc_html( $cat->name ) . '</span>';
            }
            ?>
          </div>
          <h2 class="article__title"><?php the_title(); ?></h2>
          <div class="article__body">
            <?php the_content(); ?>
          </div>
        </article>
        <?php endwhile; ?>

        <aside class="article__side">
          <h2 class="side__heading">カテゴリー</h2>
          <ul class="side__list">
            <?php wp_list_categories( array( 'title_li' => '', 'show_count' => false ) ); ?>
          </ul>

          <h2 class="side__heading">タグ</h2>
          <ul class="side__list">
            <?php
            $tags = get_tags();
            foreach ( $tags as $tag ) {
                echo '<li><a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '">' . esc_html( $tag->name ) . '</a></li>';
            }
            ?>
          </ul>
        </aside>
      </div>

      <?php
      // コメント（コメントが開いている、または既にコメントがある場合に表示）
      if ( comments_open() || get_comments_number() ) {
          comments_template();
      }
      ?>

      <nav class="article__nav">
        <?php
        // VK外部リンク投稿はスキップして前後の記事を取得
        $prev = oursle_adjacent_post( true );
        $next = oursle_adjacent_post( false );
        ?>
        <?php if ( $prev ) : ?>
        <a href="<?php echo esc_url( get_permalink( $prev ) ); ?>" class="article__nav-item">
          <span>前へ</span>
          <span class="section__button">
            <svg viewBox="0 0 24 24">
              <line x1="3" y1="12" x2="24" y2="12" />
              <polyline points="10 5 3 12 10 19" />
            </svg>
          </span>
        </a>
        <?php endif; ?>
        <a href="<?php echo esc_url( oursle_blog_url() ); ?>" class="article__nav-back">一覧に戻る</a>
        <?php if ( $next ) : ?>
        <a href="<?php echo esc_url( get_permalink( $next ) ); ?>" class="article__nav-item">
          <span>次へ</span>
          <span class="section__button">
            <svg viewBox="0 0 24 24">
              <line x1="0" y1="12" x2="21" y2="12" />
              <polyline points="14 5 21 12 14 19" />
            </svg>
          </span>
        </a>
        <?php endif; ?>
      </nav>
<?php get_footer();
