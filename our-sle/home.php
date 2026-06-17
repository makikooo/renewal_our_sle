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

      <!-- おすすめのページ -->
      <img class="bg_lightblue" src="<?= THEME_URI ?>/assets/images/background/bg_lightblue.webp" alt="">
      <section class="recommend">
        <h2 class="recommend__title">おすすめのページ</h2>
        <div class="recommend__wrapper">
          <a href="<?php echo esc_url( home_url( '/openchat/' ) ); ?>" class="recommend__card">
            <img class="recommend__img" src="<?= THEME_URI ?>/assets/images/about-me.webp" alt="オープンチャット">
            <div class="recommend__foot">
              <span class="recommend__label">オープン<br>チャット</span>
              <span class="section__button">
                <svg viewBox="0 0 24 24">
                  <line x1="0" y1="12" x2="21" y2="12" />
                  <polyline points="14 5 21 12 14 19" />
                </svg>
              </span>
            </div>
          </a>
          <a href="<?php echo esc_url( home_url( '/menu-enquete/' ) ); ?>" class="recommend__card">
            <img class="recommend__img" src="<?= THEME_URI ?>/assets/images/enquete.webp" alt="あるあるアンケート結果">
            <div class="recommend__foot">
              <span class="recommend__label">あるあるアン<br>ケート結果</span>
              <span class="section__button">
                <svg viewBox="0 0 24 24">
                  <line x1="0" y1="12" x2="21" y2="12" />
                  <polyline points="14 5 21 12 14 19" />
                </svg>
              </span>
            </div>
          </a>
        </div>
      </section>

      <!-- よく読まれているページ -->
      <section class="popular">
        <img class="popular__top-bg" src="<?= THEME_URI ?>/assets/images/background/bg_green.webp" alt="">
        <h2 class="popular__title">よく読まれているページ</h2>
        <p class="popular__lead">気になる言葉を押すと関連ページに飛びます</p>
        <div class="popular__wrapper">
          <a class="popular__link" href="<?php echo esc_url( home_url( '/symptoms/' ) ); ?>">
            <span class="concern__tag">#だるさ</span>
          </a>
          <a class="popular__link" href="<?php echo esc_url( home_url( '/kokoro-care/' ) ); ?>">
            <span class="concern__tag">#不安</span>
          </a>
          <a class="popular__link" href="<?php echo esc_url( home_url( '/school-job/' ) ); ?>">
            <span class="concern__tag">#学校</span>
          </a>
          <a class="popular__link" href="<?php echo esc_url( home_url( '/doctor/' ) ); ?>">
            <span class="concern__tag">#医師との信頼関係</span>
          </a>
          <a class="popular__link" href="<?php echo esc_url( home_url( '/symptoms/' ) ); ?>">
            <span class="concern__tag">#皮疹</span>
          </a>
          <a class="popular__link" href="<?php echo esc_url( home_url( '/sle-life-tips/' ) ); ?>">
            <span class="concern__tag">#生活のコツ</span>
          </a>
          <a class="popular__link" href="<?php echo esc_url( home_url( '/treatment/' ) ); ?>">
            <span class="concern__tag">#薬</span>
          </a>
        </div>
      </section>
<?php get_footer();
