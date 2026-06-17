<?php
/**
 * 医師との信頼関係 | SLE（全身性エリテマトーデス）を患者目線でやさしく解説
 * 元ファイル: support-sle/doctor.html
 */
$GLOBALS['oursle_center_id'] = 'about__sle';
$GLOBALS['oursle_center_class'] = 'diagnosis center__column';
get_header();
?>
      <section class="center__wrapper" aria-label="デスクトップ用ヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">困っていること</a></li>
          <li class="breadcrumb__item">医師との信頼関係</li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="わたしたちのSLE">
        </a>
        <h1 class="title">医師との信頼関係</h1>
      </section>
      
      <section class="sec01">
        <p class="subtitle">「先生に聞きたいことがあるのに、時間が短くて言えなかった。言い方がきつくなりそうで、結局飲み込んだ。」そんな経験がある人へ。ここでは“仲良くなる”ためじゃなく、診察をスムーズにして、安心して治療を続けるためのコツをまとめます。</p>
        <div class="index">
          <h2 class="index__title">もくじ</h2>
          <ul>
            <li class="index__item">
              <a class="index__link" href="#systemic">
                <div class="index__title">なぜ信頼関係が大切？</div>
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
                <div class="index__title">信頼関係を築くための患者側のヒント</div>
                <div class="section__button">
                  <svg viewBox="0 0 24 24" width="20" height="20">
                    <line x1="12" y1="6" x2="12" y2="18" />  <!-- 縦棒 -->
                    <polyline points="9 15 12 18 15 15" />    <!-- 下向き矢印 -->
                  </svg>
                </div>
              </a>
            </li>
            <li class="index__item">
              <a class="index__link" href="#join">
                <div class="index__title">患者としての心構え</div>
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
          なぜ信頼関係が大切？
        </h2>
        <p class="about-sle__text">
          医師を信頼できると、安心して治療を受けられ気になることも相談しやすくなります。でも、それは医師だけでなく、私たち患者側の心がけも大切なんです
        </p>
      </section>
      
      <section class="section" id="skin">
        <h2 class="about-sle__title">
          信頼関係を築くための患者側のヒント
        </h2>
        <h3>自分の症状を正直に伝える</h3>
        <p class="about-sle__text">
          ・恥ずかしいと思っても隠さない<br>
          ・「たぶん」「なんとなく」ではなく、具体的に<br>
          ・いつから、どんな時に、どの程度痛いのか など<br>
          💡ヒント:受診前にメモしておくと伝え忘れがない
        </p>
        <h3>わからないことは遠慮せず質問する</h3>
        <p class="about-sle__text">
          ・「こんなこと聞いていいのかな」と思わない<br>
          ・わかったふりをしない<br>
          ・何度でも聞き直していい<br>
          💡ヒント:「つまり〇〇ということですか?」と自分の言葉で確認するとより理解が深まる
        </p>
        <h3>医師の話を最後まで聞く</h3>
        <p class="about-sle__text">
          ・途中で決めつけない<br>
          ・自分の考えと違っても、まずは聞く<br>
          ・疑問は説明が終わってから質問<br>
          💡ヒント:メモを取りながら聞くと、後で家族にも説明しやすい
        </p>
        <h3>自分の希望や不安を伝える</h3>
        <p class="about-sle__text">
          ・「仕事が休めない」「注射が苦手」など<br>
          ・「〇〇が心配です」と素直に<br>
          ・「できれば△△したい」と希望を言う<br>
          💡ヒント:生活スタイルを伝えると、無理のない治療計画を立ててもらえる
        </p>
        <h3>処方された薬はきちんと飲む</h3>
        <p class="about-sle__text">
          ・自己判断でやめない<br>
          ・飲み忘れや副作用があれば正直に報告<br>
          ・効果がないと感じたら相談<br>
          💡ヒント:飲めない理由があるなら、別の方法を一緒に考えてもらえる
        </p>
        <h3>定期検診や予約は守る</h3>
        <p class="about-sle__text">
          ・勝手に通院をやめない<br>
          ・キャンセルするなら早めに連絡<br>
          ・継続することで体調の変化に気づいてもらえる<br>
          💡ヒント:予約日はスマホのカレンダーにアラーム設定しておくと忘れない
        </p>
        <h3>他の病院の薬やサプリも伝える</h3>
        <p class="about-sle__text">
          ・「言わなくても大丈夫」と思わない<br>
          ・飲み合わせで問題が起きることも<br>
          ・市販薬やサプリメントも重要な情報<br>
          💡ヒント:お薬手帳を持参するとスムーズ
        </p>
      </section>
      
      <section class="sec04 section about-diagnosis" id="join">
        <h2 class="about-sle__title">
          こんな時どうする？Q＆A
        </h2>
        <h3 class="bold">
          Q. セカンドオピニオンを聞きたいけど、先生に悪い気がする
        </h3>
        <p class="rinsyokensakojinhyou">
          A.医師は患者さんの権利として理解しています。「他の先生の意見も聞いてみたい」と正直に伝えましょう。
        </p>
        <h3 class="bold">
          Q. 説明がよくわからなかったけど、今さら聞けない... 
        </h3>
        <p class="rinsyokensakojinhyou">
          A. 次の診察で「前回の説明でわからなかったところがあって」と素直に言えば大丈夫。理解して治療を受けることが一番大切です。
        </p>
        <h3 class="bold">
          Q. 処方された薬が合わない気がする...
        </h3>
        <p class="rinsyokensakojinhyou">
          A. すぐに相談を。我慢せず、どう合わないのか具体的に伝えましょう。
        </p>
        
      </section>
      
      <section class="sec04 section sledai" id="kidney">
        <h2 class="about-sle__title">
          患者としての心構え
        </h2>
        <p class="about-sle__text">
          医師との関係は、一方的に頼るのではなく、一緒に健康を作っていくパートナーシップです。私たち患者も、治療に積極的に参加する姿勢が大切です。信頼関係は一日で築けるものではありません。でも、お互いに誠実にコミュニケーションを取ることで、少しずつ深まっていきます。あなたの健康のために、医師とより良い関係を築いていきましょう
        </p>
      </section>
      
            
      <section class="category__wrapper bg-white section">
        <div class="category">
          タグ：
          <a href="<?php echo esc_url( oursle_tag_url( '医師との信頼関係' ) ); ?>">#医師との信頼関係 </a>
          <a href="<?php echo esc_url( oursle_tag_url( '通院' ) ); ?>">#通院 </a>
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
