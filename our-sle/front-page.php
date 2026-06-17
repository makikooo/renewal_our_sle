<?php
/**
 * わたしたちのSLE | SLE（全身性エリテマトーデス）を患者目線でやさしく解説
 * 元ファイル: index.html
 */
$GLOBALS['oursle_center_id'] = 'toppage';
get_header();
?>
      <section class="center__wrapper" aria-label="デスクトップ用ヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="わたしたちのSLE">
        </a>
        <h1 class="title">わたしたちのSLE</h1>
        <p class="subtitle">一緒に笑って生きていくために</p>
      </section>
      <img src="<?= THEME_URI ?>/assets/images/toppage/hero.webp" alt="お茶を飲む女性三人" class="hero">
      <section class="sec01">
        <h2 class="about_site_title">このサイトについて</h2>
        <p class="about_site_text">当サイト、<span class="bold">わたしたちのSLE</span>は、患者目線でSLE(全身性エリテマトーデス)の情報をやさしくまとめ、わたしたちのQOLを高め合いたいサイトです。<br>症状や検査、薬のことや「日常を少しでも楽にするヒント」も探せます。</p>
        <a class="button" href="<?php echo esc_url( home_url( '/about-site/' ) ); ?>">
          <span>つづきを読む</span>
          <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
        </a>
      </section>
      
      <img class="bg_lightblue" src="<?= THEME_URI ?>/assets/images/background/bg_lightblue.webp" alt="">
      
      <section class="sec02 bg-blue">
        <div class="sec02__center">
          <h2 class="sec02__title">社会的寛解を目指して</h2>
          <p class="sec02__sub-title">皆さまの気持ちが落ち着きますように</p>
        </div>

        <div class="support">
          <img class="support__accent" src="<?= THEME_URI ?>/assets/images/toppage/accent-white.webp" alt="">
          <a href="<?php echo esc_url( home_url( '/menu-support/' ) ); ?>" class="support__button lightpink">
            <h3 class="support__title">
              困っている
            </h3>
            <img class="support__img" src="<?= THEME_URI ?>/assets/images/toppage/support-button.webp" alt="困ってる画像">
            <p class="support__text">生活・こころ<br>暮らしから探す</p>
          </a>
        </div>
        <a href="<?php echo esc_url( home_url( '/first/' ) ); ?>" class="pink support-info__button">
          <div class="support__botton-left">
            <h3 class="support__title">初めて診断された</h3>
            <p class="support__subtitile">まず最初にすること</p>
          </div>
          <img src="<?= THEME_URI ?>/assets/images/toppage/first-mark.webp" alt="初心者マークのイメージ" class="support__img">
        </a>
        <a href="<?php echo esc_url( home_url( '/doubt/' ) ); ?>" class="lightpink support-info__button">
          <div class="support__botton-left">
            <h3 class="support__title">疑いと言われた</h3>
            <p class="support__subtitile">病院で聞くこと</p>
          </div>
          <img src="<?= THEME_URI ?>/assets/images/toppage/moyamoya.webp" alt="モヤモヤしたイメージ" class="support__img">
        </a>
        <a href="<?php echo esc_url( home_url( '/family/' ) ); ?>" class="pink support-info__button">
          <div class="support__botton-left">
            <h3 class="support__title">ご家族や身近な方</h3>
            <p class="support__subtitile">近い存在だからできること</p>
          </div>
          <img src="<?= THEME_URI ?>/assets/images/toppage/family.webp" alt="家族のイメージ" class="support__img">
        </a>
        <a href="<?php echo esc_url( home_url( '/menu-check/' ) ); ?>" class="lightpink support-info__button">
          <div class="support__botton-left">
            <h3 class="support__title">調べたい</h3>
            <p class="support__subtitile">検査結果・薬を調べる</p>
          </div>
          <img src="<?= THEME_URI ?>/assets/images/toppage/siraberu.webp" alt="発見のイメージ" class="support__img">
        </a>
        <img class="sec03__top-img sp_only" src="<?= THEME_URI ?>/assets/images/background/bg-white.webp" alt="">
        <img class="sec03__top-img pc_only" src="<?= THEME_URI ?>/assets/images/background/bg-blue_yellow.webp" alt="">
      </section>
      
      <section class="sec_line bg-white sp_only">
        <a href="https://line.me/ti/g2/vthSUWGZnAREorbZw_pkxZ1umVSj0lhslOhGsA?utm_source=invitation&utm_medium=link_copy&utm_campaign=default" target="_blank" class="line__container">
          <img class="line__img" src="<?= THEME_URI ?>/assets/images/line_icon.webp" alt="LINEのアイコン">
          <img class="qr__img" src="<?= THEME_URI ?>/assets/images/qr.webp" alt="LINEのQRコード">
          <div class="oc__text_box">
            <p class="oc__text">SLE仲間募集してます<br>オープンチャット</p>
          </div>
        </a>
        <a class="button go_to_line" href="https://line.me/ti/g2/vthSUWGZnAREorbZw_pkxZ1umVSj0lhslOhGsA?utm_source=invitation&utm_medium=link_copy&utm_campaign=default" target="_blank">
          <span>匿名で参加してみる</span>
          <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
        </a>
        <img class="sec03__top-img" src="<?= THEME_URI ?>/assets/images/background/bg-yellow03.webp" alt="">
      </section>

      <section class="sec03 bg_yellow">
        <img src="<?= THEME_URI ?>/assets/images/toppage/our_future_title.webp" alt="わたしたちの未来" class="future__img">
        <p class="qol">
          SLEになって悲観的になりすぎていませんか？<br>
        </p>
        <p class="qol">
          あなたの幸せのために小さな喜びを見つけて<br>
          生きるコツを一緒に見つけませんか
        </p>
        <img class="flower" src="<?= THEME_URI ?>/assets/images/toppage/flower.webp" alt="一輪の花">
        <a class="enquete__link" href="https://docs.google.com/forms/d/e/1FAIpQLSc7O8RoWahgaMXc7ilKptHCIFuQyfkdG1ReZwCvg66EoGjMGA/viewform?usp=sharing" target="_blank" rel="noopener">
          <img class="enquete__link-img" src="<?= THEME_URI ?>/assets/images/toppage/enquete.webp" alt="あるあるアンケートのバナー">
        </a>
        <a class="button button__enquete" href="https://docs.google.com/forms/d/e/1FAIpQLSc7O8RoWahgaMXc7ilKptHCIFuQyfkdG1ReZwCvg66EoGjMGA/viewform?usp=sharing" target="_blank" rel="noopener">
          <span>匿名で参加する(2分)</span>
          <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
        </a>
        <a class="button button__enquete" href="<?php echo esc_url( home_url( '/menu-enquete/' ) ); ?>">
          <span>結果を見る</span>
          <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
        </a>
      </section>
      <section class="sec04">
        <img class="sec04__top-img" src="<?= THEME_URI ?>/assets/images/background/bg-yellow.webp" alt="">
        <h3 class="about-sle__title">SLEとは</h3>
        <p>
          SLE（全身性エリテマトーデス）は、<br>
          免疫のバランスがくずれることで、関節や皮膚、内臓など体のいろいろなところに不調が出ることがある病気です。
        </p>
        <a class="button about-sle__enquete" href="<?php echo esc_url( home_url( '/about-sle/' ) ); ?>">
          <span>SLEをくわしく見る</span>
          <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
        </a>
      </section>
      <section class="sec05">
        <img class="sec05__top-bg" src="<?= THEME_URI ?>/assets/images/background/bg-white02.webp" alt="">
        <h3 class="concern__title">いま、気になること</h3>
        <p>気になる言葉を押すと関連ページに飛びます</p>
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
      <section class="sec06">
        <img class="sec06__top-bg" src="<?= THEME_URI ?>/assets/images/background/bg_green.webp" alt="">
        <h3 class="update__titie">更新情報</h3>
        <ul>
          <?php
          $oursle_news = new WP_Query(
              array(
                  'post_type'           => 'post',
                  'posts_per_page'      => 3,
                  'ignore_sticky_posts' => true,
              )
          );
          if ( $oursle_news->have_posts() ) :
              while ( $oursle_news->have_posts() ) :
                  $oursle_news->the_post();
                  $badge = oursle_news_badge( get_the_ID() );
                  ?>
          <li class="update__list">
            <a class="update_link" href="<?php the_permalink(); ?>">
              <div class="update__meta">
                <time class="update__time" datetime="<?php echo esc_attr( get_the_date( 'Y-m-d' ) ); ?>"><?php echo esc_html( get_the_date( 'y.m.d' ) ); ?></time>
                <span class="update__category <?php echo esc_attr( $badge['class'] ); ?>"><?php echo esc_html( $badge['label'] ); ?></span>
              </div>
              <p class="update__text"><?php the_title(); ?></p>
            </a>
          </li>
              <?php
              endwhile;
              wp_reset_postdata();
          else :
              ?>
          <li class="update__list">
            <p class="update__text">更新情報はまだありません。</p>
          </li>
          <?php endif; ?>
        </ul>
        <a class="button update__button" href="<?php echo esc_url( oursle_blog_url() ); ?>">
          <span>つづきを読む</span>
          <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
        </a>
      </section>
      <section class="sec07">
        <img class="sec07__top-img" src="<?= THEME_URI ?>/assets/images/background/bg-white03.webp" alt="">
        <h3 class="term__title">ご利用にあたって</h3>
        <p class="term__text">
          本サイトの内容は、SLEに関する情報提供を目的としており、医師の診断や治療に代わるものではありません。<br>
          体調に不安がある場合や治療について判断が必要な場合は、必ず医療機関へご相談ください。<br>
          掲載情報はできる限り正確にお伝えできるよう努めていますが、内容の完全性・最新性を保証するものではありません。
        </p>
      </section>

      
<?php get_footer();
