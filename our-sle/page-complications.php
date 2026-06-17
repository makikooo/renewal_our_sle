<?php
/**
 * 起こりやすい合併症 | SLE（全身性エリテマトーデス）を患者目線でやさしく解説
 * 元ファイル: menu-sle/complications.html
 */
$GLOBALS['oursle_center_id'] = 'about__sle';
get_header();
?>
      <section class="center__wrapper" aria-label="デスクトップ用ヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">SLEについて</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">起こりやすい合併症</a></li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="わたしたちのSLE">
        </a>
        <h1 class="title">起こりやすい合併症</h1>
      </section>
      
      <section class="sec01">
        <p class="subtitle">SLEの合併症は、病気そのものが臓器に炎症を起こすものと、治療（主にステロイドや免疫抑制薬）で起こりやすくなるものに分かれます。それぞれの特徴を知り、適切に対処しましょう。</p>
        <div class="index">
          <h2 class="index__title">もくじ</h2>
          <ul>
            <li class="index__item">
              <a class="index__link" href="#nephritis">
                <div class="index__title">腎臓（ループス腎炎）</div>
                <div class="section__button">
                  <svg viewBox="0 0 24 24" width="20" height="20">
                    <line x1="12" y1="6" x2="12" y2="18" />  <!-- 縦棒 -->
                    <polyline points="9 15 12 18 15 15" />    <!-- 下向き矢印 -->
                  </svg>
                </div>
              </a>
            </li>
            <li class="index__item">
              <a class="index__link" href="#thrombosis">
                <div class="index__title">血栓（抗リン脂質抗体症候群を含む）</div>
                <div class="section__button">
                  <svg viewBox="0 0 24 24" width="20" height="20">
                    <line x1="12" y1="6" x2="12" y2="18" />  <!-- 縦棒 -->
                    <polyline points="9 15 12 18 15 15" />    <!-- 下向き矢印 -->
                  </svg>
                </div>
              </a>
            </li>
            <li class="index__item">
              <a class="index__link" href="#cns">
                <div class="index__title">中枢神経（脳・神経）</div>
                <div class="section__button">
                  <svg viewBox="0 0 24 24" width="20" height="20">
                    <line x1="12" y1="6" x2="12" y2="18" />  <!-- 縦棒 -->
                    <polyline points="9 15 12 18 15 15" />    <!-- 下向き矢印 -->
                  </svg>
                </div>
              </a>
            </li>
            <li class="index__item">
              <a class="index__link" href="<?php echo esc_url( home_url( '/about-sle/' ) ); ?>#immune-dysfunction">
                <div class="index__title">免疫の異常とは</div>
                <div class="section__button">
                  <svg viewBox="0 0 24 24" width="20" height="20">
                    <line x1="12" y1="6" x2="12" y2="18" />  <!-- 縦棒 -->
                    <polyline points="9 15 12 18 15 15" />    <!-- 下向き矢印 -->
                  </svg>
                </div>
              </a>
            </li>
            <li class="index__item">
              <a class="index__link" href="#heart-lungs">
                <div class="index__title">心臓・肺（炎症や臓器障害） </div>
                <div class="section__button">
                  <svg viewBox="0 0 24 24" width="20" height="20">
                    <line x1="12" y1="6" x2="12" y2="18" />  <!-- 縦棒 -->
                    <polyline points="9 15 12 18 15 15" />    <!-- 下向き矢印 -->
                  </svg>
                </div>
              </a>
            </li>
            <li class="index__item">
              <a class="index__link" href="#blood">
                <div class="index__title">血液（貧血・白血球/血小板の低下） </div>
                <div class="section__button">
                  <svg viewBox="0 0 24 24" width="20" height="20">
                    <line x1="12" y1="6" x2="12" y2="18" />  <!-- 縦棒 -->
                    <polyline points="9 15 12 18 15 15" />    <!-- 下向き矢印 -->
                  </svg>
                </div>
              </a>
            </li>
            <li class="index__item">
              <a class="index__link" href="#infection">
                <div class="index__title">感染症</div>
                <div class="section__button">
                  <svg viewBox="0 0 24 24" width="20" height="20">
                    <line x1="12" y1="6" x2="12" y2="18" />  <!-- 縦棒 -->
                    <polyline points="9 15 12 18 15 15" />    <!-- 下向き矢印 -->
                  </svg>
                </div>
              </a>
            </li>
            <li class="index__item">
              <a class="index__link" href="#bone">
                <div class="index__title">骨の問題（骨粗しょう症・骨壊死など）</div>
                <div class="section__button">
                  <svg viewBox="0 0 24 24" width="20" height="20">
                    <line x1="12" y1="6" x2="12" y2="18" />  <!-- 縦棒 -->
                    <polyline points="9 15 12 18 15 15" />    <!-- 下向き矢印 -->
                  </svg>
                </div>
              </a>
            </li>
            <li class="index__item">
              <a class="index__link" href="#visit">
                <div class="index__title">受診の目安</div>
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
        <div class="section__title-box">
          <h2 class="section__title">病気そのものによる主な合併症</h2>
        </div>
        <h2 class="about-sle__title" id="nephritis">
          腎臓（ループス腎炎）
        </h2>
        <p class="about-sle__text">
          蛋白尿・血尿・むくみ・血圧上昇などがサイン<br>
          放置すると腎機能が落ちることがあります<br>
          気づきやすい変化：足のむくみ、泡立つ尿、体重急増、血圧上昇。
        </p>
      </section>
      
      <section class="section" id="thrombosis">
        <h2 class="about-sle__title">
          血栓（抗リン脂質抗体症候群を含む）
        </h2>
        <p class="about-sle__text">
          動脈・静脈の血栓、妊娠に関する合併症（流産・合併症など）に関係することがあります。<br>
          危険サイン：片脚の腫れと痛み、突然の息切れ・胸痛、片側の手足の麻痺/しびれ、ろれつが回らない（→救急レベル）。
        </p>
      </section>
      
      <section class="section" id="cns">
        <h2 class="about-sle__title">
          中枢神経（脳・神経）
        </h2>
        <p class="about-sle__text">
          けいれん、精神症状、意識の変化などが出ることがあります。
        </p>
      </section>
      
      <section class="section" id="heart-lungs">
        <h2 class="about-sle__title">
          心臓・肺（炎症や臓器障害）
        </h2>
        <p class="about-sle__text">
          胸膜炎/心外膜炎などの「膜の炎症」、肺・心臓の障害が重くなると命に関わることがあります<br>
          危険サイン：呼吸で増える胸の痛み、息切れが急に強い、血痰、強い動悸。
        </p>
      </section>
      
      <section class="section" id="blood">
        <h2 class="about-sle__title">
          血液（貧血・白血球/血小板の低下）
        </h2>
        <p class="about-sle__text">
          貧血、白血球減少、血小板減少などが起こることがあります。<br>
          危険サイン：原因不明のあざ、歯ぐき/鼻血が止まりにくい、強いだるさ・息切れ。
        </p>
      </section>
      
      <section class="section" id="infection">
        <div class="section__title-box">
          <h2 class="section__title">治療に関連して増えやすい合併症</h2>
        </div>
        <h2 class="about-sle__title">
          感染症
        </h2>
        <p class="about-sle__text">
          免疫を抑える薬で 感染症リスクが上がりやすい ので、「いつもと違う発熱」には注意が必要です。
        </p>
      </section>

      <section class="section" id="bone">
        <h2 class="about-sle__title">
          骨の問題（骨粗しょう症・骨壊死など）
        </h2>
        <p class="about-sle__text">
          ステロイドは 骨粗しょう症 のリスクを上げます<br>
          また、骨壊死（大腿骨頭など） は「高用量ステロイドの長期使用」と関連が知られています サイン：股関節の痛み（歩くと痛い、脚の付け根が痛い）などが続く
        </p>
      </section>
      
      <section class="section" id="visit">
        <div class="section__title-box">
          <h2 class="section__title">受診の目安</h2>
        </div>
        <h2 class="about-sle__title">
          今すぐ（救急も含む）
        </h2>
        <p class="about-sle__text">
          片側の麻痺・ろれつ不良・けいれん、突然の強い胸痛/息切れ、血を吐く、意識が変、止まらない出血
        </p>
      </section>

      <section class="section">
        <h2 class="about-sle__title">
          早めに主治医へ（当日〜数日）
        </h2>
        <p class="about-sle__text">
          むくみや尿の変化（泡・赤い）、急な体重増加、発熱が続く/感染っぽい、強い頭痛や見え方の異常、あざが増える。
        </p>
      </section>

    
      
      <img class="bg_yellow_victor" src="<?= THEME_URI ?>/assets/images/background/bg-yellow03.webp" alt="">
      
      <section class="sec07 summary__wrapper bg-yellow section">
        <div class="summary__header">
          <span class="summary__title">まとめ</span>
        </div>
        <p class="summary__text">
          SLEの合併症は、病気による炎症が臓器に影響を及ぼすものと、治療薬（ステロイドや免疫抑制薬）によって起こりやすくなるものがあります。腎臓、血球、中枢神経、心臓・肺などの臓器障害や、血栓症、感染症、骨の問題などに注意が必要です。日頃から体調の変化に気を配り、発熱や息切れ、むくみ、関節の痛みなど気になる症状があれば早めに受診しましょう。定期的な検査と医師との連携で、合併症を予防・早期発見することが大切です。
        </p>
      </section>
      
      
      <img class="bg_white_victor" src="<?= THEME_URI ?>/assets/images/background/bg-yellow04.webp" alt="">
      <section class="category__wrapper bg-white section">
        <div class="category">
          タグ：
          <a href="#">#SLEについて </a>
          <a href="#">#合併症 </a>
          <a href="#">#ループス腎炎 </a>
          <a href="#">#血栓 </a>
          <a href="#">#中枢神経 </a>
          <a href="#">#心臓・肺 </a>
          <a href="#">#血液 </a>
          <a href="#">#感染症 </a>
          <a href="#">#骨</a>
        </div>
        <p class="up-dated__text">
          作成日・更新日 <time datetime="2026-05-29">2026.05.29</time>
        </p>
      </section>

      <img class="bg_blue_victor" src="<?= THEME_URI ?>/assets/images/background/bg-blue02.webp" alt="">

      <section class="pics bg-blue">
        <h2 class="pics__title">おすすめのページ</h2>
        <div class="pics__links">
          <a href="<?php echo esc_url( home_url( '/treatment/' ) ); ?>" class="pics__left-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_tiryou.webp" alt="医療費の制度のサムネイル">
            <div class="button">
              <span>つづきを読む</span>
              <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
            </div>
          </a>
          <a href="<?php echo esc_url( home_url( '/treatment/' ) ); ?>" class="pics__right-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_kusuri.webp" alt="医療費の制度のサムネイル">
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
