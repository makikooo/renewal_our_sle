<?php
/**
 * 受診の目安 | SLE（全身性エリテマトーデス）を患者目線でやさしく解説
 * 元ファイル: support-sle/care-guide.html
 */
$GLOBALS['oursle_center_id'] = 'about__sle';
$GLOBALS['oursle_center_class'] = 'diagnosis center__column';
get_header();
?>
      <section class="center__wrapper" aria-label="デスクトップ用ヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">困っていること</a></li>
          <li class="breadcrumb__item">受信の目安</li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="わたしたちのSLE">
        </a>
        <h1 class="title">受信の目安</h1>
      </section>
      
      <section class="sec01">
        <p class="subtitle">「この症状、病院に行くべき？」と迷ったときのために。<br>受診を考えるタイミングや、早めに相談したほうがよいサインを分かりやすくまとめました。</p>
        <div class="index">
          <h2 class="index__title">もくじ</h2>
          <ul>
            <li class="index__item">
              <a class="index__link" href="#systemic">
                <div class="index__title">受診のタイミング</div>
                <div class="section__button">
                  <svg viewBox="0 0 24 24" width="20" height="20">
                    <line x1="12" y1="6" x2="12" y2="18" />  <!-- 縦棒 -->
                    <polyline points="9 15 12 18 15 15" />    <!-- 下向き矢印 -->
                  </svg>
                </div>
              </a>
            </li>
            <li class="index__item">
              <a class="index__link" href="#skin">
                <div class="index__title">公共のサイトのリンク集</div>
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
      <section class="section">
        <h2 class="about-sle__title" id="systemic">
          受診のタイミング
        </h2>
        <h3>今すぐ（救急・緊急の目安）</h3>
        <p class="about-sle__text">
          □ 強い息苦しさ／胸の強い痛み<br>
          □ 意識がぼんやり・けいれん<br>
          □ 急に動けないほどの強い症状
        </p>
        <h3>今日中〜明日（早めの受診）</h3>
        <p class="about-sle__text">
          □ 症状が急に悪化している<br>
          □ 高熱が続く、強い脱水っぽい<br>
          □ 痛みが強く日常が回らない
        </p>
        <h3>数日以内（相談推奨）</h3>
        <p class="about-sle__text">
          □ 1週間近く続く／繰り返す<br>
          □ 仕事・家事に支障が出ている<br>
          □ 薬の副作用かも？が続く
        </p>
        <h3>様子見の目安（条件付き）</h3>
        <p class="about-sle__text">
          □ 軽く、短時間でおさまる<br>
          □ 改善傾向がある<br>
          □ 上の項目に当てはまらない
        </p>
      </section>
      
      <section class="section" id="skin">
        <h2 class="about-sle__title">
          公共のサイトのリンク集
        </h2>
        <a class="button contact__button" href="https://www.fdma.go.jp/relocation/neuter/topics/filedList9_6/kyukyu_app/kyukyu_app_web/index.html" target="_blank">
          <span>総務消防庁のQ助</span>
          <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d; transform: rotate(-45deg);"></i>
        </a>

        <a class="button contact__button" href="https://www.tfd.metro.tokyo.lg.jp/hp-kyuuimuka/guide/main/index.html" target="_blank">
          <span>東京版救急ガイド</span>
          <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d; transform: rotate(-45deg);"></i>
        </a>

        <a class="button contact__button" href="https://www.mhlw.go.jp/stf/seisakunitsuite/bunya/newpage_55223.html" target="_blank">
          <span>6歳までの子どもの救急</span>
          <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d; transform: rotate(-45deg);"></i>
        </a>

        <a class="button contact__button" href="https://www.fdma.go.jp/mission/enrichment/appropriate/appropriate007.html" target="_blank">
          <span>救急車を呼ぶか悩んだら</span>
          <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d; transform: rotate(-45deg);"></i>
        </a>
      </section>
      
      
            
      <section class="category__wrapper bg-white section">
        <div class="category">
          タグ：
          <a href="#">#SLEの症状 </a>
          <a href="#">#通院 </a>
        </div>
        <p class="up-dated__text">
          作成日・更新日 <time datetime="2026-06-05">2026.06.05</time>
        </p>
      </section>

      <img class="bg_blue_victor" src="<?= THEME_URI ?>/assets/images/background/bg-blue02.webp" alt="">

      <section class="pics bg-blue">
        <h2 class="pics__title">おすすめのページ</h2>
        <div class="pics__links">
          <a href="<?php echo esc_url( home_url( '/symptoms/' ) ); ?>" class="pics__left-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_shoujou.webp" alt="SLEの症状のサムネイル">
            <div class="button">
              <span>つづきを読む</span>
              <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
            </div>
          </a>
          <a href="<?php echo esc_url( home_url( '/treatment/' ) ); ?>" class="pics__right-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_kusuri.webp" alt="SLEの治療のサムネイル">
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
