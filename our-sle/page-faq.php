<?php
/**
 * よくある質問 | SLE（全身性エリテマトーデス）を患者目線でやさしく解説
 * 元ファイル: support-sle/faq.html
 */
$GLOBALS['oursle_center_id'] = 'about__sle';
get_header();
?>
      <section class="center__wrapper" aria-label="デスクトップ用ヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">困っていること</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">よくある質問</a></li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="わたしたちのSLE">
        </a>
        <h1 class="title">よくある質問</h1>
      </section>
      
      <section class="sec01">
        <p class="subtitle">
          SLEに関するよくある質問を、実際の声をもとにまとめました。医療的な情報だけでなく、日々の生活や心の揺れについても触れています。正解を押しつけるのではなく、「こんな考え方もある」と感じてもらえるような内容を目指しました。今のあなたに必要な答えが見つかりますように。
        </p>
      </section>
      <section class="sec02">
        <h3 class="sub_title">SLEってなに？</h3>
        <details class="accordion">
          <summary class="accordion__title">
            Q. SLEってどんな病気？
          </summary>
          <div class="accordion__menu">
            A. 体を守るはずの免疫が、自分の体を攻撃してしまうことで炎症が起きる病気です。症状の出方は人それぞれで、良い時期とつらい時期を行ったり来たりすることがあります。
          </div>
        </details>
        
        <details class="accordion">
          <summary class="accordion__title">
            Q. うつる病気？家族にうつる？
          </summary>
          <div class="accordion__menu">
            A. うつりません。体質や環境の影響が重なって起こると考えられています。
          </div>
        </details>
        
        <details class="accordion">
          <summary class="accordion__title">
            Q. 完治する？一生つきあうの？
          </summary>
          <div class="accordion__menu">
            A. 「ずっと症状が落ち着く状態」を目指せる人もいます。薬や生活の工夫で安定して過ごせるケースも多いです。
          </div>
        </details>
      </section>
      <section class="sec02">
        <h3 class="sub_title">症状・悪化（再燃）・受診の目安</h3>
        <details class="accordion">
          <summary class="accordion__title">
            Q. 再燃（さいねん）ってなに？
          </summary>
          <div class="accordion__menu">
            A. 病気が落ち着いていたのに、炎症が強くなって症状や検査が悪くなることです。フレアとも呼びます。
          </div>
        </details>
        
        <details class="accordion">
          <summary class="accordion__title">
            Q. 疲れやすさはSLEのせい？
          </summary>
          <div class="accordion__menu">
            A. SLEそのもの、貧血、睡眠不足、ストレス、薬の影響など色々が重なりやすいです。「どんな疲れか」をメモすると相談しやすいです。
          </div>
        </details>
        
        <details class="accordion">
          <summary class="accordion__title">
            Q. 発熱が出た。再燃？風邪？
          </summary>
          <div class="accordion__menu">
            A. どちらもありえます。特に免疫を抑える薬を使っている人は感染症も要注意。高熱・息苦しさ・強いだるさがあるなら早めに連絡を。
          </div>
        </details>
        
        <details class="accordion">
          <summary class="accordion__title">
              Q. 受診を急いだ方がいいサインは？
          </summary>
          <div class="accordion__menu">
            A. 例：息苦しい／胸の痛み、強い頭痛や意識がぼんやり、急なむくみ・尿の異常、39℃近い発熱が続く、原因不明の強い腹痛、出血が止まりにくい…など。
          </div>
          <a class="button update__button" href="<?php echo esc_url( home_url( '/care-guide/' ) ); ?>">
          <span>受信の目安のページへ</span>
          <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
        </a>
        </details>
      </section>
      <section class="sec02">
        <h3 class="sub_title">検査・数値の見方</h3>
        <details class="accordion">
          <summary class="accordion__title">
            Q. 抗DNA抗体、補体（C3/C4）ってなに？
          </summary>
          <div class="accordion__menu">
            A. 炎症や病気の勢いの目安として見られることがあります。単体で決めつけず、症状とセットで判断します。
          </div>
        </details>
        
        <details class="accordion">
          <summary class="accordion__title">
            Q. 尿検査で蛋白（たんぱく）が出た。腎臓が悪い？
          </summary>
          <div class="accordion__menu">
            A. 一時的なこともありますが、続く場合は腎臓の評価が必要になることがあります。次の検査や受診タイミングを確認しましょう。
          </div>
        </details>
        
        <details class="accordion">
          <summary class="accordion__title">
            Q. CRPが低いのにしんどいのは変？
          </summary>
          <div class="accordion__menu">
            A. 変ではないです。CRPが上がりにくいタイプの炎症もありますし、疲労は数値に出にくいことも多いです。
          </div>
        </details>
      </section>

      <section class="sec02">
        <h3 class="sub_title">薬・副作用・ワクチン</h3>
        <details class="accordion">
          <summary class="accordion__title">
            Q. ステロイドはずっと飲むの？やめられる？
          </summary>
          <div class="accordion__menu">
            A. 目標は「必要最小限」。急にやめるのは危険なので、主治医と相談しながら少しずつ調整します。
          </div>
        </details>
  
        <details class="accordion">
          <summary class="accordion__title">
            Q. 免疫を抑える薬って感染しやすい？
          </summary>
          <div class="accordion__menu">
            A. 一般的に感染リスクは上がります。手洗い、混雑の回避、早めの受診相談が大事です。
          </div>
        </details>
  
        <details class="accordion">
          <summary class="accordion__title">
            Q. ワクチンは打っていい？
          </summary>
          <div class="accordion__menu">
            A. 多くは状況により推奨されることがありますが、薬の種類や病状で注意点が変わります。主治医に「今の薬でOKか」を確認してからが安心です。
          </div>
        </details>
  
        <details class="accordion">
          <summary class="accordion__title">
            Q. 薬の副作用がつらい。勝手に止めてもいい？
          </summary>
          <div class="accordion__menu">
            A. 勝手に中止は危険なことがあります。「何が、いつから、どれくらい困るか」をメモして早めに相談がおすすめです。
          </div>
        </details>
      </section>
      
      <section class="sec02">
        <h3 class="sub_title">生活（紫外線、疲れ、食事、運動）</h3>
        <details class="accordion">
          <summary class="accordion__title">
            Q. 日光（紫外線）はどれくらい避けるべき？
          </summary>
          <div class="accordion__menu">
            A. 体質によって悪化のきっかけになる人がいます。日焼け止め・帽子・日傘・長袖など“できる範囲で”対策が現実的です。
          </div>
        </details>
        <details class="accordion">
          <summary class="accordion__title">
            Q. 食事で気をつけることは？
          </summary>
          <div class="accordion__menu">
            A. まずは「無理なく続くバランス」。制限より、体重・血圧・骨の健康（カルシウム/たんぱく）を意識すると役立つことが多いです。
          </div>
        </details>
        <details class="accordion">
          <summary class="accordion__title">
            Q. 運動していい？
          </summary>
          <div class="accordion__menu">
            A. 病状が落ち着いている時は、軽い運動が体力維持に役立つことがあります。痛み・発熱・強いだるさがある時は無理しないでOK。
          </div>
        </details>
        <details class="accordion">
          <summary class="accordion__title">
            Q. 休み方がわからない。
          </summary>
          <div class="accordion__menu">
            A. 「完全に倒れる前に小休憩」を先に入れるのがコツ。家事は分割、買い物は宅配、予定は詰めすぎない、でラクになります。
          </div>
        </details>
      </section>

      <section class="sec02">
        <h3 class="sub_title">仕事・学校・制度</h3>
        <details class="accordion">
          <summary class="accordion__title">
            Q. 職場や学校にどう伝えたらいい？
          </summary>
          <div class="accordion__menu">
            A. 病名より、「配慮してほしいこと」を短く伝えるのが通りやすいです。例：通院日、疲労で波がある、感染が心配、など。
          </div>
        </details>
        <details class="accordion">
          <summary class="accordion__title">
            Q. 使える制度はある？
          </summary>
          <div class="accordion__menu">
            A. 例：高額療養費、傷病手当金、自立支援（対象は状況による）など。地域や働き方で変わるので「医療費の制度」のページで詳しく書いています。
          </div>
          <a class="button update__button" href="<?php echo esc_url( home_url( '/system/' ) ); ?>">
            <span>医療費の制度</span>
            <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
          </a>
        </details>
      </section>

      <section class="sec02">
        <h3 class="sub_title">妊娠・出産・家族のこと</h3>
        <details class="accordion">
          <summary class="accordion__title">
            Q. 妊娠はできる？
          </summary>
          <div class="accordion__menu">
            A. 可能な人も多いですが、病状が落ち着いている時期や薬の調整が大切です。妊娠希望は早めに主治医へ共有が安心です。
          </div>
        </details>
        <details class="accordion">
          <summary class="accordion__title">
            Q. 遺伝する？子どもにうつる？
          </summary>
          <div class="accordion__menu">
            A. うつる病気ではありません。体質の影響はゼロではないと言われますが「必ずなる」ではありません。
          </div>
        </details>
      </section>
      <section class="sec02">
        <h3 class="sub_title">こころ・周りの人への伝え方</h3>
        <details class="accordion">
          <summary class="accordion__title">
            Q. 気持ちが落ち込む。甘えてるのかな？
          </summary>
          <div class="accordion__menu">
            A. 甘えではないです。慢性疾患は「不安・喪失感」が自然に出やすいです。話せる相手や相談先を増やすのは立派なセルフケアです。
          </div>
        </details>
        <details class="accordion">
          <summary class="accordion__title">
            Q. 周りに理解されない時どうしたらいい？
          </summary>
          <div class="accordion__menu">
            A. “わかってほしい”を1回で達成しようとしないのがコツ。短い説明文を用意して、必要な人にだけ渡すのが楽です。
          </div>
        </details>
      </section>
      
      <img class="bg_yellow_victor" src="<?= THEME_URI ?>/assets/images/background/bg-yellow03.webp" alt="">
      
      <section class="sec07 summary__wrapper bg-yellow section">
        <div class="summary__header">
          <span class="summary__title">まとめ</span>
        </div>
        <p class="summary__text">
          SLEに関する疑問を、症状・検査・薬・生活・仕事・妊娠・こころまで幅広くまとめました。<br>
          「再燃ってなに？」「薬は勝手にやめていい？」「職場にどう伝える？」など、日常でふと思う疑問に、正解を押しつけるのではなく「こんな考え方もある」という視点でお答えしています。<br>
          気になる項目だけ読んでもOK。今のあなたの状況に合う答えが、少しでも見つかりますように。
        </p>
      </section>
      
      
      <img class="bg_white_victor" src="<?= THEME_URI ?>/assets/images/background/bg-yellow04.webp" alt="">
      <section class="category__wrapper bg-white section">
        <div class="category">
          タグ：
          <a href="<?php echo esc_url( oursle_tag_url( '妊娠' ) ); ?>">#妊娠 </a>
          <a href="<?php echo esc_url( oursle_tag_url( '出産' ) ); ?>">#出産 </a>
          <a href="<?php echo esc_url( oursle_tag_url( '再燃' ) ); ?>">#再燃 </a>
          <a href="<?php echo esc_url( oursle_tag_url( '通院' ) ); ?>">#通院 </a>
          <a href="<?php echo esc_url( oursle_tag_url( '受信サイン' ) ); ?>">#受信サイン </a>
        </div>
        <p class="up-dated__text">
          作成日・更新日 <time datetime="2026-06-06">2026.06.06</time>
        </p>
      </section>

      <img class="bg_blue_victor" src="<?= THEME_URI ?>/assets/images/background/bg-blue02.webp" alt="">

      <section class="pics bg-blue">
        <h2 class="pics__title">おすすめのページ</h2>
        <div class="pics__links">
          <a href="<?php echo esc_url( home_url( '/school-job/' ) ); ?>" class="pics__left-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_school.webp" alt="SLEの症状のサムネイル">
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
        <h3 class="pregnancy-subtitle">いま、気になること</h3>
        <p class="concern__text">気になる言葉を押すと関連ページに飛びます</p>
        <?php get_template_part( 'template-parts/concern-tags' ); ?>
      </section>

      
<?php get_footer();
