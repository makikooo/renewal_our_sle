<?php
/**
 * 医療費の制度 | SLE（全身性エリテマトーデス）を患者目線でやさしく解説
 * 元ファイル: check-sle/system.html
 */
$GLOBALS['oursle_center_id'] = 'system';
$GLOBALS['oursle_center_class'] = 'diagnosis center__column';
get_header();
?>
      <section class="center__wrapper" aria-label="デスクトップ用ヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">調べたいこと</a></li>
          <li class="breadcrumb__item">医療費の制度</li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="わたしたちのSLE">
        </a>
        <h1 class="title">医療費の制度</h1>
      </section>
      
      <section class="sec01">
        <p class="subtitle">
          お金の不安を少しでも軽くするために<br>
          医療費まわりの「制度」は、大きく ①保険で上限をつける／②公費で助成する／③税金で戻す の3つに分けて考えると整理しやすいです。<br>
          SLEの人にも関係が深い順でまとめます。</p>
        <div class="index">
          <h2 class="index__title">もくじ</h2>
          <ul>
            <li class="index__item">
              <a class="index__link" href="#systemic">
                <div class="index__title">高額療養費制度</div>
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
                <div class="index__title">SLEに直結：指定難病の医療費助成</div>
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
                <div class="index__title">公費の別枠：自立支援医療</div>
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
                <div class="index__title">医療費控除（確定申告）</div>
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
                <div class="index__title">収入が減るとき：傷病手当金</div>
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
          高額療養費制度（医療費が高くなった月の上限）
        </h2>
        <p class="about-sle__text">
          同じ月(1日〜末日)に自己負担が高くなったとき、所得区分に応じた上限までに抑えられる仕組みです。<br>
          マイナ保険証なら事前申請不要!<br>
          マイナンバーカードを健康保険証として使っている場合は、機械に提示するだけで自動的に限度額が適用されます。<br>
          コツ:先に「限度額適用認定証」を出す<br>
          入院や高額治療で窓口負担が大きくなりそうなら、事前に保険者へ申請して「限度額適用認定証」を病院窓口に提示すると、最初から支払いが上限までで済みやすいです。<br>
          協会けんぽの場合、オンライン申請(電子申請)も案内されています(令和8年1月13日開始)。<br>
          ※ちなみに高額療養費制度は見直し議論・資料も出ていて、令和8年度以降の変更が検討されています。
        </p>

        <a class="button update__button" href="https://www.kyoukaikenpo.or.jp/benefit/high_cost_medical_expenses/002/">
          <span>協会けんぽで詳しく見る</span>
          <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
        </a>
        <a class="button update__button" href="https://www.mhlw.go.jp/stf/seisakunitsuite/bunya/kenkou_iryou/iryouhoken/juuyou/kougakuiryou/index.html">
          <span>厚生労働省で詳しく見る</span>
          <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
        </a>
      </section>
      
      <section class="section" id="skin">
        <h2 class="about-sle__title">
          SLEに直結：指定難病の医療費助成
        </h2>
        <p class="about-sle__text">
          指定難病の医療費助成を受けるには、まず主治医に「臨床調査個人票」という診断書を書いてもらいます。<br>
          この診断書と、住民票・課税証明書などの必要書類を揃えて、お住まいの市町村や保健所に申請します。<br>
          申請後、審査会で病状が認定基準に該当するか確認され、承認されると「医療受給者証」が交付されます。この受給者証を病院窓口で提示すると、自己負担が月額上限(所得に応じて2,500円〜30,000円)までに軽減されます。<br>
          受給者証の有効期間は原則1年で、更新が必要です。申請から交付まで数ヶ月かかることがあるため、早めの手続きをおすすめします。<br>
          詳しい申請方法や必要書類は、お住まいの自治体の難病対策担当課や保健所または病院のケースワーカーにお問い合わせください。
        </p>
        <a class="button update__button" href="https://www.nanbyou.or.jp/entry/5460" target="_blank">
          <span>難病情報センターで<br>詳しく見る</span>
          <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
        </a>
      </section>
      
      <section class="section" id="join">
        <h2 class="about-sle__title">
          自立支援医療（※対象が限定）
        </h2>
        <p class="about-sle__text">
          これは「障害を除去・軽減する医療」の自己負担を軽くする制度です。<br>
          主に<br>
          精神通院医療<br>
          更生医療（18歳以上）<br>
          育成医療（18歳未満） が対象です。<br>
          SLEそのものの助成は通常「指定難病」のほうが主役ですが、合併症や別疾患で該当するケースもあるので、“該当しそうなら”確認してみてください。
        </p>
        <a class="button update__button" href="https://www.mhlw.go.jp/stf/seisakunitsuite/bunya/hukushi_kaigo/shougaishahukushi/jiritsu/index.html" target="_blank">
          <span>厚生労働省で詳しく見る</span>
          <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
        </a>
      </section>
      
      <section class="section" id="kidney">
        <h2 class="about-sle__title">
          医療費控除（確定申告）
        </h2>
        <p class="about-sle__text">
          1年(1/1〜12/31)に払った医療費が一定以上ある場合、所得から差し引けて税金が戻る可能性があります。通院のための交通費(電車・バス代など)も医療費に含められますので、記録を残しておきましょう。領収書等は5年間保管が必要です。<br>
          また、OTC薬が多い人向けに セルフメディケーション税制 がありますが、**通常の医療費控除とは選択制(同時に使えない)**です。
        </p>
        <a class="button update__button" href="https://www.nta.go.jp/taxes/shiraberu/taxanswer/shotoku/1120.htm" target="_blank">
          <span>国税庁で詳しく見る</span>
          <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
        </a>
      </section>
      <section class="section" id="lungs">
        <h2 class="about-sle__title">
          収入が減るとき：傷病手当金
        </h2>
        <p class="about-sle__text">
          会社員など健康保険の被保険者で、病気やケガで働けず給与が出ない/減るとき、条件を満たすと支給されます。連続3日休んだ後の4日目以降などが要点です。<br>
          注意:同じ病名で一度傷病手当金を受給すると、原則として同じ病気では再度受給できません。再発や症状の悪化があっても、以前と同じ病名の場合は対象外となることが多いため、申請のタイミングは慎重に検討しましょう。
        </p>
        <a class="button update__button" href="https://www.kyoukaikenpo.or.jp/benefit/injury_and_sickness_allowance/index.html" target="_blank">
          <span>協会けんぽで詳しく見る</span>
          <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
        </a>
      </section>

      <section class="category__wrapper bg-white section">
        <div class="category">
          タグ：
          <a href="#">#高額療養費 </a>
          <a href="#">#制度 </a>
          <a href="#">#指定難病の医療費助成 </a>
          <a href="#">#自立支援医療 </a>
          <a href="#">#医療費控除 </a>
          <a href="#">#確定申告 </a>
          <a href="#">#傷病手当 </a>
        </div>
        <p class="up-dated__text">
          作成日・更新日 <time datetime="2026-06-12">2026.06.12</time>
        </p>
      </section>

      <img class="bg_blue_victor" src="<?= THEME_URI ?>/assets/images/background/bg-blue02.webp" alt="">

      <section class="pics bg-blue">
        <h2 class="pics__title">おすすめのページ</h2>
        <div class="pics__links">
          <a href="<?php echo esc_url( home_url( '/jukyuusyahyou/' ) ); ?>" class="pics__left-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_jukyuusya.webp" alt="便利な受給者表の使い方のサムネイル">
            <div class="button">
              <span>つづきを読む</span>
              <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
            </div>
          </a>
          <a href="<?php echo esc_url( home_url( '/nanbyouteate/' ) ); ?>" class="pics__right-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_nanbyouteate.webp" alt="難病手当のサムネイル">
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
