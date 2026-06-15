<?php
/**
 * 検査結果のみかた | SLE（全身性エリテマトーデス）を患者目線でやさしく解説
 * 元ファイル: check-sle/results.html
 */
$GLOBALS['oursle_center_id'] = 'results';
$GLOBALS['oursle_center_class'] = 'diagnosis center__column';
get_header();
?>
      <section class="center__wrapper" aria-label="デスクトップ用ヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/menu-check/' ) ); ?>">調べたいこと</a></li>
          <li class="breadcrumb__item">検査結果のみかた</li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="わたしたちのSLE">
        </a>
        <h1 class="title">検査結果のみかた</h1>
      </section>
      
      <section class="sec01">
        <p class="subtitle">
          変化に気づくためのチェックポイント<br>
          検査結果の解釈には、専門医が総合的に判断する必要があります。
        </p>
      </section>

      <section class="section">
        <h2 class="about-sle__title" id="systemic">
          血液学検査
        </h2>
        
        <table>
          <tr>
            <td>検査項目・基準</td>
            <td>検査説明</td>
          </tr>
          <tr>
            <td>
              <span class="bold">RBC 赤血球</span><br>
              男：400万〜539万/㎣<br>
              ⼥：360万〜489万/㎣
            </td>
            <td>
              すべての細胞に酸素を運び込む 炎症のために赤血球があまり作られなくなったり破壊されたりして数が減り、貧血になる赤血球に対する自己抗体ができて赤血球を破壊する貧血(自己免疫性溶血性貧血)
            </td>
          </tr>
          <tr>
            <td>
              <span class="bold">WBC 白血球</span><br>
              男 ：3,600-9,000 /㎕<br>
              女： 3,000-7,800 /㎕
            </td>
            <td>
              体内に入った細菌やウイルスと闘う免疫細胞SLEをはじめ膠原病では白血球の減少がみられる。白血球のなかでは主にリンパ球が減少する。
            </td>
          </tr>
          <tr>
            <td>
              <span class="bold">PLT 血小板</span><br>
              13.8-30.9万/㎕
            </td>
            <td>
              小さなかけら状の細胞で粘り気を出して傷口をふさいで血液をかためる働き。<br>
              SLEでは血小板にくっつきやすいタンパクができ、血小板が脾臓で破壊されるという通常の働きが高まり、血小板の減少がある。<br>
              血小板減少は再燃の予測因子。
            </td>
          </tr>
        </table>
        
      </section>
      
      <section class="section" id="inflammation">
        <h2 class="about-sle__title">
          炎症検査
        </h2>

        <table>
          <tr>
            <td>検査項目・基準</td>
            <td>検査説明</td>
          </tr>
          <tr>
            <td>
              <span class="bold">ESR 赤沈</span><br>
              男性：10mm以下<br>
              女性：15〜20mm以下
            </td>
            <td>
              赤血球が沈む速さ（赤血球沈降速度）を調べる検査。<br>
              からだのなかで炎症が起きていると数値が高くなる。SLEの活動性をみる目安のひとつ。
            </td>
          </tr>
          <tr>
            <td>
              <span class="bold">CRP</span><br>
              0.3mg/dl以下
            </td>
            <td>
              C反応性たんぱく。炎症があると血液中で増える。<br>
              ただしSLE自体では大きく上がりにくく、CRPが高いときは感染症の合併が疑われることもある。
            </td>
          </tr>
        </table>
      </section>

      <section class="section" id="immunology">
        <h2 class="about-sle__title">
          免疫学的検査
        </h2>

        <table>
          <tr>
            <td>検査項目・基準</td>
            <td>検査説明</td>
          </tr>
          <tr>
            <td>
              <span class="bold">ANA 抗核抗体</span><br>
              40倍または80倍未満
            </td>
            <td>
              細胞の核の成分に対してできる自己抗体。<br>
              SLEではほぼ100%陽性になるといわれ、診断のとても大切な手がかりになる。
            </td>
          </tr>
          <tr>
            <td>
              <span class="bold">抗dsDNA抗体</span><br>
              10.0 IU/mL未満
            </td>
            <td>
              自分のDNAを攻撃する自己抗体。<br>
              SLEに特徴的で、数値は病気の活動性や腎臓の症状(ループス腎炎)とも関係する。
            </td>
          </tr>
          <tr>
            <td>
              <span class="bold">抗リボソーム抗体</span><br>
              100 U/mL未満
            </td>
            <td>
              リボソームというたんぱく合成の場に対する自己抗体。<br>
              陽性のときは症状が重くなりやすいといわれている。
            </td>
          </tr>
        </table>
      </section>

      <section class="section" id="complement">
        <h2 class="about-sle__title">
          補体検査
        </h2>

        <table>
          <tr>
            <td>検査項目・基準</td>
            <td>検査説明</td>
          </tr>
          <tr>
            <td>
              <span class="bold">C3 補体第3成分</span><br>
              86〜160mg/dL
            </td>
            <td>
              免疫の働きを助け、細菌などを排除するたんぱく。<br>
              SLEでは消費されて低下しやすく、活動期に値が下がる傾向がある。
            </td>
          </tr>
          <tr>
            <td>
              <span class="bold">C4 補体第4成分</span><br>
              17〜45mg/dL
            </td>
            <td>
              C3とともに免疫を助けるたんぱく。<br>
              SLEの活動期にはとくに低くなりやすく、病気の勢いをみる指標になる。
            </td>
          </tr>
        </table>
      </section>

      <section class="section" id="urine">
        <h2 class="about-sle__title">
          尿検査
        </h2>

        <table>
          <tr>
            <td>検査項目・基準</td>
            <td>検査説明</td>
          </tr>
          <tr>
            <td>
              <span class="bold">尿タンパク</span><br>
              （−）
            </td>
            <td>
              腎臓の働きが低下していないかをみる指標。<br>
              ループス腎炎では陽性になりやすい。激しい運動や発熱で一時的に出ることもある。
            </td>
          </tr>
          <tr>
            <td>
              <span class="bold">潜血</span><br>
              （−）
            </td>
            <td>
              尿のなかに微量の血液が混じっていないかを調べる検査。<br>
              陽性のときは腎炎などが疑われる。
            </td>
          </tr>
        </table>
      </section>

      <section class="section" id="sediment">
        <h2 class="about-sle__title">
          尿沈渣検査
        </h2>

        <table>
          <tr>
            <td>検査項目・基準</td>
            <td>検査説明</td>
          </tr>
          <tr>
            <td>
              <span class="bold">赤血球</span><br>
              1〜4個/HPF
            </td>
            <td>
              尿を遠心分離して顕微鏡で調べる検査。<br>
              赤血球が多いと、腎臓の炎症・結石・腫瘍などが疑われる。
            </td>
          </tr>
          <tr>
            <td>
              <span class="bold">細菌</span><br>
              （−）
            </td>
            <td>
              尿のなかの細菌の有無を調べる。<br>
              陽性のときは腎臓や尿路の炎症（感染）が疑われる。
            </td>
          </tr>
        </table>
      </section>

      <section class="sec02 section" id="other">
        <h2 class="about-sle__title">
          そのほかの検査
        </h2>
        <p class="about-sle__text">
          血液や尿のほかにも、合併症をしらべるためにいろいろな検査をおこないます。<br><br>
          <span class="bold">胸部X線検査</span>：肺や心臓の病気をみつけるための検査。<br>
          <span class="bold">安静時心電図</span>：心臓全体の働きを調べ、心臓病の発見や診断に欠かせない検査。<br>
          <span class="bold">超音波検査（エコー）</span>：肝臓・胆のう・膵臓・脾臓・腎臓などの異常をしらべる検査。<br>
          <span class="bold">脳波</span>：中枢神経のけいれんなどをしらべる検査。<br>
          <span class="bold">生体検査（生検）</span>：症状のある組織を一部とって、顕微鏡で病理をしらべる検査。
        </p>
      </section>

      <section class="category__wrapper bg-white section">
        <div class="category">
          カテゴリー：
          <a href="#">#検査結果 </a>
          <a href="#">#血液検査 </a>
          <a href="#">#尿検査 </a>
          <a href="#">#免疫学的検査 </a>
          <a href="#">#補体 </a>
          <a href="#">#炎症反応 </a>
          <a href="#">#再燃の指標 </a>
        </div>
        <p class="up-dated__text">
          作成日・更新日 <time datetime="2026-06-13">2026.06.13</time>
        </p>
      </section>

      <img class="bg_blue_victor" src="<?= THEME_URI ?>/assets/images/background/bg-blue02.webp" alt="">

      <section class="pics bg-blue">
        <h2 class="pics__title">おすすめのページ</h2>
        <div class="pics__links">
          <a href="<?php echo esc_url( home_url( '/symptoms/' ) ); ?>" class="pics__left-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_shoujou.webp" alt="便利な受給者表の使い方のサムネイル">
            <div class="button">
              <span>つづきを読む</span>
              <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
            </div>
          </a>
          <a href="<?php echo esc_url( home_url( '/diagnosis/' ) ); ?>" class="pics__right-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_sindan.webp" alt="難病手当のサムネイル">
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
