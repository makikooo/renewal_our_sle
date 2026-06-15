<?php
/**
 * SLEについて | わたしたちのSLE | SLE（全身性エリテマトーデス）を患者目線でやさしく解説
 * 元ファイル: menu-sle/menu-sle.html
 */
$GLOBALS['oursle_center_id'] = 'menu-sle';
get_header();
?>
      <ul class="breadcrumb__list">
        <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
        <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">SLEについて</a></li>
      </ul>
      <section class="sec01">
        <h1 class="title">SLEについて</h1>
        <p class="title__text">SLEの基本を理解し、自分の症状や状態を医師に分かりやすく伝えられるように知識をつけていきましょう。</p>
      </section>

      <a href="<?php echo esc_url( home_url( '/about-sle/' ) ); ?>" class="sec02 bg-lightYellow">
        <div class="menu-sle">
          <h2 class="sub-title">SLEとは</h2>
          <p>まず知っておきたいSLEのこと</p>
        </div>
        <div class="section__button">
          <svg viewBox="0 0 24 24">  <!-- min-x(座標系の左端を0から始める) min-y(座標系の上端を0から始める) width(内部の横幅を24) height(内部の縦幅を24) -->
            <line x1="0" y1="12" x2="21" y2="12" />  <!-- 横棒 x1=始点x y1=始点y(縦の中心) x2=横棒の終点 y2=終点 -->
            <polyline points="14 5 21 12 14 19" />  <!-- 18 9(左上（矢印の上の点) 21 12=右端(矢印の頂点 lineのx2と一致) 18 15(左下 矢印の下の点)  -->
          </svg>
        </div>
      </a>
      
      <div class="bg-lightYellow">
        <a href="<?php echo esc_url( home_url( '/symptoms/' ) ); ?>" class="sec02 bg-lightBlue">
          <div class="menu-sle">
            <h2 class="sub-title">SLEの症状</h2>
            <p>症状は人それぞれ。<br class="sp_only">よくあるサインを整理</p>
          </div>
          <div class="section__button">
            <svg viewBox="0 0 24 24">  <!-- min-x(座標系の左端を0から始める) min-y(座標系の上端を0から始める) width(内部の横幅を24) height(内部の縦幅を24) -->
              <line x1="0" y1="12" x2="21" y2="12" />  <!-- 横棒 x1=始点x y1=始点y(縦の中心) x2=横棒の終点 y2=終点 -->
              <polyline points="14 5 21 12 14 19" />  <!-- 18 9(左上（矢印の上の点) 21 12=右端(矢印の頂点 lineのx2と一致) 18 15(左下 矢印の下の点)  -->
            </svg>
          </div>
        </a>
      </div>
      
      <div class="bg-lightBlue">
        <a href="<?php echo esc_url( home_url( '/diagnosis/' ) ); ?>" class="sec02 bg-lightGreen">
          <div class="menu-sle">
            <h2 class="sub-title">SLEの診断基準</h2>
            <p>診断基準ってなに？<br class="sp_only">不安を減らす基礎知識</p>
          </div>
          <div class="section__button">
            <svg viewBox="0 0 24 24">  <!-- min-x(座標系の左端を0から始める) min-y(座標系の上端を0から始める) width(内部の横幅を24) height(内部の縦幅を24) -->
              <line x1="0" y1="12" x2="21" y2="12" />  <!-- 横棒 x1=始点x y1=始点y(縦の中心) x2=横棒の終点 y2=終点 -->
              <polyline points="14 5 21 12 14 19" />  <!-- 18 9(左上（矢印の上の点) 21 12=右端(矢印の頂点 lineのx2と一致) 18 15(左下 矢印の下の点)  -->
            </svg>
          </div>
        </a>
      </div>
      
      <div class="bg-lightGreen">
        <a href="<?php echo esc_url( home_url( '/complications/' ) ); ?>" class="sec02 bg-lightYellow">
          <div class="menu-sle">
            <h2 class="sub-title">起こりやすい合併症</h2>
            <p>知っておくと安心。<br class="sp_only">早めに気づけるサイン</p>
          </div>
          <div class="section__button">
            <svg viewBox="0 0 24 24">  <!-- min-x(座標系の左端を0から始める) min-y(座標系の上端を0から始める) width(内部の横幅を24) height(内部の縦幅を24) -->
              <line x1="0" y1="12" x2="21" y2="12" />  <!-- 横棒 x1=始点x y1=始点y(縦の中心) x2=横棒の終点 y2=終点 -->
              <polyline points="14 5 21 12 14 19" />  <!-- 18 9(左上（矢印の上の点) 21 12=右端(矢印の頂点 lineのx2と一致) 18 15(左下 矢印の下の点)  -->
            </svg>
          </div>
        </a>
      </div>
      
      <div class="bg-lightYellow">
        <a href="<?php echo esc_url( home_url( '/treatment/' ) ); ?>" class="sec02 bg-lightBlue">
          <div class="menu-sle">
            <h2 class="sub-title">SLEの治療</h2>
            <p>治療は長く上手に。<br class="sp_only">自分に合う形を見つけよう</p>
          </div>
          <div class="section__button">
            <svg viewBox="0 0 24 24">  <!-- min-x(座標系の左端を0から始める) min-y(座標系の上端を0から始める) width(内部の横幅を24) height(内部の縦幅を24) -->
              <line x1="0" y1="12" x2="21" y2="12" />  <!-- 横棒 x1=始点x y1=始点y(縦の中心) x2=横棒の終点 y2=終点 -->
              <polyline points="14 5 21 12 14 19" />  <!-- 18 9(左上（矢印の上の点) 21 12=右端(矢印の頂点 lineのx2と一致) 18 15(左下 矢印の下の点)  -->
            </svg>
          </div>
        </a>
      </div>
      
      <div class="bg-lightBlue">
        <a href="<?php echo esc_url( home_url( '/remission/' ) ); ?>" class="sec02 bg-lightGreen">
          <div class="menu-sle">
            <h2 class="sub-title">社会的寛解とは</h2>
            <p>社会的寛解とは何か、<br class="sp_only">わかりやすく整理</p>
          </div>
          <div class="section__button">
            <svg viewBox="0 0 24 24">  <!-- min-x(座標系の左端を0から始める) min-y(座標系の上端を0から始める) width(内部の横幅を24) height(内部の縦幅を24) -->
              <line x1="0" y1="12" x2="21" y2="12" />  <!-- 横棒 x1=始点x y1=始点y(縦の中心) x2=横棒の終点 y2=終点 -->
              <polyline points="14 5 21 12 14 19" />  <!-- 18 9(左上（矢印の上の点) 21 12=右端(矢印の頂点 lineのx2と一致) 18 15(左下 矢印の下の点)  -->
            </svg>
          </div>
        </a>
      </div>
      <div class="bg-lightGreen resize"></div>
      

      
<?php get_footer();
