<?php
/**
 * このサイトについて | SLE（全身性エリテマトーデス）を患者目線でやさしく解説
 * 元ファイル: about-site.html
 */
$GLOBALS['oursle_center_id'] = 'about__site';
get_header();
?>
      <section class="center__wrapper" aria-label="デスクトップ用ヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a>トップページ</li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">このサイトについて</a></li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="わたしたちのSLE">
        </a>
        <h2 class="title">このサイトについて</h2>
        <p class="title-text">わたしのために、あなたのために</p>
      </section>
      <section class="sec01">
        <p class="text">
          SLEの症状や合併症について調べたり、治療法を理解したり、同じ病気と向き合う患者さんの体験談を読むことができます。医療者との対話に役立つ情報や、日々の生活のヒントも見つけられるサイトです。
        </p>
        <p class="text">
          今気になるところからひとつ選んでみてください。このサイトがあなたの小さな支えになれたらうれしいです。
        </p>
      </section>
      <img class="bg__img" src="<?= THEME_URI ?>/assets/images/background/bg-yellow03.webp" alt="">
      <section class="sec02">
        <h3 class="section__title">SLEについて</h3>
        <p class="section__text">SLEについての基本知識を身につけ、医師に相談しやすく伝えやすくしていくことで社会的寛解を目指していきましょう。</p>
        <a href="<?php echo esc_url( home_url( '/menu-sle/' ) ); ?>" class="section__button">
          <svg viewBox="0 0 24 24">  <!-- min-x(座標系の左端を0から始める) min-y(座標系の上端を0から始める) width(内部の横幅を24) height(内部の縦幅を24) -->
            <line x1="0" y1="12" x2="21" y2="12" />  <!-- 横棒 x1=始点x y1=始点y(縦の中心) x2=横棒の終点 y2=終点 -->
            <polyline points="18 9 21 12 18 15" />  <!-- 18 9(左上（矢印の上の点) 21 12=右端(矢印の頂点 lineのx2と一致) 18 15(左下 矢印の下の点)  -->
          </svg>
        </a>
      </section>
      
      <section class="sec03">
        <img class="bg__img" src="<?= THEME_URI ?>/assets/images/background/bg-yellow04.webp" alt="">
        <h3 class="section__title">困っていることをやさしく知る</h3>
        <p class="section__text">むずかしい言葉をできるだけ減らして、毎日の生活の工夫、医師との関わり方、よくある質問などわかりやすく整理しています。生活の質（QOL)を高めることを目的にしています。</p>
        <a href="<?php echo esc_url( home_url( '/menu-support/' ) ); ?>" class="section__button">
          <svg viewBox="0 0 24 24">  <!-- min-x(座標系の左端を0から始める) min-y(座標系の上端を0から始める) width(内部の横幅を24) height(内部の縦幅を24) -->
            <line x1="0" y1="12" x2="21" y2="12" />  <!-- 横棒 x1=始点x y1=始点y(縦の中心) x2=横棒の終点 y2=終点 -->
            <polyline points="18 9 21 12 18 15" />  <!-- 18 9(左上（矢印の上の点) 21 12=右端(矢印の頂点 lineのx2と一致) 18 15(左下 矢印の下の点)  -->
          </svg>
        </a>
      </section>
      
      <section class="sec04">
        <img class="bg__img" src="<?= THEME_URI ?>/assets/images/background/bg-blue03.webp" alt="">
        <h3 class="section__title">検査結果とお薬と制度のヒントを見つける</h3>
        <p class="section__text">お薬のこと、検査結果のこと、医療費の制度で理解を深め、医療費以外の受給者証の使い方などお得な情報をまとめています。</p>
        <a href="<?php echo esc_url( home_url( '/menu-check/' ) ); ?>" class="section__button">
          <svg viewBox="0 0 24 24">  <!-- min-x(座標系の左端を0から始める) min-y(座標系の上端を0から始める) width(内部の横幅を24) height(内部の縦幅を24) -->
            <line x1="0" y1="12" x2="21" y2="12" />  <!-- 横棒 x1=始点x y1=始点y(縦の中心) x2=横棒の終点 y2=終点 -->
            <polyline points="18 9 21 12 18 15" />  <!-- 18 9(左上（矢印の上の点) 21 12=右端(矢印の頂点 lineのx2と一致) 18 15(左下 矢印の下の点)  -->
          </svg>
        </a>
      </section>
      
      <section class="sec05">
        <img class="bg__img" src="<?= THEME_URI ?>/assets/images/background/bg_green02.webp" alt="">
        <h3 class="section__title">SLEの仲間さがしをしませんか</h3>
        <p class="section__text">ひとりじゃないよ。似た気持ちの人がいるだけで、少しラクになることもあるよ。仲間さがしも選択肢に入れてみてね。一緒に考えながら、暮らしを少しずつ楽にしていきましょう。</p>
        <a href="<?php echo esc_url( home_url( '/menu-communication/' ) ); ?>" class="section__button">
          <svg viewBox="0 0 24 24">  <!-- min-x(座標系の左端を0から始める) min-y(座標系の上端を0から始める) width(内部の横幅を24) height(内部の縦幅を24) -->
            <line x1="0" y1="12" x2="21" y2="12" />  <!-- 横棒 x1=始点x y1=始点y(縦の中心) x2=横棒の終点 y2=終点 -->
            <polyline points="18 9 21 12 18 15" />  <!-- 18 9(左上（矢印の上の点) 21 12=右端(矢印の頂点 lineのx2と一致) 18 15(左下 矢印の下の点)  -->
          </svg>
        </a>
      </section>
      
      <section class="sec06">
        <img class="bg__img" src="<?= THEME_URI ?>/assets/images/background/bg_yellow04.webp" alt="">
        <h3 class="section__title">みんなの声に参加する<br class="sp_only">（あるあるアンケート）</h3>
        <p class="section__text">「これって、私だけ？」を集めるアンケートです。気軽に参加してみてくださいね。<br>みんなの回答が集まると「困りごとの傾向」や「工夫」が見えやすくなります。</p>
        <a href="<?php echo esc_url( home_url( '/menu-enquete/' ) ); ?>" class="section__button">
          <svg viewBox="0 0 24 24">  <!-- min-x(座標系の左端を0から始める) min-y(座標系の上端を0から始める) width(内部の横幅を24) height(内部の縦幅を24) -->
            <line x1="0" y1="12" x2="21" y2="12" />  <!-- 横棒 x1=始点x y1=始点y(縦の中心) x2=横棒の終点 y2=終点 -->
            <polyline points="18 9 21 12 18 15" />  <!-- 18 9(左上（矢印の上の点) 21 12=右端(矢印の頂点 lineのx2と一致) 18 15(左下 矢印の下の点)  -->
          </svg>
        </a>
      </section>
      
      <!-- ここからフッター要素 -->
      
<?php get_footer();
