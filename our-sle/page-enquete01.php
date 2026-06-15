<?php
/**
 * アンケート結果 第1回 コロナワクチンについて | わたしたちのSLE
 * 元ファイル: enquete/enquete01.html
 */
$GLOBALS['oursle_center_id'] = 'enquete01';
get_header();
?>
      <!-- ヘッダー -->
      <section class="center__wrapper" aria-label="ページヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/menu-enquete/' ) ); ?>">アンケート</a></li>
          <li class="breadcrumb__item">第1回 コロナワクチン</li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="わたしたちのSLE">
        </a>
        <h1 class="title">アンケート結果 第1回</h1>
      </section>

      <!-- 概要 -->
      <section class="sec01">
        <p class="subtitle">コロナワクチンとSLE。打って大丈夫？副反応は？<br>
        2021年夏、同じ不安を抱えた仲間のリアルな声をまとめました。</p>

        <div class="enquete-summary">
          <p class="enquete-summary__period">📋 実施時期：2021年夏</p>
          <div class="enquete-summary__stats">
            <div>
              <div class="enquete-summary__stat-num">20</div>
              <div class="enquete-summary__stat-label">名が回答</div>
            </div>
            <div>
              <div class="enquete-summary__stat-num">3</div>
              <div class="enquete-summary__stat-label">問の設問</div>
            </div>
          </div>
        </div>
      </section>

      <!-- Q1 -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q1</div>
          <span class="q-badge__text">お医者さんからの接種許可は出ましたか？</span>
        </div>
        <div class="chart">
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">医師から許可が出た</span>
              <span class="chart__meta-count">90%</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill" style="width: 90%"></div>
            </div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">自己判断で接種</span>
              <span class="chart__meta-count">10%</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill chart__fill--blue" style="width: 10%"></div>
            </div>
          </div>
        </div>
        <p class="about-sle__text">9割の方が、主治医から接種の許可を得たうえで接種していました。SLEは免疫の病気のため、接種前に主治医へ相談・確認しておくことが安心につながります。</p>
      </section>

      <!-- Q2 -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q2</div>
          <span class="q-badge__text">接種したワクチンの種類は？</span>
        </div>
        <div class="chart">
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">ファイザー</span>
              <span class="chart__meta-count">90%</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill" style="width: 90%"></div>
            </div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">モデルナ</span>
              <span class="chart__meta-count">5%</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill chart__fill--light" style="width: 5%"></div>
            </div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">未接種</span>
              <span class="chart__meta-count">5%</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill chart__fill--blue" style="width: 5%"></div>
            </div>
          </div>
        </div>
        <p class="about-sle__text">ほとんどの方がファイザー製を接種していました。当時の供給状況を反映した結果と考えられます。</p>
      </section>

      <!-- Q3 -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q3</div>
          <span class="q-badge__text">接種後の副反応はありましたか？（n=20）</span>
        </div>
        <div class="chart">
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">あった</span>
              <span class="chart__meta-count">84%</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill chart__fill--yellow" style="width: 84%"></div>
            </div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">なかった</span>
              <span class="chart__meta-count">16%</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill chart__fill--light" style="width: 16%"></div>
            </div>
          </div>
        </div>
        <p class="about-sle__text">約8割の方が何らかの副反応を経験。一方で、まったく副反応がなかった方も3名いました。次に、実際にどんな副反応があったのか、20名の声を紹介します。</p>
      </section>

      <!-- 副反応のリアルな声 -->
      <section class="section">
        <h2 class="about-sle__title">副反応のリアルな声</h2>
        <div class="voice-section">
          <p class="voice-section__title">20名に聞いた、実際の副反応</p>
          <ul class="symptom-list">
            <li>打った部分の痛み</li>
            <li>38度の発熱、打った部分の痛み</li>
            <li>打った部分の痛み、倦怠感、発熱37.2度</li>
            <li>接種20分後にアナフィラキシー（蕁麻疹・咳）。ボスミン・ステロイドを投与</li>
            <li>腕が上がりにくい</li>
            <li>腕の痛み、倦怠感</li>
            <li>打った部分の痛み、腫れ、全身のだるさ</li>
            <li>鈍痛のみ</li>
            <li>腕の痛み、倦怠感、微熱</li>
            <li>腕が痛い、微熱、倦怠感</li>
            <li>全身が痒くなり、顔が少し腫れる、微熱、筋肉痛</li>
            <li>腕の痛み、38度の発熱</li>
            <li>軽い筋肉痛</li>
            <li>筋肉痛</li>
            <li>腕が痛い、38度の発熱</li>
            <li>筋肉痛</li>
          </ul>
          <p class="symptom-list__note">※ このほか、妊活中のため接種を見送った方が1名、副反応がなかった方が3名いました。</p>
        </div>
      </section>

      <section class="category__wrapper bg-white section">
        <div class="category">
          カテゴリー：
          <a href="#">#SLEとは </a>
          <a href="#">#免疫 </a>
          <a href="#">#膠原病 </a>
        </div>
        <p class="up-dated__text">
          作成日 <time datetime="2020-08-13">2020.08.13</time><br>
          更新日 <time datetime="2026-06-13">2026.06.13</time>
        </p>
      </section>

      <img class="bg_blue_victor" src="<?= THEME_URI ?>/assets/images/background/bg-blue02.webp" alt="">

      <section class="pics bg-blue">
        <h2 class="pics__title">おすすめのページ</h2>
        <div class="pics__links">
          <a href="<?php echo esc_url( home_url( '/enquete02/' ) ); ?>" class="pics__left-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_anke-to2.webp" alt="あるあるアンケート第2回の結果のサムネイル">
            <div class="button">
              <span>つづきを読む</span>
              <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
            </div>
          </a>
          <a href="<?php echo esc_url( home_url( '/enquete03/' ) ); ?>" class="pics__right-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_anke-to3.webp" alt="あるあるアンケート第3回の結果のサムネイル">
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

      
<?php get_footer();
