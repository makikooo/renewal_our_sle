<?php
/**
 * あるあるアンケートのもくじ | わたしたちのSLE | SLE（全身性エリテマトーデス）を患者目線でやさしく解説
 * 元ファイル: enquete/menu-enquete.html
 */
$GLOBALS['oursle_center_id'] = 'menu-sle';
get_header();
?>
      <ul class="breadcrumb__list">
        <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
        <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">あるあるアンケートのもくじ</a></li>
      </ul>
      <section class="sec01">
        <h1 class="title">アンケート</h1>
        <p class="title__text">「これ、わたしだけ?」と思っていたこと、実はみんなも同じかも。あるあるアンケートの結果を見て、共感してみませんか。</p>
      </section>

      <section class="enquete-card">
        <div class="enquete-card__top">
          <h2 class="enquete-card__title">SLE × 仕事 アンケート</h2>
          <span class="enquete-card__badge">開催中</span>
        </div>
        <p class="enquete-card__subtitle">仕事に関すること</p>
        <p class="enquete-card__lead">SLEと仕事の両立、みんなはどうしてる？<br>あなたの経験を教えてください！</p>
        <div class="enquete-card__bottom">
          <p class="enquete-card__example">例：職場での伝え方・体調管理の工夫・困ったことなど、あなたの経験を聞かせてください</p>
          <div class="enquete-card__cta">
            <a class="enquete-card__button" href="https://forms.gle/ZevxKhpgKTxh6xKE9" target="_blank" rel="noopener">参加する</a>
            <span class="enquete-card__note">結果は後日発表</span>
          </div>
        </div>
      </section>

      <a href="<?php echo esc_url( home_url( '/enquete03/' ) ); ?>" class="sec02 bg-lightYellow">
        <div class="menu-sle">
          <h2 class="sub-title">あるあるアンケート結果</h2>
          <p>第3回 病気とともに心を整えるヒント</p>
        </div>
        <div class="section__button">
          <svg viewBox="0 0 24 24">  <!-- min-x(座標系の左端を0から始める) min-y(座標系の上端を0から始める) width(内部の横幅を24) height(内部の縦幅を24) -->
            <line x1="0" y1="12" x2="21" y2="12" />  <!-- 横棒 x1=始点x y1=始点y(縦の中心) x2=横棒の終点 y2=終点 -->
            <polyline points="14 5 21 12 14 19" />  <!-- 18 9(左上（矢印の上の点) 21 12=右端(矢印の頂点 lineのx2と一致) 18 15(左下 矢印の下の点)  -->
          </svg>
        </div>
      </a>
      
      <div class="bg-lightYellow">
        <a href="<?php echo esc_url( home_url( '/enquete02/' ) ); ?>" class="sec02 bg-lightBlue">
          <div class="menu-sle">
            <h2 class="sub-title">あるあるアンケート結果</h2>
            <p>第2回　治療と暮らしのリアル</p>
          </div>
          <div class="section__button">
            <svg viewBox="0 0 24 24">  <!-- min-x(座標系の左端を0から始める) min-y(座標系の上端を0から始める) width(内部の横幅を24) height(内部の縦幅を24) -->
              <line x1="0" y1="12" x2="21" y2="12" />  <!-- 横棒 x1=始点x y1=始点y(縦の中心) x2=横棒の終点 y2=終点 -->
              <polyline points="14 5 21 12 14 19" />  <!-- 18 9(左上（矢印の上の点) 21 12=右端(矢印の頂点 lineのx2と一致) 18 15(左下 矢印の下の点)  -->
            </svg>
          </div>
        </a>
      </div>
      
      <div class="bg-blue">
        <a href="<?php echo esc_url( home_url( '/enquete01/' ) ); ?>" class="sec02 bg-lightGreen">
          <div class="menu-sle">
            <h2 class="sub-title">あるあるアンケート結果</h2>
            <p>コロナワクチンについて</p>
          </div>
          <div class="section__button">
            <svg viewBox="0 0 24 24">  <!-- min-x(座標系の左端を0から始める) min-y(座標系の上端を0から始める) width(内部の横幅を24) height(内部の縦幅を24) -->
              <line x1="0" y1="12" x2="21" y2="12" />  <!-- 横棒 x1=始点x y1=始点y(縦の中心) x2=横棒の終点 y2=終点 -->
              <polyline points="14 5 21 12 14 19" />  <!-- 18 9(左上（矢印の上の点) 21 12=右端(矢印の頂点 lineのx2と一致) 18 15(左下 矢印の下の点)  -->
            </svg>
          </div>
        </a>
      </div>
      <div class="bg-lightGreen bottom-yellow"></div>

      
<?php get_footer();
