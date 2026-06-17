<?php
/**
 * アンケート結果 第3回 みんなのお悩みQ&A | わたしたちのSLE
 * 元ファイル: enquete/enquete03.html
 */
$GLOBALS['oursle_center_id'] = 'enquete03';
get_header();
?>
      <!-- ヘッダー -->
      <section class="center__wrapper" aria-label="ページヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/menu-enquete/' ) ); ?>">アンケート</a></li>
          <li class="breadcrumb__item">第3回 みんなのお悩みQ&A</li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="わたしたちのSLE">
        </a>
        <h1 class="title">アンケート結果 第3回</h1>
      </section>

      <!-- 概要 -->
      <section class="sec01">
        <p class="subtitle">ムーンフェイス、減薬、自己注射、妊娠・出産、仕事、こころ…。<br>
        SLEと暮らす14名が、お互いの「お悩み」に正直な経験で答えてくれました。</p>

        <div class="enquete-summary">
          <p class="enquete-summary__period">📋 実施時期：2025年3月</p>
          <div class="enquete-summary__stats">
            <div>
              <div class="enquete-summary__stat-num">14</div>
              <div class="enquete-summary__stat-label">名が回答</div>
            </div>
            <div>
              <div class="enquete-summary__stat-num">14</div>
              <div class="enquete-summary__stat-label">問のお悩み</div>
            </div>
          </div>
        </div>
        <p class="about-sle__text">今回は、メンバーから寄せられた「みんなに聞いてみたいこと」に、当事者どうしで答え合うQ&A形式のアンケートです。同じ病気だからこそわかる、リアルな工夫が集まりました。<br>
        <small>※あくまで個人の体験です。お薬・治療に関することは必ず主治医にご相談ください。</small></p>
      </section>

      <!-- テーマ1 お薬と治療 -->
      <section class="section">
        <h2 class="about-sle__title">お薬と治療のこと</h2>
      </section>

      <!-- Q1 ムーンフェイス -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q1</div>
          <span class="q-badge__text">ムーンフェイスの対策はありますか？</span>
        </div>
        <div class="voice-section">
          <p class="voice-section__title">みんなの工夫</p>
          <ul class="symptom-list">
            <li>フェイスライン・耳のマッサージ、顔の体操を毎日続けている</li>
            <li>コロコロ付きのフェイスマッサージ器を使っていた</li>
            <li>トマトジュースや豆乳を飲む（主治医に「過度でなければOK」と確認のうえ）</li>
            <li>10mgを切ったあたりから自然に落ち着いてきた、という声も</li>
          </ul>
          <p class="symptom-list__note">※「特に出ていない」「意識していない」という方も複数いました。減薬が進むと和らいだという体験が目立ちました。</p>
        </div>
      </section>

      <!-- Q2 減薬スピード -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q2</div>
          <span class="q-badge__text">ステロイドの減薬スピードを教えてください</span>
        </div>
        <div class="voice-section">
          <p class="voice-section__title">それぞれの減薬ペース</p>
          <div class="voice-card">
            <p>約1年3ヶ月で25mg→3.5mgまで（21.5mg減薬）。比較的しっかり減らせました。</p>
          </div>
          <div class="voice-card">
            <p>退院後14mg→5mgまでは外来3週間ごとに1mgずつ。そこから5mg→4mgで10ヶ月、4mg→3mgで5ヶ月と、低用量になるほどゆっくりです。</p>
          </div>
          <div class="voice-card">
            <p>10mg→5mgは1年かからなかったけれど、5mg以下に下げると悪化してしまい、下げられずにいます。</p>
          </div>
          <div class="voice-card">
            <p>5mgを2年ほど継続中で、減薬の予定は今のところありません。先生も慎重に診てくれています。</p>
          </div>
          <div class="voice-card">
            <p>10mgからいきなり5mgになって、周りより早いようで不安、という声もありました。</p>
          </div>
        </div>
        <p class="about-sle__text">減薬のスピードは本当に人それぞれ。低用量になるほど慎重に、というケースが多いようです。不安なときは主治医に「なぜこのペースなのか」を聞いてみると安心につながります。</p>
      </section>

      <!-- Q3 自己注射 -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q3</div>
          <span class="q-badge__text">自己注射（ベンリスタなど）の痛み対策はどうしていますか？</span>
        </div>
        <div class="voice-section">
          <p class="voice-section__title">痛みをやわらげるコツ</p>
          <ul class="symptom-list">
            <li>打つ前に冷蔵庫から出して30分〜1時間（冬は2〜3時間）常温に戻す ※医師確認のうえ</li>
            <li>太ももよりお腹（下腹）の方が痛くないと聞き、つまんで打っている</li>
            <li>皮膚をやさしくつまんで動かないようにしてから打つ</li>
            <li>深呼吸してリラックス。あとは「無心で打つ」</li>
          </ul>
          <p class="symptom-list__note">※「常温に戻す」工夫はとても多く挙げられました。冷たいまま打つと痛みが出やすいようです。</p>
        </div>
      </section>

      <!-- テーマ2 体調管理 -->
      <section class="section">
        <h2 class="about-sle__title">体調管理・再発予防のこと</h2>
      </section>

      <!-- Q4 悪化・再発予防 -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q4</div>
          <span class="q-badge__text">悪化や再発しないように、どのように過ごしていますか？</span>
        </div>
        <div class="voice-section">
          <p class="voice-section__title">日々気をつけていること</p>
          <ul class="symptom-list">
            <li>紫外線・日光を避ける（引き金になりやすい）</li>
            <li>睡眠と休養をしっかりとる、睡眠不足にしない</li>
            <li>疲れ・ストレスを溜めない。予定を詰め込みすぎない</li>
            <li>薬や注射を飲み忘れ・打ち忘れしない</li>
            <li>うがい・手洗い・消毒を徹底する</li>
            <li>ループス腎炎の方は塩分・食事量に気をつける</li>
          </ul>
          <p class="symptom-list__note">※一方で「安静にしていても再燃した」という声もありました。気をつけていても波があるのがSLE。自分を責めすぎないことも大切です。</p>
        </div>
      </section>

      <!-- Q5 しんどいとき -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q5</div>
          <span class="q-badge__text">体調がしんどいときの対処法を教えてください</span>
        </div>
        <div class="voice-section">
          <p class="voice-section__title">しんどいときの過ごし方</p>
          <ul class="symptom-list">
            <li>とにかく横になる、寝る</li>
            <li>水やお茶を飲む</li>
            <li>やらなくて済む家事はやらない、最低限で済ませる</li>
            <li>早めに帰宅する、有給をとって身体を休ませる</li>
            <li>湿布など、対処できるものは縋る気持ちで使う</li>
          </ul>
          <p class="symptom-list__note">※「無理せず休む」が圧倒的多数。「我慢する」という声もありましたが、休めるときに休むことが何よりの対処法のようです。</p>
        </div>
      </section>

      <!-- Q6 入院・退院後の回復 -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q6</div>
          <span class="q-badge__text">入院〜退院後の暮らし方、体力・筋力の回復方法は？</span>
        </div>
        <div class="voice-section">
          <p class="voice-section__title">少しずつ取り戻していく</p>
          <div class="voice-card">
            <p>入院中から動けるときは院内を歩き、リハビリも入れていました。退院後は室内運動やストレッチを、無理のない範囲で続けています。</p>
          </div>
          <div class="voice-card">
            <p>退院後は自宅療養に1年。入院中は寝たきりだったので、少しずつ歩く距離を伸ばしていきました。</p>
          </div>
          <div class="voice-card">
            <p>とにかく無理せず、できることを少しずつ増やしました。いまだにペットボトルの蓋は開けられませんが、足首を上げるストレッチは意識しています。</p>
          </div>
          <div class="voice-card">
            <p>ストレッチチューブやマッサージボールには大変お世話になりました。</p>
          </div>
        </div>
        <p class="about-sle__text">「入院していない」という方もいました。共通していたのは、焦らず、できることから少しずつ、という姿勢でした。</p>
      </section>

      <!-- Q7 レイノー -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q7</div>
          <span class="q-badge__text">レイノー現象の予防・対策はどうしていますか？</span>
        </div>
        <div class="voice-section">
          <p class="voice-section__title">とにかく冷やさない</p>
          <ul class="symptom-list">
            <li>「冷やさない」が鉄則。電子カイロやカイロを持ち歩く</li>
            <li>湯たんぽや、お湯を入れたペットボトルにタオルを巻いて手を温める</li>
            <li>冬は冷えるので、外出時もこまめに手を温める</li>
          </ul>
        </div>
      </section>

      <!-- Q8 再燃時の違い -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q8</div>
          <span class="q-badge__text">再燃したとき、発症時と症状の違いはありましたか？</span>
        </div>
        <div class="voice-section">
          <p class="voice-section__title">経験した方の声</p>
          <div class="voice-card">
            <p>発症時はほとんど痛みがなく立ち上がれない状態でしたが、再燃時はものすごい痛みがあり、立って歩くのも大変でした。</p>
          </div>
          <div class="voice-card">
            <p>発症時と同じくらいの発熱と倦怠感でした。</p>
          </div>
          <div class="voice-card">
            <p>特に違いはありませんでした。</p>
          </div>
        </div>
      </section>

      <!-- テーマ3 こころ -->
      <section class="section">
        <h2 class="about-sle__title">こころのケアのこと</h2>
      </section>

      <!-- Q9 メンタル -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q9</div>
          <span class="q-badge__text">メンタルの調子が悪いときはどう対処していますか？</span>
        </div>
        <div class="voice-section">
          <p class="voice-section__title">心が苦しいときの工夫</p>
          <div class="voice-card">
            <p>泣きたい時は泣くなど、感情を閉じ込めないようにしています。家族や恋人など、安心できる人の近くにいるようにしています。</p>
          </div>
          <div class="voice-card">
            <p>友達に話してしまう。映画を見る。運動をする。</p>
          </div>
          <div class="voice-card">
            <p>無理せず、人付き合いを減らして一人の時間を積極的に持つようにしています。一人の方が落ち着くので。</p>
          </div>
          <div class="voice-card">
            <p>ストレス源を一時的に遮断します。ネットは最低限、SNSは一切見ない。そして、とにかく寝る。</p>
          </div>
          <div class="voice-card">
            <p>スーパー銭湯でサウナに入り、無になる。/ 歌を聞いたり、思いきり泣いたりする。</p>
          </div>
          <div class="voice-card">
            <p>自分を甘やかす。食事制限はあるけれど、好きなものを食べることも。/ つらいときはお薬に頼る。</p>
          </div>
        </div>
        <p class="about-sle__text">「感情を抑えこまない」「一人の時間をつくる」「とにかく寝る」――。それぞれが自分なりの逃げ場を持っていました。自分に合う方法が一つでもあると、心は少し楽になります。</p>
      </section>

      <!-- テーマ4 妊娠・出産・育児 -->
      <section class="section">
        <h2 class="about-sle__title">妊娠・出産・育児のこと</h2>
      </section>

      <!-- Q10 妊娠出産育児 -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q10</div>
          <span class="q-badge__text">SLEを持ちながらの妊娠・出産・育児の経験談</span>
        </div>
        <div class="voice-section">
          <p class="voice-section__title">それぞれの経験</p>
          <div class="voice-card">
            <p>発症後半年で寛解し、1人目を妊娠。2人目は6年後でした。どちらも産後の悪化などはありませんでした。</p>
          </div>
          <div class="voice-card">
            <p>現在1歳半の娘が1人。特に困ったことはありませんでした。ただ通院は1日がかりになるため一緒に連れて行くのは難しく、夫に任せて受診しています。</p>
          </div>
          <div class="voice-card">
            <p>出産後に発症しました。育児中は疲れやすく、体力不足を痛感しています。</p>
          </div>
          <div class="voice-card">
            <p>二人目出産後に発病。春が来て公園に行くのが怖いです。主治医からは「紫外線はガラスをほぼ通さないので室内で」と言われ児童館に通っていますが、室内だけとはいかず困っています。</p>
          </div>
          <div class="voice-card">
            <p>陣痛促進剤が効きすぎて1日半苦しみ、無痛に切り替えたら2倍の量が入り、結局帝王切開になりました。</p>
          </div>
          <div class="voice-card">
            <p>40歳から妊活を始め、人工授精・体外受精を保険適用内で2年半。最後の体外受精で妊娠判定はもらえましたが、3ヶ月で流産という結果になりました。</p>
          </div>
        </div>
        <p class="about-sle__text">「産後に発症・発病した」という声が複数ありました。妊娠・出産のかたちは人それぞれ。不妊治療中の方もいます。経験者の声が、これから考える方のヒントになりますように。</p>
      </section>

      <!-- テーマ5 仕事と暮らし -->
      <section class="section">
        <h2 class="about-sle__title">仕事と暮らしのこと</h2>
      </section>

      <!-- Q11 仕事の探し方・説明 -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q11</div>
          <span class="q-badge__text">仕事の探し方、病気の説明の仕方はどうしていますか？</span>
        </div>
        <div class="voice-section">
          <p class="voice-section__title">伝える派・伝えない派</p>
          <div class="voice-card">
            <p class="voice-card__tag">伝える</p>
            <p>アルバイト・パートの面接では必ず病気を告知します。「月1〜2回の通院時だけお休みをいただければ」とだけ伝えています。詳しく聞く企業もいれば、理解があって聞かない企業もあります。</p>
          </div>
          <div class="voice-card">
            <p class="voice-card__tag">伝える</p>
            <p>入社後に発症したので、上司に病気の内容や症状を詳しく説明しました。仕事量は特に減らず、「休むのは有給の範囲で自由に」という感じでした。</p>
          </div>
          <div class="voice-card">
            <p class="voice-card__tag">あえて言わない</p>
            <p>もともと余裕のある（扶養内の）仕事を選ぶので、特に話していません。「普通に生活できるけど少し持病がある」と説明することはあります。</p>
          </div>
          <div class="voice-card">
            <p class="voice-card__tag">心がけ</p>
            <p>周りに病気を伝えること、新しい薬が始まったり副作用の不安がありそうな時は、事前に伝えておくことを意識しています。</p>
          </div>
        </div>
      </section>

      <!-- Q12 続けるコツ -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q12</div>
          <span class="q-badge__text">仕事や学業を続けるコツはありますか？</span>
        </div>
        <div class="voice-section">
          <p class="voice-section__title">小さなコツの数々</p>
          <ul class="symptom-list">
            <li>無理をしない、頑張ろうとしない</li>
            <li>自分のペースを守れる場所を選ぶ</li>
            <li>仕事と予定を重ねない。仕事の日は体力を温存して行く</li>
            <li>溜め込まない。少しでも自分の好きなことをやる</li>
            <li>周りに病気を伝えておく</li>
          </ul>
        </div>
      </section>

      <!-- Q13 働けないときの生活 -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q13</div>
          <span class="q-badge__text">働けないとき、どうやって生活していますか？</span>
        </div>
        <div class="voice-section">
          <p class="voice-section__title">いまの暮らし方</p>
          <ul class="symptom-list">
            <li>専業主婦として過ごしている</li>
            <li>休職中で、会社に籍を置かせてもらっている</li>
            <li>貯金を崩している</li>
          </ul>
          <p class="symptom-list__note">※「働けない状態の方の生活を知りたい」という声も寄せられました。同じ立場の人とつながれる場の必要性がうかがえます。</p>
        </div>
      </section>

      <!-- Q14 更年期 -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q14</div>
          <span class="q-badge__text">更年期はどうやって乗り越えていますか？</span>
        </div>
        <div class="voice-section">
          <p class="voice-section__title">乗り越え方</p>
          <div class="voice-card">
            <p>イライラが止まらず、黒豆茶を毎日飲み、大豆を摂るようにしたら落ち着きました。主治医に「気づいたら過ぎていたという方もたくさんいます。好きなことをして穏やかに」と言われてから、あまり考えないようになりました。</p>
          </div>
          <div class="voice-card">
            <p>推しさんから刺激をもらったり、好きなことにハマる。</p>
          </div>
        </div>
      </section>

      <!-- まとめ -->
      <section class="section">
        <h2 class="about-sle__title">まとめ</h2>
        <p class="about-sle__text">今回は、メンバーから寄せられたお悩みに、14名のSLE当事者が経験で答え合うアンケートでした。ムーンフェイスのマッサージ、自己注射を常温に戻す工夫、人によって大きく違う減薬ペース、産後の発症、伝える／伝えないで分かれる職場での説明――。どれも、同じ病気を生きているからこそ語れるリアルな知恵です。</p>
        <p class="about-sle__text">共通していたのは、「無理をしない」「休めるときに休む」「一人で抱え込まない」という姿勢でした。同じ病気を生きる誰かの工夫が、今しんどさを抱えている方の小さなヒントになりますように。</p>
        <p class="about-sle__text"><small>※掲載した内容はすべて個人の体験です。お薬・治療・妊娠などに関することは、必ず主治医にご相談ください。</small></p>
      </section>

      <section class="category__wrapper bg-white section">
        <div class="category">
          カテゴリー：
          <a href="#">#SLEとは </a>
          <a href="#">#SLEの症状 </a>
          <a href="#">#妊娠 </a>
          <a href="#">#SLEと付き合う </a>
          <a href="#">#くらし </a>
          <a href="#">#ベンリスタ </a>
        </div>
        <p class="up-dated__text">
          作成日 <time datetime="2025-03-30">2025.05.30</time><br>
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
          <a href="<?php echo esc_url( home_url( '/enquete01/' ) ); ?>" class="pics__right-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_anke-to1.webp" alt="あるあるアンケート第3回の結果のサムネイル">
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
