<?php
/**
 * 仲間とつながる | わたしたちのSLE | SLE（全身性エリテマトーデス）を患者目線でやさしく解説
 * 元ファイル: communication-sle/menu-communication.html
 */
$GLOBALS['oursle_center_id'] = 'menu-sle';
get_header();
?>
      <ul class="breadcrumb__list">
        <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
        <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">仲間とつながる</a></li>
      </ul>
      <section class="sec01">
        <h1 class="title">仲間とつながる</h1>
        <p class="title__text">SLEと向き合う仲間がいます。経験を分かち合える場所を紹介します。</p>
      </section>

      <a href="<?php echo esc_url( home_url( '/openchat/' ) ); ?>" class="sec02 bg-lightYellow">
        <div class="menu-sle">
          <h2 class="sub-title">オープンチャット</h2>
          <p>わたしが運営しているオープンチャットには、たくさんのSLE患者さんやご家族・関係者の方々が匿名で参加しています。体調のこと、治療のこと、日常の小さな悩みまで、気軽に話せる温かいコミュニティです。</p>
        </div>
        <div class="section__button">
          <svg viewBox="0 0 24 24">  <!-- min-x(座標系の左端を0から始める) min-y(座標系の上端を0から始める) width(内部の横幅を24) height(内部の縦幅を24) -->
            <line x1="0" y1="12" x2="21" y2="12" />  <!-- 横棒 x1=始点x y1=始点y(縦の中心) x2=横棒の終点 y2=終点 -->
            <polyline points="14 5 21 12 14 19" />  <!-- 18 9(左上（矢印の上の点) 21 12=右端(矢印の頂点 lineのx2と一致) 18 15(左下 矢印の下の点)  -->
          </svg>
        </div>
      </a>
      
      <div class="bg-lightYellow">
        <a href="<?php echo esc_url( home_url( '/about-me/' ) ); ?>" class="sec02 bg-lightBlue pb50">
          <div class="menu-sle">
            <h2 class="sub-title">わたしについて</h2>
            <p>このサイトを運営しているわたしのことを少しお話しします。SLEと一緒に歩んできた経験から、同じ病気を持つ人たちに役立つ情報を届けたいと思っています。</p>
          </div>
          <div class="section__button">
            <svg viewBox="0 0 24 24">  <!-- min-x(座標系の左端を0から始める) min-y(座標系の上端を0から始める) width(内部の横幅を24) height(内部の縦幅を24) -->
              <line x1="0" y1="12" x2="21" y2="12" />  <!-- 横棒 x1=始点x y1=始点y(縦の中心) x2=横棒の終点 y2=終点 -->
              <polyline points="14 5 21 12 14 19" />  <!-- 18 9(左上（矢印の上の点) 21 12=右端(矢印の頂点 lineのx2と一致) 18 15(左下 矢印の下の点)  -->
            </svg>
          </div>
        </a>
      </div>
      
    
      
<?php get_footer();
