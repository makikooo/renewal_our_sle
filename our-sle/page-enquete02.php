<?php
/**
 * アンケート結果 第2回 治療と暮らしのリアル | わたしたちのSLE
 * 元ファイル: enquete/enquete02.html
 */
$GLOBALS['oursle_center_id'] = 'enquete02';
get_header();
?>
      <!-- ヘッダー -->
      <section class="center__wrapper" aria-label="ページヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/menu-enquete/' ) ); ?>">アンケート</a></li>
          <li class="breadcrumb__item">第2回 治療と暮らしのリアル</li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="わたしたちのSLE">
        </a>
        <h1 class="title">アンケート結果 第2回</h1>
      </section>

      <!-- 概要 -->
      <section class="sec01">
        <p class="subtitle">症状やお薬のこと、周囲の理解、紫外線対策…。<br>
        25名のSLE患者さんが、治療と暮らしのリアルな体験を教えてくれました。</p>

        <div class="enquete-summary">
          <p class="enquete-summary__period">📋 実施時期：2024年7月</p>
          <div class="enquete-summary__stats">
            <div>
              <div class="enquete-summary__stat-num">25</div>
              <div class="enquete-summary__stat-label">名が回答</div>
            </div>
            <div>
              <div class="enquete-summary__stat-num">39</div>
              <div class="enquete-summary__stat-label">問のアンケート</div>
            </div>
          </div>
        </div>
        <p class="about-sle__text">回答者の96%が女性、年代は30〜40代が中心でした。以下、寄せられた声の中から印象的だった項目をご紹介します。</p>
      </section>

      <!-- Q1 年齢 -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q1</div>
          <span class="q-badge__text">回答者の年代は？（25人回答）</span>
        </div>
        <div class="chart">
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">30代</span>
              <span class="chart__meta-count">13名（52%）</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill" style="width: 52%"></div>
            </div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">40代</span>
              <span class="chart__meta-count">6名（24%）</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill chart__fill--light" style="width: 24%"></div>
            </div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">20代</span>
              <span class="chart__meta-count">3名（12%）</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill chart__fill--yellow" style="width: 12%"></div>
            </div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">50代</span>
              <span class="chart__meta-count">2名（8%）</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill chart__fill--blue" style="width: 8%"></div>
            </div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">10代</span>
              <span class="chart__meta-count">1名（4%）</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill chart__fill--pink" style="width: 4%"></div>
            </div>
          </div>
        </div>
        <p class="about-sle__text">働き盛り・子育て世代でもある30〜40代が4分の3を占めました。SLEは20〜40代の女性に多いといわれる病気で、今回の回答もその傾向を反映しています。</p>
      </section>

      <!-- Q2 発症からの年数 -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q2</div>
          <span class="q-badge__text">発症してから何年経ちますか？（25人回答）</span>
        </div>
        <div class="chart">
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">5年以上10年未満</span>
              <span class="chart__meta-count">7名（28%）</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill" style="width: 28%"></div>
            </div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">1年未満</span>
              <span class="chart__meta-count">6名（24%）</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill chart__fill--light" style="width: 24%"></div>
            </div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">1年以上5年未満</span>
              <span class="chart__meta-count">5名（20%）</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill chart__fill--yellow" style="width: 20%"></div>
            </div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">10年以上20年未満</span>
              <span class="chart__meta-count">4名（16%）</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill chart__fill--blue" style="width: 16%"></div>
            </div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">20年以上</span>
              <span class="chart__meta-count">3名（12%）</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill chart__fill--pink" style="width: 12%"></div>
            </div>
          </div>
        </div>
        <p class="about-sle__text">診断されたばかりの方から、20年以上付き合っている大ベテランまで。発症からの年数はさまざまです。だからこそ、先輩たちの経験が大きなヒントになります。</p>
      </section>

      <!-- 発症時の症状 -->
      <section class="section">
        <h2 class="about-sle__title">発症したときの症状</h2>
        <div class="voice-section">
          <p class="voice-section__title">「これがSLEの始まりでした」</p>
          <ul class="symptom-list">
            <li>蝶形紅斑、倦怠感</li>
            <li>発熱、顔のむくみ、蝶形紅斑、だるさ、蛋白尿（急性腎不全の状態）</li>
            <li>関節痛、うつ、全身の痛み、微熱</li>
            <li>高熱、ネフローゼ症候群による全身のむくみ、倦怠感、肺に水が溜まっていた</li>
            <li>発熱、むくみ、起床時の手足のこわばり</li>
            <li>多関節炎、頭痛、倦怠感</li>
            <li>髪の毛の脱毛、手足に力が入らない感じ</li>
            <li>突然、足の甲にゴルフボールくらいの腫れと痛み。だんだん関節痛が全身に広がり、顔に赤い発疹、倦怠感</li>
            <li>関節炎、胸膜炎、発熱</li>
            <li>手指のこわばりと関節痛、微熱</li>
          </ul>
          <p class="symptom-list__note">※ 関節痛・倦怠感・発熱・蝶形紅斑・むくみ（腎症状）が多く挙げられました。発症時は意識が朦朧として覚えていない、という方もいました。</p>
        </div>
      </section>

      <!-- プレドニンの副作用 -->
      <section class="section">
        <h2 class="about-sle__title">プレドニン（ステロイド）の副作用</h2>
        <p class="about-sle__text">多くの方が高用量のプレドニンから治療をスタートし、さまざまな副作用を経験していました。実際に挙がった声をご紹介します。</p>
        <div class="voice-section">
          <p class="voice-section__title">経験した副作用</p>
          <ul class="symptom-list">
            <li>ムーンフェイス（顔のむくみ・丸み）／とても多く挙げられました</li>
            <li>食欲増進、体重増加（「10キロ以上太った」という声も）</li>
            <li>不眠、寝つきの悪さ</li>
            <li>精神不安定、抑うつ、イライラ</li>
            <li>骨粗鬆症、ステロイド白内障</li>
            <li>感染症にかかりやすく治りにくい（帯状疱疹になった）</li>
            <li>手先の震え、知覚過敏、脱毛、増毛</li>
            <li>高血圧、便秘、倦怠感</li>
          </ul>
        </div>
      </section>

      <!-- Q3 周囲の理解 -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q3</div>
          <span class="q-badge__text">周囲からの理解はありますか？</span>
        </div>
        <p class="chart__note">相手別に「理解がある」と答えた割合</p>
        <div class="chart">
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">ご家族（25人回答）</span>
              <span class="chart__meta-count">理解あり 19名（76%）</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill" style="width: 76%"></div>
            </div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">恋人・配偶者（19人回答）</span>
              <span class="chart__meta-count">理解あり 15名（79%）</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill chart__fill--light" style="width: 79%"></div>
            </div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">友達・身近な人（25人回答）</span>
              <span class="chart__meta-count">理解あり 19名（76%）</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill chart__fill--yellow" style="width: 76%"></div>
            </div>
          </div>
        </div>
        <p class="about-sle__text">多くの方が周囲の理解を得られている一方、約4分の1は「理解がない」と感じていました。見た目ではわかりにくいSLEならではの難しさがうかがえます。</p>
      </section>

      <!-- 理解してほしいこと -->
      <section class="section">
        <h2 class="about-sle__title">「これを理解してほしい」みんなの声</h2>
        <div class="voice-section">
          <p class="voice-section__title">同じ思いを抱えている人へ</p>
          <div class="voice-card">
            <p>倦怠感が強く出る時は、なまけているのではないこと。指関節が痛むと字も書けない、箸も持てない、コップも持てないんです。</p>
          </div>
          <div class="voice-card">
            <p>外見ではわからないけど、しんどい時があること。こまめに休憩すれば動けるということ。</p>
          </div>
          <div class="voice-card">
            <p>日によって症状も痛みも違うこと。見た目で判断してほしくないです。</p>
          </div>
          <div class="voice-card">
            <p>倦怠感には波があって、寝てゆっくりすればまた動けるようになる。決して怒っているわけじゃないんです。</p>
          </div>
          <div class="voice-card">
            <p>自分でコントロールできないこと。ストレスがよくないこと。薬の副作用や配慮してほしいこと。</p>
          </div>
        </div>
      </section>

      <!-- Q4 福祉サービス -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q4</div>
          <span class="q-badge__text">SLE患者も使える福祉サービスを知っていますか？（23人回答）</span>
        </div>
        <div class="chart">
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">知らなかった</span>
              <span class="chart__meta-count">10名（43%）</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill chart__fill--pink" style="width: 43%"></div>
            </div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">使っていないが知っている</span>
              <span class="chart__meta-count">9名（39%）</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill chart__fill--light" style="width: 39%"></div>
            </div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">使っている</span>
              <span class="chart__meta-count">4名（17%）</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill" style="width: 17%"></div>
            </div>
          </div>
        </div>
        <p class="about-sle__text">4割以上の方が「知らなかった」と回答。実際に使うかどうかは別として、使える制度を知っておくことは安心につながります。受給者証で割引のある施設を使って外出が増えた、という声もありました。</p>
      </section>

      <!-- Q5 働き方 -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q5</div>
          <span class="q-badge__text">どのような働き方をしていますか？（お仕事をしている方 20人回答）</span>
        </div>
        <div class="chart">
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">一般雇用・パート</span>
              <span class="chart__meta-count">8名（40%）</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill" style="width: 40%"></div>
            </div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">一般雇用・正社員</span>
              <span class="chart__meta-count">7名（35%）</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill chart__fill--light" style="width: 35%"></div>
            </div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">その他（休職中など）</span>
              <span class="chart__meta-count">3名（15%）</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill chart__fill--yellow" style="width: 15%"></div>
            </div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">障害者雇用・就労支援B型</span>
              <span class="chart__meta-count">2名（10%）</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill chart__fill--blue" style="width: 10%"></div>
            </div>
          </div>
        </div>
        <p class="about-sle__text">事務・介護・看護・保育・教職など、お仕事の内容はさまざま。体調に合わせてパートを選んだり、在宅勤務や障害者雇用を活用したりと、それぞれの形で働き続けていました。</p>
      </section>

      <!-- 紫外線対策 -->
      <section class="section">
        <h2 class="about-sle__title">みんなの紫外線対策</h2>
        <p class="about-sle__text">紫外線で倦怠感・発疹・顔のほてり・頭痛などが出るという方が多く、対策は欠かせません。実際に行っている工夫です。</p>
        <div class="voice-section">
          <p class="voice-section__title">定番の対策</p>
          <ul class="symptom-list">
            <li>日焼け止め（こまめに塗り直し。首の後ろや耳まで忘れずに）</li>
            <li>帽子（つばの広いもの）・日傘</li>
            <li>アームカバー・UVカットの上着・長袖長ズボン</li>
            <li>サングラス・UVカットマスク・フェイスカバー</li>
          </ul>
          <div class="voice-card">
            <p class="voice-card__tag">おすすめグッズ</p>
            <p>「ヤケーヌ」というフェイスカバーは、アームカバーもあってメッシュで涼しいのでおすすめ。日焼け止めと帽子は必須です。</p>
          </div>
        </div>
      </section>

      <!-- Q6 コロナ感染 -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q6</div>
          <span class="q-badge__text">新型コロナに感染したことはありますか？（25人回答）</span>
        </div>
        <div class="chart">
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">感染したことがある</span>
              <span class="chart__meta-count">21名（84%）</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill chart__fill--yellow" style="width: 84%"></div>
            </div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">感染したことはない</span>
              <span class="chart__meta-count">4名（16%）</span>
            </div>
            <div class="chart__track">
              <div class="chart__fill chart__fill--light" style="width: 16%"></div>
            </div>
          </div>
        </div>
        <p class="about-sle__text">発熱・喉の痛み・咳・倦怠感などが多く、解熱にはカロナールを使った方が目立ちました。咳が1か月続いた、味覚・嗅覚障害が残ったなど、後遺症を経験した方も少なくありません。感染予防として、手洗い・うがい・消毒・マスクを徹底している方がほとんどでした。</p>
      </section>

      <!-- まとめ -->
      <section class="section">
        <h2 class="about-sle__title">まとめ</h2>
        <p class="about-sle__text">今回のアンケートには、診断されたばかりの方から20年以上付き合っている方まで、25名のSLE患者さんが答えてくれました。発症のきっかけは関節痛・倦怠感・発熱・蝶形紅斑・むくみなどさまざまで、多くの方が高用量のプレドニンから治療をスタートし、ムーンフェイスや体重増加、不眠といった副作用とも向き合っていました。</p>
        <p class="about-sle__text">周囲の理解については、家族・パートナー・友人のいずれも約4分の3が「理解がある」と回答した一方で、4分の1の方は「わかってもらえない」と感じていました。見た目ではわかりにくく、日によって体調の波があるSLEだからこそ、「なまけているわけじゃない」「こまめに休めば動ける」ということを知ってほしい――そんな切実な声が多く寄せられました。</p>
        <p class="about-sle__text">紫外線対策は日焼け止め・帽子・日傘・アームカバーが定番で、暮らしに欠かせない工夫として根づいています。働き方や使える制度を含め、一人ひとりが自分に合った形を探していることが伝わってきました。</p>
      </section>

      <section class="category__wrapper bg-white section">
        <div class="category">
          カテゴリー：
          <a href="#">#SLEとは </a>
          <a href="#">#免疫 </a>
          <a href="#">#膠原病 </a>
        </div>
        <p class="up-dated__text">
          作成日 <time datetime="2020-08-13">2024.07.02</time><br>
          更新日 <time datetime="2026-06-13">2026.06.13</time>
        </p>
      </section>

      <img class="bg_blue_victor" src="<?= THEME_URI ?>/assets/images/background/bg-blue02.webp" alt="">
      
      <section class="pics bg-blue">
        <h2 class="pics__title">おすすめのページ</h2>
        <div class="pics__links">
          <a href="<?php echo esc_url( home_url( '/enquete01/' ) ); ?>" class="pics__left-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_anke-to1.webp" alt="あるあるアンケート第2回の結果のサムネイル">
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
        <?php get_template_part( 'template-parts/concern-tags' ); ?>
      </section>
      
      
      
<?php get_footer();
