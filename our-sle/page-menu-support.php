<?php
/**
 * 困っているのもくじ | わたしたちのSLE | SLE（全身性エリテマトーデス）を患者目線でやさしく解説
 * 元ファイル: support-sle/menu-support.html
 */
$GLOBALS['oursle_center_id'] = 'menu-sle';
get_header();
?>
      <ul class="breadcrumb__list">
        <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
        <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">困っていることはなんですか？</a></li>
      </ul>
      <section class="sec01">
        <h1 class="title">困っていることは何ですか？</h1>
        <p class="title__text">SLEに関する悩みは人それぞれ。まずはご自身の困りごとを見つめ直すことから始めてみませんか</p>
      </section>

      <a href="<?php echo esc_url( home_url( '/school-job/' ) ); ?>" class="sec02 bg-lightYellow">
        <figure>
          <img class="icon" src="<?= THEME_URI ?>/assets/images/icon/school.webp" alt="学生と女性のアイコン">
        </figure>
        <div class="menu-sle">
          <h2 class="sub-title">仕事・学校</h2>
          <p>病気と向き合いながら働き学ぶ</p>
        </div>
        <div class="section__button">
          <svg viewBox="0 0 24 24">  <!-- min-x(座標系の左端を0から始める) min-y(座標系の上端を0から始める) width(内部の横幅を24) height(内部の縦幅を24) -->
            <line x1="0" y1="12" x2="21" y2="12" />  <!-- 横棒 x1=始点x y1=始点y(縦の中心) x2=横棒の終点 y2=終点 -->
            <polyline points="14 5 21 12 14 19" />  <!-- 18 9(左上（矢印の上の点) 21 12=右端(矢印の頂点 lineのx2と一致) 18 15(左下 矢印の下の点)  -->
          </svg>
        </div>
      </a>
      
      <div class="bg-lightYellow">
        <a href="<?php echo esc_url( home_url( '/kokoro-care/' ) ); ?>" class="sec02 bg-lightBlue">
          <figure>
          <img class="icon" src="<?= THEME_URI ?>/assets/images/icon/mental.webp" alt="ハートのアイコン">
        </figure>
          <div class="menu-sle">
            <h2 class="sub-title">こころ</h2>
            <p>病気とともに心を整えるヒント</p>
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
        <a href="<?php echo esc_url( home_url( '/sle-life-tips/' ) ); ?>" class="sec02 bg-lightGreen">
          <figure>
            <img class="icon" src="<?= THEME_URI ?>/assets/images/icon/kotu.webp" alt="付き合うコツのアイコン">
          </figure>
          <div class="menu-sle">
            <h2 class="sub-title">SLEと付き合うコツ</h2>
            <p>病気と共に自分らしく暮らすヒント</p>
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
        <a href="<?php echo esc_url( home_url( '/doctor/' ) ); ?>" class="sec02 bg-lightYellow">
          <figure>
            <img class="icon" src="<?= THEME_URI ?>/assets/images/icon/doctor.webp" alt="医師とののアイコン">
          </figure>
          <div class="menu-sle">
            <h2 class="sub-title">医師との信頼関係</h2>
            <p>安心して治療を続けるパートナーに</p>
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
        <a href="<?php echo esc_url( home_url( '/care-guide/' ) ); ?>" class="sec02 bg-lightBlue">
          <figure>
            <img class="icon big_icon" src="<?= THEME_URI ?>/assets/images/icon/meyasu.webp" alt="悩む女性のアイコン">
          </figure>
          <div class="menu-sle">
            <h2 class="sub-title">受診の目安</h2>
            <p>見逃さないで。受診が必要なサイン</p>
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
        <a href="<?php echo esc_url( home_url( '/pregnancy/' ) ); ?>" class="sec02 bg-lightGreen">
          <figure>
            <img class="icon" src="<?= THEME_URI ?>/assets/images/icon/ninsin.webp" alt="妊娠している女性のアイコン">
          </figure>
          <div class="menu-sle">
            <h2 class="sub-title">妊娠と出産</h2>
            <p>SLEでも安心して母になるために</p>
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
        <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="sec02 bg-lightYellow">
          <figure>
            <img class="icon" src="<?= THEME_URI ?>/assets/images/icon/qa.webp" alt="よくある質問のアイコン">
          </figure>
          <div class="menu-sle">
            <h2 class="sub-title">よくある質問</h2>
            <p>知りたいことをまとめてみました</p>
          </div>
          <div class="section__button">
            <svg viewBox="0 0 24 24">  <!-- min-x(座標系の左端を0から始める) min-y(座標系の上端を0から始める) width(内部の横幅を24) height(内部の縦幅を24) -->
              <line x1="0" y1="12" x2="21" y2="12" />  <!-- 横棒 x1=始点x y1=始点y(縦の中心) x2=横棒の終点 y2=終点 -->
              <polyline points="14 5 21 12 14 19" />  <!-- 18 9(左上（矢印の上の点) 21 12=右端(矢印の頂点 lineのx2と一致) 18 15(左下 矢印の下の点)  -->
            </svg>
          </div>
        </a>
      </div>
      
      <div class="bg-lightYellow bottom-yellow"></div>

      
<?php get_footer();
