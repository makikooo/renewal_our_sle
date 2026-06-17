<?php
/**
 * 社会的寛解とは | SLE（全身性エリテマトーデス）を患者目線でやさしく解説
 * 元ファイル: menu-sle/remission.html
 */
$GLOBALS['oursle_center_id'] = 'about__sle';
get_header();
?>
      <section class="center__wrapper" aria-label="デスクトップ用ヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">SLEについて</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">SLEの治療</a></li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="わたしたちのSLE">
        </a>
        <h1 class="title">社会的寛解</h1>
      </section>
      
      <section class="sec01">
        <p class="subtitle">病気をコントロールしながら、仕事や学業、日常生活を制限なく送れる状態へ。医療の進歩が実現した「社会的寛解」という新しい治療の考え方が、希望を広げています。</p>
        <div class="index">
          <h2 class="index__title">もくじ</h2>
          <ul>
            <li class="index__item">
              <a class="index__link" href="#about-sle">
                <div class="index__title">社会的寛解とは</div>
                <div class="section__button">
                  <svg viewBox="0 0 24 24" width="20" height="20">
                    <line x1="12" y1="6" x2="12" y2="18" />  <!-- 縦棒 -->
                    <polyline points="9 15 12 18 15 15" />    <!-- 下向き矢印 -->
                  </svg>
                </div>
              </a>
            </li>
            <li class="index__item">
              <a class="index__link" href="#early-symptoms">
                <div class="index__title">アンケート</div>
                <div class="section__button">
                  <svg viewBox="0 0 24 24" width="20" height="20">
                    <line x1="12" y1="6" x2="12" y2="18" />  <!-- 縦棒 -->
                    <polyline points="9 15 12 18 15 15" />    <!-- 下向き矢印 -->
                  </svg>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="section" id="about-sle">
        <h2 class="about-sle__title">
          社会的寛解とは
        </h2>
        <p class="about-sle__text">
          SLEは慢性の疾患なので完治してSLEがなくなることはありません。<br>
          わたしたちは<span class="under_line">治療の目標</span>を病気がコントロールされてSLEの症状がない状態である寛解を目指していきます。<br>
          さらに<span class="under_line">仕事や家事や妊娠、出産など健康な方と変わらない社会活動を行える状態が社会的寛解</span>と言われています。
          <br><br>
          それだけ治療法が進歩しているが、重症な方もいらっしゃいます。<br>
          早く症状に気づいて適切な治療に繋げることが大切です。
        </p>
        <div class="syutten_wrapper">
          <p>
            参考・出典<br>
            出典・NHK「きょうの健康〜SLE特集〜」（放送日：2025年12月9日）<br>
            監修・解説：渥美達也先生<br>
            この情報は渥美先生に許可を得ています
          </p>
        </div>
        
      </section>
      
      <section class="section" id="early-symptoms">
        <h2 class="about-sle__title">
          社会的寛解についてのアンケート
        </h2>
        <p class="about-sle__text">
          私は2025年12月現在、寛解とは言われていますが、SLEの症状がない状態ではありません。家事や仕事もできないことも多く社会的寛解にはなっていないのでSLE患者さんは社会的寛解ができているのかとても気になりました。そこで、簡易的にXにてアンケートを取ってみました。<br>
          33人の方からご協力いただけました。<br>
          うち、16人が社会的寛解になっている。<br>
          うち、17人が社会的寛解になっていない。<br>
          とのことでした。
        </p>
        <div class="myPieChart_wrapper" width="100" height="95">
          
          <canvas id="myPieChart">
          
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
        <script>
          const ctx = document.getElementById("myPieChart");
          const myPieChart = new Chart(ctx, {
            type: 'pie', // 円グラフを使用
            data: {
              labels: ["なっている", "なっていない"],
              datasets: [{
                backgroundColor: [
                  "#00B900",
                  "#B5E1FF"
                ],
                data: [16, 17]
              }]
            },
            options: {
            }
          });
        </script>
        <p>アンケートのご協力ありがとうございました</p>
      </section>
      
      
      <section class="section" id="etiology">
        <div class="category">
          タグ：
          <a href="#">#SLEについて </a>
          <a href="#">#SLEの症状 </a>
          <a href="#">#全身 </a>
          <a href="#">#皮膚 </a>
          <a href="#">#粘膜 </a>
          <a href="#">#筋肉 </a>
          <a href="#">#関節 </a>
          <a href="#">#腎臓 </a>
          <a href="#">#肺 </a>
          <a href="#">#心臓 </a>
          <a href="#">#神経 </a>
          <a href="#">#血液 </a>
        </div>
        <p class="up-dated__text">
          作成日・更新日 <time datetime="2026-06-02">2026.06.02</time>
        </p>
      </section>
      
      <img class="bg_blue_victor" src="<?= THEME_URI ?>/assets/images/background/bg-blue02.webp" alt="">

      <section class="pics bg-blue">
        <h2 class="pics__title">おすすめのページ</h2>
        <div class="pics__links">
          <a href="<?php echo esc_url( home_url( '/treatment/' ) ); ?>" class="pics__left-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_tiryou.webp" alt="SLEの治療のサムネイル">
            <div class="button">
              <span>つづきを読む</span>
              <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
            </div>
          </a>
          <a href="<?php echo esc_url( home_url( '/symptoms/' ) ); ?>" class="pics__right-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_shoujou.webp" alt="SLEの症状のサムネイル">
            <div class="button">
              <span>つづきを読む</span>
              <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
            </div>
          </a>
        </div>
      </section>
      
      <img class="bg_white_victor" src="<?= THEME_URI ?>/assets/images/background/bg-blue03.webp" alt="">
      <section class="category__wrapper bg-white section">
        <div class="category">
          タグ：
          <a href="#">#SLEとは </a>
          <a href="#">#免疫 </a>
          <a href="#">#膠原病 </a>
          <a href="#">#発熱 </a>
          <a href="#">#関節痛 </a>
          <a href="#">#皮疹</a>
        </div>
        <p class="up-dated__text">
          作成日・更新日 <time datetime="2026-05-29">2026.05.29</time>
        </p>
      </section>

      <img class="bg_blue_victor" src="<?= THEME_URI ?>/assets/images/background/bg-blue02.webp" alt="">

      <section class="pics bg-blue">
        <h2 class="pics__title">おすすめのページ</h2>
        <div class="pics__links">
          <a href="<?php echo esc_url( home_url( '/diagnosis/' ) ); ?>" class="pics__left-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_sindan.webp" alt="SLEの診断のサムネイル">
            <div class="button">
              <span>つづきを読む</span>
              <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
            </div>
          </a>
          <a href="<?php echo esc_url( home_url( '/treatment/' ) ); ?>" class="pics__right-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_kusuri.webp" alt="薬のサムネイル">
            <div class="button">
              <span>つづきを読む</span>
              <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
            </div>
          </a>
        </div>
      </section>

      <section class="concern">
        <img class="concern__top-img" src="<?= THEME_URI ?>/assets/images/background/bg_green03.webp" alt="">
        <h3 class="concern__title">いま、気になること</h3>
        <p class="concern__text">気になる言葉を押すと関連ページに飛びます</p>
        <?php get_template_part( 'template-parts/concern-tags' ); ?>
      </section>

      
<?php get_footer();
