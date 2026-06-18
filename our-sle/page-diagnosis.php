<?php
/**
 * SLEの診断基準 | SLE（全身性エリテマトーデス）を患者目線でやさしく解説
 * 元ファイル: menu-sle/diagnosis.html
 */
$GLOBALS['oursle_center_id'] = 'about__sle';
$GLOBALS['oursle_center_class'] = 'diagnosis center__column';
get_header();
?>
      <section class="center__wrapper" aria-label="デスクトップ用ヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/menu-sle/' ) ); ?>">SLEについて</a></li>
          <li class="breadcrumb__item">SLEの診断基準</li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="わたしたちのSLE">
        </a>
        <h1 class="title">SLEの診断基準</h1>
      </section>
      
      <section class="sec01">
        <p class="subtitle">難病法の医療費助成の制度（特定疾患受給者票）の診断基準（2024年4月から）<br><br>特定疾患受給者票（受給者証）の認定では、病名ごとに国が決めた「診断基準」と「重症度分類」を満たすかがポイントです。これは“検査１つで決まる”ものではなく、指定医が作る臨床調査個人票に、症状・検査・臓器の状態や治療状況をまとめ、自治体が総合的に審査します。自分で要点を押さえると、受診時の説明もスムーズです。</p>
        <div class="index">
          <h2 class="index__title">もくじ</h2>
          <ul>
            <li class="index__item">
              <a class="index__link" href="#systemic">
                <div class="index__title">医療費助成制度はどのようなもの？</div>
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
                <div class="index__title">医療費助成の審査基準となる診断方法</div>
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
                <div class="index__title">診断基準とは</div>
                <div class="section__button">
                  <svg viewBox="0 0 24 24" width="20" height="20">
                    <line x1="12" y1="6" x2="12" y2="18" />  <!-- 縦棒 -->
                    <polyline points="9 15 12 18 15 15" />    <!-- 下向き矢印 -->
                  </svg>
                </div>
              </a>
            </li>
            <li class="index__item">
              <a class="index__link" href="#kidney">
                <div class="index__title">重症度分類SLEDAIとは</div>
                <div class="section__button">
                  <svg viewBox="0 0 24 24" width="20" height="20">
                    <line x1="12" y1="6" x2="12" y2="18" />  <!-- 縦棒 -->
                    <polyline points="9 15 12 18 15 15" />    <!-- 下向き矢印 -->
                  </svg>
                </div>
              </a>
            </li>
            <li class="index__item">
              <a class="index__link" href="#lungs">
                <div class="index__title">まとめ</div>
                <div class="section__button">
                  <svg viewBox="0 0 24 24" width="20" height="20">
                    <line x1="12" y1="6" x2="12" y2="18" />  <!-- 縦棒 -->
                    <polyline points="9 15 12 18 15 15" />    <!-- 下向き矢印 -->
                  </svg>
                </div>
              </a>
            </li>
            <li class="index__item">
              <a class="index__link" href="#nerve">
                <div class="index__title">軽症高額該当とは</div>
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
                <div class="index__title">高額かつ長期とは</div>
                <div class="section__button">
                  <svg viewBox="0 0 24 24" width="20" height="20">
                    <line x1="12" y1="6" x2="12" y2="18" />  <!-- 縦棒 -->
                    <polyline points="9 15 12 18 15 15" />    <!-- 下向き矢印 -->
                  </svg>
                </div>
              </a>
            </li>
            <li class="index__item">
              <a class="index__link" href="#other">
                <div class="index__title">従来のSLEの分類基準とは</div>
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
          難病法の医療費助成制度はどのようなものですか？
        </h2>
        <p class="about-sle__text">
          治療が困難で長期療養が必要な指定難病の患者さんの医療費を軽減する制度です。SLEは指定難病の1つ（指定難病49）として、医療費助成の対象となっています。認定を受けるには以下の基準を満たす必要があります。
        </p>

        <h3 class="diagnosis__title">全身性エリテマトーデスの医療費助成の認定基準</h3>
        <p class="about-sle__text">
          全身性エリテマトーデスと診断され、次に該当した場合は「難病法」による医療費助成を受けることができます。<br>
          SLEの診断基準を満たし、重症度分類 SLEDAIスコア4点以上の患者さん、または高額な医療費を継続している患者さんが該当します。
        </p>
        <figure>
          <img src="<?= THEME_URI ?>/assets/images/menu-sle/iryouhinosikumi.webp" alt="">
        </figure>
      </section>
      
      <section class="section" id="skin">
        <h2 class="about-sle__title">
          わたしたちが直面する医療費助成の審査基準となる診断方法とは？
        </h2>
        <p class="about-sle__text">
          1. 診断方法<br>
          ・まず、<span class="under_line">抗核抗体80倍以上を満たしている</span>かを確認します。『A』<br>
          ・そして、患者さんの症状<span class="under_line">（臨床所見）『B』</span>と血液検査などの結果<span class="under_line">（免疫所見）『C』</span>を点数化します。<br>
          ・この点数の<span class="under_line">合計が10点以上になれば、SLEと診断</span>されます。<br>
          ・病気を診断するとき、症状や検査結果をいつのものを使ってもOKです。<br>
          <br>
          2. 点数のつけ方<br>
          ・SLE以外の病気の可能性が高い症状には点数をつけません。<br>
          ・同じ種類の症状がいくつかある場合は、一番点数の高いものだけを数えます。<br>
          　（注意事項を参考にしてください）<br>
          <br>
          3. 症状について<br>
          ・病気の経過中に、<span class="under_line">Bの項目は少なくとも1つは症状が現れる必要</span>があります。<br>
          ・すべての症状が同時に出る必要はありません。<br>
          <br>
          4. 病気の重さの判断<br>
          ・治療を始めた後、<span class="under_line">どのくらい病気が重いかをSLEDAIスコアで判断</span>します。<br>
          ・医師が、最近6ヶ月間で一番具合が悪かったときを基準に判断します。<br>
          <br>
          5. 医療費の助け（高額かつ長期や軽症高額該当の適応）<br>
          ・病気がそれほど重くなくても、お金のかかる治療を続ける必要がある人は、医療費助成の対象です<br>
          ・医療費が５万以上を１２ヶ月のうち5回以上だと医療費減額の対象です。
        </p>
      </section>
      
      <section class="sec04 section about-diagnosis" id="join">
        <h2 class="about-sle__title">
          診断基準とは？
        </h2>
        <p class="rinsyokensakojinhyou">厚生労働省の指定難病の診断基準は<a class="underline" href="https://www.mhlw.go.jp/content/10905000/001173545.pdf" target="_blank" rel="noopener noreferrer">こちらの3ページ</a>を参考にしています。</p>
        <p class="bold_impact">
            ■ 診断基準に関する事項 ＜診断のカテゴリー＞ <br>
            Ａをみたし、ＢとＣの陽性項目の点数の合計が 10 点以上 で、<br>
            Ｂは経過中に 1 項目以上陽性化している場合
        </p>
        <p class="rinsyokensakojinhyou">
            <span class="bold">診断基準は</span><br>
            <span class="under_line">抗核抗体80倍以上（A）かつ<br>
            BとCの合計点数が10点以上でBの項目に該当する症状が一つでもある</span><br>
            <br>
            A 、B、Cの項目を見てみましょう
        </p>
        <div class="category_wrapper flex_center">
          <span class="abc">A</span>
          <span class="hissu">必須</span>
          <span class="category_title">抗核抗体80 倍以上（HEp-2 細胞を用いるか、同等の検査）</span>
        </div>
        <div class="category_wrapper">
          <div class="flex_center">
            <span class="abc">B</span>
            <span class="hissu">必須</span>
            <span class="category_title">臨床所見（患者さんの症状）</span>
          </div>
          
          <div class="table_wrapper">
            <table class="category_table">
              <tr>
                <th>全身症状</th>
                <td>1. 38.3℃をこえる発熱（2 点）</td>
              </tr>
              <tr>
                <th>皮膚粘膜</th>
                <td>1. 非瘢痕性脱毛（2 点）</td>
              </tr>
              <tr>
                <th></th>
                <td>2. 口腔内潰瘍（2 点）</td>
              </tr>
              <tr>
                <th></th>
                <td>3. 亜急性皮膚ループスや円板状ループス（4 点） </td>
              </tr>
              <tr>
                <th></th>
                <td>4. 急性皮膚ループス（蝶形紅斑や斑状丘疹状丘疹）（6 点）</td>
              </tr>
              <tr>
                <th>筋骨格</th>
                <td>1. 関節症状(2 個以上の滑膜炎もしくは関節圧痛と 30 分以上の朝のこわばり）（6 点）</td>
              </tr>
              <tr>
                <th>精神神経</th>
                <td>1. せん妄（2 点）</td>
              </tr>
              <tr>
                <th></th>
                <td>2. 精神障害（3 点）</td>
              </tr>
              <tr>
                <th></th>
                <td>3. 痙攣（5 点）</td>
              </tr>
              <tr>
                <th>漿膜</th>
                <td>1. 胸水または心嚢液（5 点）</td>
              </tr>
              <tr>
                <th></th>
                <td>2. 急性心外膜炎（6 点）</td>
              </tr>
              <tr>
                <th>血液所見</th>
                <td>1. 4,000/mm3未満の白血球減少（3 点）</td>
              </tr>
              <tr>
                <th></th>
                <td>2. 10 万/mm3未満の血小板減少（4 点）</td>
              </tr>
              <tr>
                <th></th>
                <td>3. 自己免疫性溶血（4 点）</td>
              </tr>
              <tr>
                <th>腎臓</th>
                <td>1) 0.5g/日以上の尿蛋白（4 点）</td>
              </tr>
              <tr>
                <th></th>
                <td>2. 腎生検でクラス II または V のループス腎炎（8 点）</td>
              </tr>
              <tr>
                <th></th>
                <td>3. 腎生検でクラス III または IV のループス腎炎（10 点）</td>
              </tr>
            </table>
          
            <div class="category_atention">
              <h6 class="category_atention_title">注意事項</h6>
              <p class="category_atention_text">
                SLEの診断基準では、症状や検査結果いくつかの大きなカテゴリー（大項目）に分けられています。そして、各大項目の中にはさらに詳細な症状や所見（小項目）が含まれています。<br>
                例えば：<br>
                1. 大項目：皮膚粘膜症状<br>
                ・小項目A：非瘢痕性脱毛（2 点）<br>
                ・小項目B：口腔内潰瘍（2 点）<br>
                ・小項目C：亜急性皮膚ループスや円板状ループス（4 点）<br>
                ・小項目D：急性皮膚ループス（蝶形紅斑や斑状丘疹状丘疹）（6 点）<br>
                2. 大項目：血液所見<br>
                ・小項目E：4,000/mm3未満の白血球減少（3 点）<br>
                ・小項目 F：10 万/mm3未満の血小板減少（4 点）<br>
                ・小項目 G：非瘢痕性脱毛（4 点）<br>
                <br>
                <span class="bold">同じ大項目内で複数の小項目が陽性（該当する）場合、その中で最も点数の高いものだけを採用する</span>ということを意味します。<br>
                <br>
                具体例：<br>
                ・もし患者さんが<span class="highlighter">「非瘢痕性脱毛」と「口腔内潰瘍」の両方を持っていても、皮膚症状の大項目からは2点しか加算されません</span><br>
                （両方とも2点なので、どちらか一方のみ）。<br>
                ・一方、「非瘢痕性脱毛」（4 点）と「急性皮膚ループス」（2点）がある場合は、異なる大項目なので、4点と2点の合計6点が加算されます。
              </p>
            </div>             
          </div>
        </div>
        <div class="category_wrapper">
          <div class="flex_center">
            <span class="abc">C</span>
            <span class="category_title">免疫所見（血液検査の一部）</span>
          </div>
          <table class="category_table">
            <tr>
                <th>特異抗体</th>
                <td>抗 dsDNA 抗体または抗 Sm 抗体（6 点）</td>
            </tr>
            <tr>
                <th>補体</th>
                <td>1. C3 または C4 の低下（3 点） </td>
            </tr>
            <tr>
                <th></th>
                <td>2.C3 および C4 の低下（4 点）</td>
            </tr>
            <tr>
                <th>抗リン脂質抗体</th>
                <td> 抗カルジオリピン抗体、抗β2GPI 抗体またはループスアンチコアグラント（2 点)</td>
            </tr>
          </table>
        </div>  
        
      </section>
      
      <section class="sec04 section sledai" id="kidney">
        <h2 class="about-sle__title">
          重症度分類SLEDAIとは
        </h2>
        <p class="about-sle__text">
          重症度分類SLEDAIスコアはSLEの活動性を評価するためのものです。
          SLEDAIスコア：<sapn class="under_line">４点以上</sapn>を対象とします<br>
          重要臓器（腎臓、中枢神経系、肺、心臓など）の障害の有無や程度も評価されます。<br>
          下記の点数の合計を計算します。
        </p>

        <table class="kensa_table">
            <tr>
            <td class="kensa_table_left">
                <span class="bold">痙攣 (8点)</span>
            </td>
            <td class="kensa_setumei">
                最近発症。代謝性、感染性、薬剤性は除外。
            </td>
            </tr>
            <tr>
            <td class="kensa_table_left">
                <span class="bold">精神症状 (8点)</span>
            </td>
            <td class="kensa_setumei">
                現実認識の重度の障害による正常な機能の変化。幻覚、思考散乱、連合弛 緩、貧困な思想内容、著明な非論理的思考、奇異な、混乱した、緊張病性の 行動を含む。尿毒症、薬剤性は除外。
            </td>
            </tr>
            <tr>
            <td class="kensa_table_left">
                <span class="bold">器質的脳障害 (8点)</span>
            </td>
            <td class="kensa_setumei">
                以下の A～D の全てを満たす意識混濁がある。<br>
                (A)見当識・記憶・他の知的機 能の低下を伴う、<br>
                (B)急性発症の変動する臨床症状を有する、<br>
                (C)周囲の環境 に対する注意維持力の低下、<br>
                (D)以下の 1～4 の少なくとも２つを認める。<br>
                1. 知覚障害、<br>
                2. 支離滅裂な発言、<br>
                3. 不眠症あるいは日中の眠気、<br>
                4. 精神運 動活動の増加あるいは減少。[除外]代謝性、感染性、薬剤性。
            </td>
            </tr>
            <tr>
            <td class="kensa_table_left">
                <span class="bold">視力障害 (8点)</span>
            </td>
            <td class="kensa_setumei">
                SLE による網膜の変化。軟性白斑、網膜出血、脈絡膜における漿液性の浸 出あるいは出血、視神経炎を含む。高血圧性、感染性、薬剤性は除外。
            </td>
            </tr>
            <tr>
            <td class="kensa_table_left">
                <span class="bold">脳神経障害 (8点)</span>
            </td>
            <td class="kensa_setumei">
                脳神経領域における感覚あるいは運動神経障害の新出。
            </td>
            </tr>
            <tr>
            <td class="kensa_table_left">
                <span class="bold">ループス頭痛 (8点)</span>
            </td>
            <td class="kensa_setumei">高度の持続性頭痛：片頭痛様だが、麻薬性鎮痛薬に反応しない。</td>
            </tr>
            <tr>
            <td class="kensa_table_left">
                <span class="bold">脳血管障害 (8点)</span>
            </td>
            <td class="kensa_setumei">
                脳血管障害の新出。動脈硬化性は除外。
            </td>
            </tr>
            <tr>
            <td class="kensa_table_left">
                <span class="bold">血管炎 (8点)</span>
            </td>
            <td class="kensa_setumei">潰瘍、壊疽、手指の圧痛を伴う結節、爪周囲の梗塞、線状出血、生検又は血 管造影による血管炎の証明。</td>
            </tr>
            <tr>
            <td class="kensa_table_left">
                <span class="bold">関節炎 (4点)</span>
            </td>
            <td class="kensa_setumei">
                潰瘍、壊疽、手指の圧痛を伴う結節、爪周囲の梗塞、線状出血、生検又は血 管造影による血管炎の証明。
            </td>
            </tr>
            <tr>
            <td class="kensa_table_left">
                <span class="bold">筋炎 (4点)</span>
            </td>
            <td class="kensa_setumei">
                CK・アルドラーゼの上昇を伴う近位筋の疼痛／筋力低下、あるいは筋電図 変化、筋生検における筋炎所見。
            </td>
            </tr>
            <tr>
            <td class="kensa_table_left">
                <span class="bold">尿円柱 (4点)</span>
            </td>
            <td class="kensa_setumei">
                顆粒円柱あるいは赤血球円柱。
            </td>
            </tr>
            <tr>
            <td class="kensa_table_left">
                <span class="bold">血尿 (4点)</span>
            </td>
            <td class="kensa_setumei">
                ＞５赤血球/HPF。結石、感染性、その他の原因は除外。
            </td>
            </tr>
            <tr>
            <td class="kensa_table_left">
                <span class="bold">蛋白尿 (4点)</span>
            </td>
            <td class="kensa_setumei">
                ＞0.5g/24 時間。新規発症あるいは最近の 0.5g/24 時間以上の増加。
            </td>
            </tr>
            <tr>
            <td class="kensa_table_left">
                <span class="bold">膿尿 (4点)</span>
            </td>
            <td class="kensa_setumei">
                ＞５白血球/HPF。感染性は除外。
            </td>
            </tr>
            <tr>
            <td class="kensa_table_left">
                <span class="bold">新たな発疹 (2点)</span>
            </td>
            <td class="kensa_setumei">
                炎症性皮疹の新規発症あるいは再発。
            </td>
            </tr>
            <tr>
            <td class="kensa_table_left">
                <span class="bold">脱毛 (2点)</span>
            </td>
            <td class="kensa_setumei">
                限局性あるいはびまん性の異常な脱毛の新規発症あるいは再発。
            </td>
            </tr>
            <tr>
            <td class="kensa_table_left">
                <span class="bold">粘膜潰瘍 (2点)</span>
            </td>
            <td class="kensa_setumei">
                口腔あるいは鼻腔潰瘍の新規発症あるいは再発。
            </td>
            </tr>
            <tr>
            <td class="kensa_table_left">
                <span class="bold">胸膜炎 (2点)</span>
            </td>
            <td class="kensa_setumei">
                胸膜摩擦音あるいは胸水、胸膜肥厚による胸部痛。
            </td>
            </tr>
            <tr>
            <td class="kensa_table_left">
                <span class="bold">心膜炎 (2点)</span>
            </td>
            <td class="kensa_setumei">
                少なくとも以下の１つ以上を伴う心膜の疼痛：心膜摩擦音、心嚢水、あるいは 心電図・心エコーでの証明。
            </td>
            </tr>
            <tr>
            <td class="kensa_table_left">
                <span class="bold">低補体血症 (2点)</span>
            </td>
            <td class="kensa_setumei">
                CH50、C3、C4 の正常下限以下の低下。
            </td>
            </tr>
            <tr>
            <td class="kensa_table_left">
                <span class="bold">抗 DNA 抗体上昇 (2点)</span>
            </td>
            <td class="kensa_setumei">
                Farr assay で＞25％の結合、あるいは正常上限以上。
            </td>
            </tr>
            <tr>
            <td class="kensa_table_left">
                <span class="bold">38度以上の発熱 (1点)</span>
            </td>
            <td class="kensa_setumei">
                ＞38℃、感染性は除外。
            </td>
            </tr>
            <tr>
            <td class="kensa_table_left">
                <span class="bold">血小板減少 (1点)</span>
            </td>
            <td class="kensa_setumei">
                ＜100,000 血小板/mm 3。
            </td>
            </tr>
            <tr>
            <td class="kensa_table_left">
                <span class="bold">白血球減少 (1点)</span>
            </td>
            <td class="kensa_setumei">
                ＜3,000 白血球/mm 3、薬剤性は除外。
            </td>
            </tr>
        </table>
      </section>
      
      <img src="<?= THEME_URI ?>/assets/images/background/bg-yellow03.webp" alt="">
      <section class="sec04 bg_yellow" id="lungs">
        <div class="sec04_inner section">
          <h2 class="about-sle__title">
            まとめ：診断基準とSLEDAIスコアについて
          </h2>
          <p class="about-sle__text">
            <span class="under_line">診断基準はSLEという病気であるかどうかを判断する</span>ためのもので、<span class="under_line">SLEDAIスコアはその病気の活動性を評価する</span>ためのものです。<br>
            <br>
            医療費助成の判断には、診断基準を満たしてSLEと診断されていることが前提で、その上でSLEDAIスコアなどを用いて重症度を評価し、助成の対象となるかどうかを判断します。
          </p>
          <h3>診断基準</h3>
          <p class="about-sle__text">
            ・通常、臨床症状と検査結果を組み合わせて点数化し、<span class="under_line">一定点数（多くの場合10点以上）に達すると診断</span>されます。<br>
            ・診断基準は、患者さんがSLEであるかどうかを判断するためのものです。
          </p>
          <h3>SLEDAIスコア</h3>
          <p class="about-sle__text">
            ・SLE Disease Activity Index（全身性エリテマトーデス疾患活動性指標）の略です。<br>
            ・<span class="under_line">すでにSLEと診断された患者さんの病気の活動性（重症度）を評価</span>するために使用されます。<br>
            ・0〜105点のスケールで評価され、点数が高いほど疾患活動性が高いことを示します。<br>
            ・医療費助成の対象となるかどうかの判断に使用される場合があります（4点以上が一つの基準となることが多い）。
          </p>
        </div>
      </section>
      <img class="bg-yellow" src="<?= THEME_URI ?>/assets/images/background/bg-yellow04.webp" alt="">
      
      <section class="section" id="nerve">
        <h2 class="about-sle__title">
          軽症高額該当とは
        </h2>
        <h3 class="section__sub-title">「軽症」であっても高額な医療を続けている方も難病医療費助成制度による助成を受けられます。</h3>
        <p class="about-sle__text">
          <span class="bold">対象者</span><br>
          重症度分類を満たさないものの、<span class="under_line">月ごとの医療費総額が33,330円を超える月が年間3回以上ある</span>患者さんです。
        </p>
      </section>

      <section class="section" id="blood">
        <h2 class="about-sle__title">
          高額かつ長期とは
        </h2>
        <h3 class="section__sub-title">高額な医療費が長期に続く方向けの助成</h3>
        <p class="about-sle__text">一般所得・上位所得について、軽減された負担上限額が設定されています。</p>
        <p class="about-sle__text">
          <span class="bold">対象者</span><br>
          指定難病及び小児慢性特定疾病（※）にかかわるの<span class="under_line">医療費（10割）が月に5万円を超える月が、申請する月の12か月以内で6回以上ある</span>患者さんです。
        </p>
      </section>
      
      <section class="section" id="other">
        <h2 class="about-sle__title">
          従来のSLEの分類基準とは
        </h2>
        <p class="about-sle__text">
          様々な分類基準があります。<br><br>

          SLEの重症度分類　SLEDAI　1992年<br>
          ACR基準　1987年<br>
          ACR (American College of Rheumatology) 改訂分類基準　1997年<br>
          SLICC (Systemic Lupus International Collaborating Clinics) 分類基準　2012年<br>
          EULAR/ACR SLE分類基準　2019年
        </p>
      </section>
      
      <section class="category__wrapper bg-white section">
        <div class="category">
          タグ：
          <a href="<?php echo esc_url( oursle_tag_url( 'SLEについて' ) ); ?>">#SLEについて </a>
          <a href="<?php echo esc_url( oursle_tag_url( 'SLEの症状' ) ); ?>">#SLEの症状 </a>
          <a href="<?php echo esc_url( oursle_tag_url( '全身' ) ); ?>">#全身 </a>
          <a href="<?php echo esc_url( oursle_tag_url( '皮膚' ) ); ?>">#皮膚 </a>
          <a href="<?php echo esc_url( oursle_tag_url( '粘膜' ) ); ?>">#粘膜 </a>
          <a href="<?php echo esc_url( oursle_tag_url( '筋肉' ) ); ?>">#筋肉 </a>
          <a href="<?php echo esc_url( oursle_tag_url( '関節' ) ); ?>">#関節 </a>
          <a href="<?php echo esc_url( oursle_tag_url( '腎臓' ) ); ?>">#腎臓 </a>
          <a href="<?php echo esc_url( oursle_tag_url( '肺' ) ); ?>">#肺 </a>
          <a href="<?php echo esc_url( oursle_tag_url( '心臓' ) ); ?>">#心臓 </a>
          <a href="<?php echo esc_url( oursle_tag_url( '神経' ) ); ?>">#神経 </a>
          <a href="<?php echo esc_url( oursle_tag_url( '血液' ) ); ?>">#血液</a>
        </div>
        <p class="up-dated__text">
          作成日・更新日 <time datetime="2026-05-29">2026.05.29</time>
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
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_tiryou.webp" alt="SLEの治療のサムネイル">
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
