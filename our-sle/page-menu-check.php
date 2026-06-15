<?php
/**
 * 調べてみるのページ | わたしたちのSLE | SLE（全身性エリテマトーデス）を患者目線でやさしく解説
 * 元ファイル: check-sle/menu-check.html
 */
$GLOBALS['oursle_center_id'] = 'menu-sle';
get_header();
?>
      <ul class="breadcrumb__list">
        <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
        <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">調べたいことは何ですか？</a></li>
      </ul>
      <section class="sec01">
        <h1 class="title">調べたいことは何ですか？</h1>
        <p class="title__text">検査や治療、使える制度のことなど、患者さんやご家族に知ってほしい情報を集めました。気になることから見てみてください。</p>
      </section>

      <a href="<?php echo esc_url( home_url( '/results/' ) ); ?>" class="sec02 bg-lightYellow">
        <div class="menu-sle">
          <h2 class="sub-title">検査結果の見方</h2>
          <p>検査の数値が何を意味するか説明します</p>
        </div>
        <div class="section__button">
          <svg viewBox="0 0 24 24">  <!-- min-x(座標系の左端を0から始める) min-y(座標系の上端を0から始める) width(内部の横幅を24) height(内部の縦幅を24) -->
            <line x1="0" y1="12" x2="21" y2="12" />  <!-- 横棒 x1=始点x y1=始点y(縦の中心) x2=横棒の終点 y2=終点 -->
            <polyline points="14 5 21 12 14 19" />  <!-- 18 9(左上（矢印の上の点) 21 12=右端(矢印の頂点 lineのx2と一致) 18 15(左下 矢印の下の点)  -->
          </svg>
        </div>
      </a>
      
      <div class="bg-lightYellow">
        <a href="<?php echo esc_url( home_url( '/aboutmedicine/' ) ); ?>" class="sec02 bg-lightBlue">
          <div class="menu-sle">
            <h2 class="sub-title">お薬について</h2>
            <p>治療で使うお薬の種類や効果を解説します</p>
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
        <a href="<?php echo esc_url( home_url( '/system/' ) ); ?>" class="sec02 bg-lightGreen">
          <div class="menu-sle">
            <h2 class="sub-title">医療費の制度</h2>
            <p>医療費を軽くできる制度を紹介します。</p>
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
        <a href="<?php echo esc_url( home_url( '/jukyuusyahyou/' ) ); ?>" class="sec02 bg-lightYellow">
          <div class="menu-sle">
            <h2 class="sub-title">受給者票 <br class="sp_only">使い道もっとある</h2>
            <p>受給者証で使えるサービスを紹介します。</p>
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
        <a href="<?php echo esc_url( home_url( '/nanbyouteate/' ) ); ?>" class="sec02 bg-lightBlue">
          <div class="menu-sle">
            <h2 class="sub-title">難病手当</h2>
            <p>自治体が支給する手当について説明します。</p>
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
        <a href="<?php echo esc_url( home_url( '/tourokusyou/' ) ); ?>" class="sec02 bg-lightGreen">
          <div class="menu-sle">
            <h2 class="sub-title">登録者証</h2>
            <p>登録できる制度やサービスを説明します。</p>
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
