<?php
/**
 * 受給者票 使い道もっとある | SLE（全身性エリテマトーデス）を患者目線でやさしく解説
 * 元ファイル: check-sle/jukyuusyahyou.html
 */
$GLOBALS['oursle_center_id'] = 'jukyuusya';
get_header();
?>
      <section class="center__wrapper" aria-label="デスクトップ用ヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">調べたいこと</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">受給者票 使い道もっとある</a></li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="わたしたちのSLE">
        </a>
        <h1 class="title">受給者票 使い道もっとある</h1>
      </section>
      
      <section class="sec01">
        <p class="subtitle">
          医療費助成だけだと思っていませんか？受給者証には隠れた特典がいっぱい！福祉サービス、施設割引、駐車場の割引など、使える制度は地域によってさまざまです。このページで詳しく紹介しているので、ぜひ読んでみてください。思わぬサポートが見つかるかもしれません。
        </p>
      </section>
      <section class="sec02">
        <details class="accordion">
          <summary class="accordion__title">
            障害者総合支援法による<br>
            福祉サービスの利用可能です
          </summary>
          <div class="accordion__menu">
            <h3 class="accordion__answer_title">
              困りごとを減らすための障害福祉サービスに関連する制度。
              <span class="under_line">障害福祉サービス（障害者総合支援法）</span>
            </h3>
            <h4 class="accordion_answer_subtitle red">
              SLEは障害者総合支援法の対象疾病に指定されているため、障害者手帳がなくてもさまざまな福祉サービスを利用できます。
            </h4>
            <p class="accordion_text">
              <span class="bold">① 居宅介護（ホームヘルプ）</span><br>
              家に来てもらって手伝ってもらう支援です。<br>
              サービス内容<br>
              ・身体介護：入浴、着替え、トイレ、食事の介助など<br>
              ・家事援助：掃除、洗濯、買い物、調理など<br>
              ・通院等介助：病院への付き添い、受付や移動のサポートなど<br>
              こんな人に合います 「体調の波で家事が回らない」「通院が不安」「一人だと外出がつらい」<br>
              <br>
              <span class="bold">② 相談支援（いちばん最初に役立つ）</span><br>
              “障害福祉の何をどう使えばいいか”を一緒に整理してくれる人がつきます。<br>
              サービス内容<br>
              ・生活の困りごとを聞いてくれる<br>
              ・使えるサービスを提案してくれる<br>
              ・申請や手続きの流れも案内してくれる<br>
              はじめてはここが超重要： 「どれが自分に必要かわからない」を解決してくれます。<br>
              <br>
              <span class="bold">③ 計画相談支援給付（サービス等利用計画）</span><br>
              ざっくり言うと、福祉サービスを使うための“プラン作り”。<br>
              サービス内容<br>
              ・どんな困りごとがあるか<br>
              ・どのサービスを、週何回くらい使うか<br>
              目標（例：通院を一人で行けるようにする、生活リズムを整える など）<br>
              この計画があると、サービス利用がスムーズになりやすいです。<br>
              <br>
              <span class="bold">④ 地域相談支援給付（地域への移行・定着を支える相談）</span><br>
              地域で生活していく上での継続サポートの相談。 （対象は自治体・状況で変わるけど、「地域で暮らすための相談の枠」だと思えばOK）<br>
              <br>
              <span class="bold">⑤ 地域活動支援センター（地域での“居場所”や活動）</span><br>
              通える場所があって、そこで人と話したり活動したりできます。<br>
              活動内容<br>
              ・日中の居場所<br>
              ・生活の相談<br>
              ・軽い作業・創作活動・交流など（内容はセンターによる）<br>
              こんな人に合う 「家にこもりがち」「体調を見ながら外に出る練習をしたい」「人とゆるくつながりたい」<br>
              <br>
              <span class="bold">⑥ 就労移行支援</span><br>
              一般企業への就職を目指す人のための“就職サポート”。<br>
              給料は発生しません。<br>
              サービス内容<br>
              ・体調管理しながら通う練習<br>
              ・ビジネスマナー、PC、コミュニケーション練習<br>
              ・履歴書・面接練習<br>
              ・企業見学、実習、就活の同行など<br>
              ポイント：いきなり働くのが不安な人が、段階を踏める。<br>
              <br>
              <span class="bold">⑦ 就労継続支援</span>
              体調に合わせて働く場所。一般就労が難しくても、自分のペースで働ける。<br>
              <span class="bold">A型(雇用型)</span><br>
              事業所と雇用契約を結んで働きます。<br>
              ・最低賃金以上の給料がもらえる<br>
              ・比較的安定して通える人向け<br>
              ・軽作業、データ入力、清掃、調理補助など<br>
              私は在宅でウェブ制作しています。<br>
              <br>
              <span class="bold">B型(非雇用型)</span><br>
              雇用契約なしで、自分のペースで作業できます。<br>
              ・工賃制(作業量に応じた報酬で低賃金です)<br>
              ・体調の波が大きい人でも利用しやすい<br>
              ・内職、手工芸、農作業、軽作業など<br>
              <br>
              こんな人に合う:「体調の波があって一般就労は難しい」「少しずつ働く練習をしたい」「収入を得ながら社会参加したい」<br>
              <br>
              <span class="bold">⑧ 自立訓練</span><br>
              生活力を整える練習（就職が目的じゃなくてもOKなことが多い）<br>
              ・生活リズム、体力づくり<br>
              ・料理・金銭管理・通院管理など<br>
              ・外出練習、対人スキル練習 など （機能訓練＝リハビリ寄り、生活訓練＝暮らし寄り、のイメージ）<br>
              <br>
              <span class="bold">⑧ 補装具の助成</span><br>
              ・体の負担を減らす道具に補助が出る制度。<br>
              例：義肢、装具、車いす、歩行器、補聴器 など（対象は自治体基準） 医師の意見書や見積が必要なことが多いです。
            </p>
          </div>
          <a class="button update__button" href="https://www.mhlw.go.jp/stf/seisakunitsuite/bunya/hukushi_kaigo/shougaishahukushi/service/index_00001.html">
            <span>厚生労働省で詳しくみる</span>
            <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
          </a>
        </details>
        
        <details class="accordion">
          <summary class="accordion__title">
            難病患者就職サポーターが<br>
            ハローワークにて利用可能
          </summary>
          <div class="accordion__menu">
            <h3 class="accordion__answer_title">
              難病患者就職サポーターって何？
            </h3>
            <h4 class="accordion_answer_subtitle">
              ハローワークにいる、難病のある人の就職・転職を専門に手伝ってくれる担当者です。 「体調の波がある」「通院がある」「働き方に配慮が必要」みたいな事情を前提に、就活を一緒に進めてくれる人。
            </h4>
            <p class="accordion_text">
              <span class="bold">何をしてくれる？</span><br>
              ・希望条件の整理（在宅、時短、通院配慮、職種、体力面など）<br>
              ・求人探しの手伝い（条件に合う求人を一緒に探す）<br>
              ・応募書類の相談（履歴書・職務経歴書、伝え方）<br>
              ・面接の準備（聞かれやすいこと、伝え方、配慮の頼み方）<br>
              ・職場への配慮の伝え方の相談（言いにくい部分を整理してくれる）<br>
              ・必要に応じて他の支援（就労支援、医療・福祉）につなぐ
            </p>
          </div>
          <a class="button update__button" href="https://www.mhlw.go.jp/stf/seisakunitsuite/bunya/koyou_roudou/koyou/shougaishakoyou/06e.html">
            <span>厚生労働省で詳しくみる</span>
            <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
          </a>
        </details>
        
        <details class="accordion">
          <summary class="accordion__title">
            ヘルプマークを取得可能です
          </summary>
          <div class="accordion__menu">
            ヘルプマークとは内部障害の人や難病の人など、外見から分からなくても、支援や配慮を必要としている人が身につけておくことで、周囲の人に配慮を必要としていることを知らせることができるマークです。<br>
            地域によっては市町村で配布はされていないです。
          </div>
          <a class="button update__button" href="https://www.fukushi.metro.tokyo.lg.jp/shougai/shougai_shisaku/helpmark">
            <span>東京都福祉局で<br>詳しくみる</span>
            <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
          </a>
        </details>
        
        <details class="accordion">
          <summary class="accordion__title">
            携帯電話の割引
          </summary>
          <div class="accordion__menu">
            携帯電話の基本使用料等の割引制度や、割安な料金プランが利用できるなどのサービスを行っています。各携帯電話会社により割引制度が異なります。<br>
            NTTドコモのハーティ割引、auのスマイルハート割引、ソフトバンクのハートフレンド割引、UQ Wimaxのハート割、各社で内容が異なりますが、基本料金の割引など大きなメリットがあります。
          </div>
        </details>
      
        <details class="accordion">
          <summary class="accordion__title">
            パーキング・パーミット制度
          </summary>
          <div class="accordion__menu">
            パーキング・パーミット制度（思いやり駐車場・ゆずりあい駐車場等）で発行される “優先駐車区画を使っていい人ですよ”の証明カードです。<br>
            <span class="bold">これは何のため？</span><br>
            車いすマーク等の障害者等用駐車区画が「必要な人に使われる」ようにする仕組みです。（無関係な人の駐車を減らす狙い）<br>
            <span class="bold">どこで使う？</span><br>
            ・役所・病院・商業施設などの障害者等用駐車区画<br>
            ・使うときは ダッシュボード等に見えるよう掲示（自治体の運用に従う）<br>
            <span class="bold">だれがもらえる？（例：神奈川）</span><br>
            自治体で細部は違うけど、例として神奈川県は対象をこう整理しています。<br>
            ・無期限（青）：身体・知的・精神の障がい、難病、要介護高齢者など<br>
            ・有期限（橙）：妊産婦、けが人等（期限つき）<br>
            <span class="bold">申請はどこでする？</span><br>
            基本は 都道府県 or 市区町村の担当窓口。<br>
            申請書＋確認書類（手帳、受給者証、要介護認定、診断書などの写し）が必要になることが多いです。<br>
            <span class="bold">大事：これと似てるけど別モノ</span><br>
            ・身体障害者等用駐車場利用証：駐車場（敷地内の優先区画）で使う<br>
            ・駐車禁止等除外標章（警察）：路上の駐車規制の“除外”に関係する制度で、申請先も運用も別<br>
            <span class="bold">使わなくなったら返す？</span><br>
            これも自治体ルール。たとえば大阪府は「不要になった（死亡・期限切れ等）場合は返却」と案内しています。
          </div>
          <a class="button update__button" href="https://www.mlit.go.jp/sogoseisaku/barrierfree/sosei_barrierfree_tk_000362.html">
            <span>国土交通省で詳しくみる</span>
            <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
          </a>
        </details>
        
        <details class="accordion">
          <summary class="accordion__title">
            駐車場の減免<br>
            全国一律じゃなくて駐車場ごとのルール
          </summary>
          <div class="accordion__menu">
            <span class="bold">使える例（はっきり書いてある所）</span><br>
            <span class="under_line">羽田空港（P1〜P4）</span><br>
            障がい者割引の対象書類として 「特定疾患医療受給者証」「特定医療費（指定難病）受給者証」が明記されていて、駐車料金は通常の半額。入場時の申告 or 出庫時手続きの案内もあります。<br>
            <span class="under_line">堺市</span>（市内公共施設・都市公園の有料駐車場）<br>
            <span class="under_line">市内公共施設</span>：特定医療費（指定難病）受給者証の提示で割引（施設ごとに手続きが違う）<br>
            <span class="under_line">都市公園の有料駐車場</span>：手帳に加えて 小児慢性／指定難病／特定疾患医療受給者証／被爆者健康手帳の提示で免除と明記<br>
            <br>            
            <span class="bold">使えない（または条件が限定される）例もある</span><br>
            <span class="under_line">大阪市立駐車場</span>は、割引対象として障害者手帳（身体・療育・精神）の提示を条件にしていて、受給者証だけでOKとは書かれていません。<br>
            → つまり「受給者証OKの所もあるけど、ダメな所もある」<br>
            <span class="under_line">空港（関空など）</span>は「規程に該当なら半額」タイプ<br>
            関空はFAQで「管理規程の該当なら半額」と案内していて、対象書類の詳細は規程確認の形です。 （※なので“受給者証が対象に入るか”は、その空港の規程・窓口で最終確認が確実）<br>
            <br>
            <span class="bold">失敗しないコツ</span><br>
            ・先に精算しない（あとから割引不可の所がある）<br>
            ・入庫時に呼出ボタンがある所は入場時申告（羽田など）<br>
            ・迷ったら出口の係員／インターホンで「特定疾患（指定難病）の受給者証で、駐車料金の減免は対象ですか？」 と聞いて、受給者証（原本）を見せる
          </div>
        </details>
        
        <details class="accordion">
          <summary class="accordion__title">
            公園などの入園料・入館料免除
          </summary>
          <div class="accordion__menu">
            公園・公共施設の入園料／入館料の免除・割引<br>
            美術館・博物館・動物園・植物園など、公共施設の多くでは、対象の証明書を提示すると入園料／入館料が「無料」または「割引」になることがあります。<br>
            <span class="bold">よくある対象（施設によって違う）</span><br>
            障害者手帳（身体・療育・精神）<br>
            指定難病／特定疾患の受給者証<br>
            ミライロID（対応施設のみ）<br>
            <span class="bold">よくある割引パターン</span><br>
            本人：無料／半額<br>
            介助者（同伴者）：1名まで無料／割引 ※「介助者の扱い」は施設ごとに差が大きいです。<br>
            <span class="bold">どこで提示する？</span><br>
            チケット売り場・受付で 購入前／入館前に提示（※あとから返金できない施設もあるので、先に言うのが安全）<br>
            <span class="bold">デパート内の有料ギャラリー／ミュージアムは？</span><br>
            あります。特に、デパートや商業施設の中にある有料ギャラリー・ミュージアムでも、手帳提示で割引しているところがあります。ただし民間運営のことが多いので、割引の有無・条件は施設ごとにバラバラです。
          </div>
        </details>
        
        <details class="accordion">
          <summary class="accordion__title">
              保育園に関わる配慮
          </summary>
          <div class="accordion__menu">
            病気や障害がある家庭では、自治体の保育園申込みで配慮や加点（点数）がつく場合があります。点数が大きく増えるとは限りませんが、入園の優先順位（入園基準）に関わる大切な要素になることがあります。<br>
            <span class="bold">どんな事情が対象になりやすい？</span><br>
            通院や治療があり、育児の負担が大きい<br>
            体調の波があって、定期的な支援が必要<br>
            家族の介護・看護があるなど ※基準や必要書類は自治体ごとに違います。<br>
            <span class="bold">申込みのときにやること</span><br>
            役所の保育担当窓口で「病気（難病／障害）に関する配慮があるか」を確認<br>
            必要に応じて 診断書・意見書／受給者証／手帳 などの提出<br>
            <span class="bold">保育料の減免について</span><br>
            保育料（利用者負担）は、自治体によっては障害者手帳や指定難病の受給者証などを条件に、減免（安くなる／無料になる）が用意されている場合があります。ただし、対象条件・申請方法・減免額は自治体ごとに大きく違うので、必ず確認が必要です。
          </div>
        </details>

        <details class="accordion">
          <summary class="accordion__title">
            駐輪場の減免
          </summary>
          <div class="accordion__menu">
            <span class="bold">大阪市内（大阪市営系）の例</span><br>
            大阪市の駅前自転車駐車場のページでは、障がい者は利用料金が1/2（半額）、必要書類は手帳等、と案内があります。 ※「管理事務所へ問い合わせ」とあるので、現地の運用（提示場所・手続き）は駐輪場ごとに確認が確実。<br>
            大阪市外でも、同じような割引はある<br>
            <span class="bold">堺市</span>：市立自転車等駐車場の利用料金を5割（半額）にする基準が公開されています。<br>
            <span class="bold">神戸市</span>：市営駐輪場の使用料が半額（定期・回数券・一時券）で、対象書類に特定疾患／指定難病の受給者証まで明記されています（申請が必要）。<br>
            つまり、「半額の駐輪場」は大阪市だけではないけど、対象書類や手続き（申請の要否）は自治体で違いがあります。<br>
            JR・Osaka Metroの駅の駐輪場は<span class="under_line">「誰が運営してるか」</span>で決まる<br>
            駅に隣接していても、駐輪場は<br>
            市営（自治体）<br>
            指定管理（委託）<br>
            民間運営<br>
            が混ざります。なので「JRだから」「Metroだから」で全国共通にはなりません。
          </div>
        </details>
        
        <details class="accordion">
          <summary class="accordion__title">
            遊べれるところ
          </summary>
          <div class="accordion__menu">
            <span class="under_line">東京ディズニーリゾート（ディズニーランド／ディズニーシー）</span><br>
            「障がいのある方向けチケット」の対象証明書に 特定医療費（指定難病）受給者証が明記されています（同伴者1名まで購入可）。<br>
          </div>
          <a class="button update__button" href="https://www.tokyodisneyresort.jp/tdr/bfree/bfree_ticket.html#:~:text=%E9%9B%A3%E7%97%85%E6%B3%95%E3%81%AB%E8%A6%8F%E5%AE%9A%E3%81%99%E3%82%8B%E7%89%B9%E5%AE%9A%E5%8C%BB%E7%99%82%E8%B2%BB%EF%BC%88%E6%8C%87%E5%AE%9A%E9%9B%A3%E7%97%85%EF%BC%89%E5%8F%97%E7%B5%A6%E8%80%85%E8%A8%BC" target="_blank">
            <span>ディズニーリゾートを<br>みる</span>
            <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
          </a>
          <div class="accordion__menu">
            <span class="under_line">ナガシマリゾート（ナガシマスパーランド／なばなの里／湯あみの島）</span><br>
            対象（提示必要）に 特定医療費受給者証が明記され、入場料などが割引（本人＋付添1名）<br>
          </div>
          <a class="button update__button" href="https://www.nagashima-onsen.co.jp/resort/info/Disabilitydiscount.html" target="_blank">
            <span>ナガシマリゾートをみる</span>
            <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
          </a>
          <div class="accordion__menu">
            <span class="under_line">日本モンキーパーク（愛知）</span><br>
            特定医療費受給者証が割引対象として明記（本人＋介助者1名も割引）。<br>
          </div>
          <a class="button update__button" href="https://www.japan-monkeypark.jp/disabilities/" target="_blank">
            <span>日本モンキーパークを<br>みる</span>
            <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
          </a>
          <div class="accordion__menu">
            <span class="under_line">サンリオピューロランド（東京・多摩）</span><br>
            バリアフリー案内で、提示書類に難病手帳（特定医療費［指定難病］受給者証）などが明記（チケット割引・ハートパス関連）。<br>
          </div>
          <a class="button update__button" href="https://www.puroland.jp/guide/barrierfree/#:~:text=%E9%9B%A3%E7%97%85%E6%89%8B%E5%B8%B3(%E7%89%B9%E5%AE%9A%E5%8C%BB%E7%99%82%E8%B2%BB%5B%E6%8C%87%E5%AE%9A%E9%9B%A3%E7%97%85%5D%E5%8F%97%E7%B5%A6%E8%80%85%E8%A8%BC)" target="_blank">
            <span>サンリオピューロランドをみる</span>
            <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
          </a>
          <div class="accordion__menu">
            <span class="under_line">レゴランド・ジャパン（名古屋）</span><br>
            公式案内で「受給者証」提示について触れており、FAQで 「特定難病受給者証」も対象と明記（本人確認の身分証も求められることあり）<br>
          </div>
          <a class="button update__button" href="https://faq.legoland.jp/hc/ja-jp/articles/28766591549469-%E3%83%AC%E3%82%B4%E3%83%A9%E3%83%B3%E3%83%89-%E3%82%B8%E3%83%A3%E3%83%91%E3%83%B3%E3%81%AE-%E9%9A%9C%E3%81%8C%E3%81%84%E3%81%AE%E3%81%82%E3%82%8B%E3%81%8A%E5%AE%A2%E6%A7%98%E3%81%B8-%E3%81%A7%E7%B4%B9%E4%BB%8B%E3%81%95%E3%82%8C%E3%81%A6%E3%81%84%E3%82%8B%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E3%81%AE%E5%AF%BE%E8%B1%A1%E3%81%A7%E3%81%82%E3%82%8B-%E9%9A%9C%E3%81%8C%E3%81%84%E7%A6%8F%E7%A5%89%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E5%8F%97%E7%B5%A6%E8%80%85%E8%A8%BC-%E3%81%AB%E3%81%AF-%E9%80%9A%E6%89%80%E5%8F%97%E7%B5%A6%E8%80%85%E8%A8%BC-%E3%82%84-%E7%89%B9%E5%AE%9A%E9%9B%A3%E7%97%85%E5%8F%97%E7%B5%A6%E8%80%85%E8%A8%BC-%E3%82%82%E5%90%AB%E3%81%BE%E3%82%8C%E3%81%BE%E3%81%99%E3%81%8B" target="_blank">
            <span>レゴランド・ジャパンをみる</span>
            <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
          </a>
          <div class="accordion__menu">
            <span class="under_line">ジブリパーク（愛知）</span><br>
            「特定難病受給者証」も対象と明記されています。半額になります。同伴者1名まで可能。（本人確認の身分証も求められることあり）<br>
          </div>
          <a class="button update__button" href="https://ghibli-park.jp/ticket" target="_blank">
            <span>ジブリパークをみる</span>
            <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
          </a>
        </details>
      </section>
      
      <img class="bg_yellow_victor" src="<?= THEME_URI ?>/assets/images/background/bg-yellow03.webp" alt="">
      
      <section class="sec07 summary__wrapper bg-yellow section">
        <div class="summary__header">
          <span class="summary__title">まとめ</span>
        </div>
        <p class="summary__text">
          受給者証には、医療費の助成以外にも、実はいろいろな使い道があります。<br>
          福祉サービスや就職のサポート、ヘルプマーク、駐車場や遊園地などの割引まで、「こんなときに使えるかも」というヒントをまとめました。<br>
          全部覚えなくても大丈夫。「あ、これ使えそう」と思うものが、ひとつでも見つかりますように。
        </p>
      </section>
      
      
      <img class="bg_white_victor" src="<?= THEME_URI ?>/assets/images/background/bg-yellow04.webp" alt="">
      <section class="category__wrapper bg-white section">
        <div class="category">
          タグ：
          <a href="#">#特定疾患受給者票 </a>
          <a href="#">#難病 </a>
          <a href="#">#減免 </a>
        </div>
        <p class="up-dated__text">
          作成日・更新日 <time datetime="2026-06-12">2026.06.12</time>
        </p>
      </section>

      <img class="bg_blue_victor" src="<?= THEME_URI ?>/assets/images/background/bg-blue02.webp" alt="">

      <section class="pics bg-blue">
        <h2 class="pics__title">おすすめのページ</h2>
        <div class="pics__links">
          <a href="<?php echo esc_url( home_url( '/system/' ) ); ?>" class="pics__left-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_medical-support.webp" alt="医療費の制度のページのサムネイル">
            <div class="button">
              <span>つづきを読む</span>
              <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
            </div>
          </a>
          <a href="<?php echo esc_url( home_url( '/sle-life-tips/' ) ); ?>" class="pics__right-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_tukiau.webp" alt="SLEと付き合うページのサムネイル">
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
