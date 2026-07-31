<?php
/**
 * アンケート結果 第4回 仕事のこと | わたしたちのSLE
 */
$GLOBALS['oursle_center_id'] = 'enquete04';
get_header();
?>
      <!-- ヘッダー -->
      <section class="center__wrapper" aria-label="ページヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/menu-enquete/' ) ); ?>">アンケート</a></li>
          <li class="breadcrumb__item">あるあるアンケート第4回 仕事のこと</li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="わたしたちのSLE">
        </a>
        <h1 class="title">アンケート結果 第4回</h1>
      </section>

      <!-- 概要 -->
      <section class="sec01">
        <p class="subtitle">働き方、職場への伝え方、休むときの支え――。<br>
        SLEと暮らす27名が、「仕事」とのつき合い方を教えてくれました。</p>

        <div class="enquete-summary">
          <p class="enquete-summary__period">📋 実施時期：2026年6月</p>
          <div class="enquete-summary__stats">
            <div>
              <div class="enquete-summary__stat-num">27</div>
              <div class="enquete-summary__stat-label">名が回答</div>
            </div>
            <div>
              <div class="enquete-summary__stat-num">10</div>
              <div class="enquete-summary__stat-label">問の質問</div>
            </div>
          </div>
        </div>
        <p class="about-sle__text">SLEと診断されたあと、仕事をどうするか。続けるか、変えるか、休むか。職場に伝えるか、伝えないか。答えが一つではないからこそ、みんなの選択を並べてみました。<br>
        <small>※あくまで個人の体験です。働き方や制度に関することは、お住まいの自治体や職場の窓口にもご確認ください。</small></p>
      </section>

      <!-- 回答してくれたみなさん -->
      <section class="section">
        <h2 class="about-sle__title">回答してくれたみなさん</h2>
        <div class="chart">
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">40代</span>
              <span class="chart__meta-count">10人（37.0%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill chart__fill--light" style="width:37.0%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">30代</span>
              <span class="chart__meta-count">8人（29.6%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill chart__fill--light" style="width:29.6%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">50代</span>
              <span class="chart__meta-count">5人（18.5%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill chart__fill--light" style="width:18.5%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">20代</span>
              <span class="chart__meta-count">3人（11.1%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill chart__fill--light" style="width:11.1%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">60代</span>
              <span class="chart__meta-count">1人（3.7%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill chart__fill--light" style="width:3.7%;"></div></div>
          </div>
        </div>
        <p class="chart__note">※27人（単一回答）。30〜40代が全体の3分の2を占めました。</p>
      </section>

      <!-- テーマ1 いまの働き方 -->
      <section class="section">
        <h2 class="about-sle__title">いま、どんなふうに働いている？</h2>
      </section>

      <!-- Q1 就労状況 -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q1</div>
          <span class="q-badge__text">今、働いていますか</span>
        </div>
        <div class="chart">
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">フルタイムで働いている</span>
              <span class="chart__meta-count">11人（40.7%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill" style="width:40.7%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">時短・パートなどで働いている</span>
              <span class="chart__meta-count">6人（22.2%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill" style="width:22.2%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">在宅・フリーランスで働いている</span>
              <span class="chart__meta-count">4人（14.8%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill" style="width:14.8%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">求職・療養中</span>
              <span class="chart__meta-count">3人（11.1%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill" style="width:11.1%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">休職中</span>
              <span class="chart__meta-count">2人（7.4%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill" style="width:7.4%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">専業主婦（夫）</span>
              <span class="chart__meta-count">1人（3.7%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill" style="width:3.7%;"></div></div>
          </div>
        </div>
        <p class="chart__note">※27人（単一回答）。なんらかの形で働いている方が8割近くを占めました。</p>
      </section>

      <!-- Q2 雇用形態 -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q2</div>
          <span class="q-badge__text">いまの（または直近の）働き方に近いものは？</span>
        </div>
        <div class="chart">
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">正社員</span>
              <span class="chart__meta-count">13人（50.0%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill chart__fill--blue" style="width:50.0%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">パート・アルバイト</span>
              <span class="chart__meta-count">7人（26.9%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill chart__fill--blue" style="width:26.9%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">在宅・フリーランス・自営</span>
              <span class="chart__meta-count">3人（11.5%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill chart__fill--blue" style="width:11.5%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">契約・派遣社員</span>
              <span class="chart__meta-count">2人（7.7%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill chart__fill--blue" style="width:7.7%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">就労支援</span>
              <span class="chart__meta-count">1人（3.8%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill chart__fill--blue" style="width:3.8%;"></div></div>
          </div>
        </div>
        <p class="chart__note">※26人（単一回答・無回答1件）。正社員がちょうど半数。病気とつき合いながらフルタイムを続けている方が多くいました。</p>
      </section>

      <!-- テーマ2 職場への伝え方 -->
      <section class="section">
        <h2 class="about-sle__title">職場に、どう伝えている？</h2>
      </section>

      <!-- Q3 開示状況 -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q3</div>
          <span class="q-badge__text">職場に病気のことを伝えていますか？</span>
        </div>
        <div class="chart">
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">上司・同僚など、まわりに伝えている</span>
              <span class="chart__meta-count">12人（46.2%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill chart__fill--yellow" style="width:46.2%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">上司など一部の人にだけ伝えている</span>
              <span class="chart__meta-count">10人（38.5%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill chart__fill--yellow" style="width:38.5%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">あえて伝えていない</span>
              <span class="chart__meta-count">4人（15.4%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill chart__fill--yellow" style="width:15.4%;"></div></div>
          </div>
        </div>
        <p class="chart__note">※26人（単一回答・無回答1件）。なんらかの形で伝えている方が8割を超える一方、あえて伝えない選択をしている方もいました。</p>
      </section>

      <!-- Q4 伝え方の工夫 -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q4</div>
          <span class="q-badge__text">「伝え方」で工夫していることはありますか？</span>
        </div>
        <div class="voice-section">
          <p class="voice-section__title">伝え方のいろいろ</p>
          <div class="voice-card">
            <p class="voice-card__tag">面接で先に伝える</p>
            <p>面接時に必ず伝えています。通院でお休みをいただきたいこと、体調不良で突発的な入院があるかもしれないことを、先に話すようにしています。</p>
          </div>
          <div class="voice-card">
            <p class="voice-card__tag">最低限にとどめる</p>
            <p>面接では、月1〜2回通院していること、医師から制限はされていないので勤務に問題がないことだけ話しました。何社か受けて、詳しく伝えすぎると採用側も困ると分かったので、最低限にしています。</p>
          </div>
          <div class="voice-card">
            <p class="voice-card__tag">上司にだけ伝える</p>
            <p>上司には病名と症状を伝えています。通院のときは1週間以上前に休暇を申請するようにしています。</p>
          </div>
          <div class="voice-card">
            <p class="voice-card__tag">休む理由だけ伝える</p>
            <p>周りには休む理由（通院、発熱など）だけを伝えています。つらさを分かってほしい感を出さないように気をつけつつ、「通院で休みます〜」と軽く伝えて、定期的に休むことだけ理解してもらえるようにしています。</p>
          </div>
          <div class="voice-card">
            <p class="voice-card__tag">病名は伏せる</p>
            <p>持病があること、薬を飲んでいることは雑談で話しますが、病名は言っていません。怖そうな病名なので、通院でお休みをいただく分だけ伝えています。</p>
          </div>
          <div class="voice-card">
            <p class="voice-card__tag">できる範囲を伝える</p>
            <p>できることとできないことを、できるだけはっきり自分から伝えるようにしています。以前と同じようには働けなくなったので、自分ができる範囲を先に話しました。理解のある相手で、融通してもらえました。</p>
          </div>
          <div class="voice-card">
            <p class="voice-card__tag">配慮をお願いする</p>
            <p>再燃したら入院になると伝えたうえで、万が一のときに仕事をカバーできる人を同じグループにしてほしいと人事にお願いしました（その方にも根回ししたうえで）。</p>
          </div>
          <p class="symptom-list__note">※復職の際に診断書を添えて伝えた方、異動のときに上司の間で情報を共有してもらった方もいました。「いつ・誰に・どこまで」は、職場によっても人によっても違うようです。</p>
        </div>
      </section>

      <!-- テーマ3 両立の工夫 -->
      <section class="section">
        <h2 class="about-sle__title">仕事と体調の両立のこと</h2>
      </section>

      <!-- Q5 両立の工夫 -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q5</div>
          <span class="q-badge__text">仕事と体調を両立するために工夫していることは？</span>
        </div>
        <div class="chart">
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">無理をしない・頑張りすぎない</span>
              <span class="chart__meta-count">21人（77.8%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill" style="width:77.8%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">通院日を先にスケジュールに入れておく</span>
              <span class="chart__meta-count">19人（70.4%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill" style="width:70.4%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">自分のペースを守れる仕事を選ぶ</span>
              <span class="chart__meta-count">17人（63.0%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill" style="width:63.0%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">有給・時間休をためらわず使う</span>
              <span class="chart__meta-count">13人（48.1%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill" style="width:48.1%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">仕事の日とプライベートの予定を重ねない</span>
              <span class="chart__meta-count">10人（37.0%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill" style="width:37.0%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">在宅勤務・時短など使える制度を使う</span>
              <span class="chart__meta-count">7人（25.9%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill" style="width:25.9%;"></div></div>
          </div>
        </div>
        <p class="chart__note">※27人（複数回答可）。このほか「気持ちの持ち方、考え方を変えた」「休みの日は予定を詰め込みすぎず、横になれる時間をつくる」という声もありました。</p>
      </section>

      <!-- Q6 体調管理 -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q6</div>
          <span class="q-badge__text">働くうえで、体調管理で気をつけていることは？</span>
        </div>
        <div class="chart">
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">睡眠・休養をしっかりとる</span>
              <span class="chart__meta-count">21人（80.8%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill chart__fill--pink" style="width:80.8%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">疲れ・ストレスをためこまない</span>
              <span class="chart__meta-count">20人（76.9%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill chart__fill--pink" style="width:76.9%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">紫外線・日光を避ける</span>
              <span class="chart__meta-count">18人（69.2%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill chart__fill--pink" style="width:69.2%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">感染対策（手洗い・うがい・消毒）</span>
              <span class="chart__meta-count">16人（61.5%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill chart__fill--pink" style="width:61.5%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">薬・注射を忘れない</span>
              <span class="chart__meta-count">15人（57.7%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill chart__fill--pink" style="width:57.7%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">しんどい日は早めに休む・帰る</span>
              <span class="chart__meta-count">15人（57.7%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill chart__fill--pink" style="width:57.7%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">軽い運動を日常的に取り入れている</span>
              <span class="chart__meta-count">1人（3.8%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill chart__fill--pink" style="width:3.8%;"></div></div>
          </div>
        </div>
        <p class="chart__note">※26人（複数回答可・無回答1件）。「病気になったことは変えられないから、今の自分にできることだけ頑張る。高望みしない」という声もありました。</p>
      </section>

      <!-- テーマ4 困ったこと -->
      <section class="section">
        <h2 class="about-sle__title">困ったこと・大変だったこと</h2>
      </section>

      <!-- Q7 困ったこと -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q7</div>
          <span class="q-badge__text">仕事に関して、困ったこと・大変だったことは？</span>
        </div>
        <div class="voice-section">
          <p class="voice-section__title">みんながぶつかった壁</p>
          <div class="voice-card">
            <p>体力がないこと。通勤は満員電車なのでクタクタになります。すぐに疲れてしまうのが堪えます。</p>
          </div>
          <div class="voice-card">
            <p>高熱で休みが続いて仕事が進まないこと、誰かに仕事を任せることがつらかったです。大事な日に休まないといけなかったことが悔しく、周囲にも申し訳なかった。高熱の中、家でリモートで働いた日もありました。子育て中でもあるので、それも相まって大変でした。</p>
          </div>
          <div class="voice-card">
            <p>入院したとき、自分の代わりがいないので困りました。</p>
          </div>
          <div class="voice-card">
            <p>通院で有給休暇がギリギリになり、1日休みたいけれど半日休暇を取って調整していました。</p>
          </div>
          <div class="voice-card">
            <p>感染症にかかりやすく、急な休みが月に1度あるため、責任ある仕事を請け負うのが難しいです。期日に間に合わない可能性を考えてしまいます。</p>
          </div>
          <div class="voice-card">
            <p>パートの中で一番若いので、重い物が持てないとは言い出しにくいです。</p>
          </div>
          <div class="voice-card">
            <p>悪化にともなって、休職・辞職・転職・自宅療養のタイミングに悩みました。</p>
          </div>
          <div class="voice-card">
            <p>仕事がきっかけで症状が悪化するのはつらかったです。再燃の不安にずっと付きまとわれています。</p>
          </div>
          <p class="symptom-list__note">※一方で「在宅なので自分で時間を調整できる」「しんどいときに休める環境なので特に困っていない」という声もありました。働き方と職場の理解で、大変さは大きく変わるようです。</p>
        </div>
      </section>

      <!-- テーマ5 休むときの支え -->
      <section class="section">
        <h2 class="about-sle__title">休むとき、支えになったもの</h2>
      </section>

      <!-- Q8 支えになったもの -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q8</div>
          <span class="q-badge__text">仕事を休む・働けないとき、支えになったものは？</span>
        </div>
        <div class="chart">
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">家族のサポート</span>
              <span class="chart__meta-count">19人（70.4%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill chart__fill--blue" style="width:70.4%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">難病の医療費助成（受給者証）</span>
              <span class="chart__meta-count">13人（48.1%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill chart__fill--blue" style="width:48.1%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">傷病手当金</span>
              <span class="chart__meta-count">7人（25.9%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill chart__fill--blue" style="width:25.9%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">これまでの貯金</span>
              <span class="chart__meta-count">5人（18.5%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill chart__fill--blue" style="width:18.5%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">特に利用していない</span>
              <span class="chart__meta-count">5人（18.5%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill chart__fill--blue" style="width:18.5%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">会社の休職制度</span>
              <span class="chart__meta-count">4人（14.8%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill chart__fill--blue" style="width:14.8%;"></div></div>
          </div>
          <div class="chart__item">
            <div class="chart__meta">
              <span class="chart__meta-label">障害年金</span>
              <span class="chart__meta-count">1人（3.7%）</span>
            </div>
            <div class="chart__track"><div class="chart__fill chart__fill--blue" style="width:3.7%;"></div></div>
          </div>
        </div>
        <p class="chart__note">※27人（複数回答可）。制度よりもまず「家族のサポート」が挙がりました。使える制度があることを知らないまま過ごしている方もいるかもしれません。</p>
      </section>

      <!-- テーマ6 メッセージ -->
      <section class="section">
        <h2 class="about-sle__title">これから仕事を考える仲間へ</h2>
      </section>

      <!-- Q9 メッセージ -->
      <section class="section">
        <div class="q-badge">
          <div class="q-badge__num">Q9</div>
          <span class="q-badge__text">ひとことメッセージをお願いします</span>
        </div>
        <div class="voice-section">
          <p class="voice-section__title">27人からのメッセージ</p>
          <div class="voice-card">
            <p>無理をしない、頑張らない勇気を持つこと。仕事も会社もいくらでもあります。疲れたら休んでいいし、迷って遠回りしてもいい。会社や社会の制度をフル活用して、のんびりマイペースで。</p>
          </div>
          <div class="voice-card">
            <p>いろいろ予防しないといけないこと、今までと違うことが増えて、がんばらないとと思って疲れてしまいました。1年ほど経って、7割くらいの力で無理をしないことを自分に許せてから、少し気持ちが楽になりました。自分のことを大事にしてくださいね。</p>
          </div>
          <div class="voice-card">
            <p>自分の限界を自分でわかっている、というのは強みの一つ。自分ができる範囲でやればいいと思います。</p>
          </div>
          <div class="voice-card">
            <p>容易なことではないかもしれませんが、正直に病状を伝えて、それを受け入れてもらえる職場で働くことが、長い目で見たときにもっとも大切かなと思っています。</p>
          </div>
          <div class="voice-card">
            <p>以前は病名を伝えないことを心苦しく思っていましたが、持病があったり体調が悪化することは誰にでもあり得ること。体調が安定しているときは「もしかしたら」を心配しすぎるより、困ってから相談できる環境かどうかを見極めて働いてみるのも良いと思います。</p>
          </div>
          <div class="voice-card">
            <p>一番に、自分の身体が無理のない仕事を選ぶこと。そして病気のことを伝えられる人が上司に一人いたら心強いです。</p>
          </div>
          <div class="voice-card">
            <p>体調には山谷ありますが、気長に付き合っています。一緒に、頑張らないように頑張りましょう。持続可能が一番です。</p>
          </div>
          <div class="voice-card">
            <p>合わないところで無理しない！ 過度な疲れやストレスがたまらない仕事、理解のある職場環境にマッチングしますように。</p>
          </div>
          <p class="symptom-list__note">※「同じ立場になった人にしか、心から理解することは難しい。だからこそ、理解し合えるコミュニティがあると少しほっとできる」という声もありました。</p>
        </div>
      </section>

      <!-- まとめ -->
      <section class="section">
        <h2 class="about-sle__title">まとめ</h2>
        <p class="about-sle__text">今回は「仕事」をテーマに、27名が答えてくれました。なんらかの形で働いている方が8割近く、正社員はちょうど半数。病気とつき合いながら働き続けている人が、思っていたよりずっと多いことが分かりました。</p>
        <p class="about-sle__text">職場への伝え方は、「まわりに伝えている」「一部の人にだけ」「あえて伝えていない」で分かれました。共通していたのは、伝える／伝えないを自分で選んでいるということ。面接で先に話す人、通院で休む分だけ伝える人、病名は出さない人――どれも、その職場で働き続けるための選択でした。</p>
        <p class="about-sle__text">両立の工夫で一番多かったのは「無理をしない・頑張りすぎない」。体調管理では「睡眠・休養をしっかりとる」。そして休むときに支えになったものの一位は、制度ではなく「家族のサポート」でした。傷病手当金や休職制度を挙げた方は多くありません。使える制度を知っておくことも、これから働き方を考えるときの助けになりそうです。</p>
        <p class="about-sle__text"><small>※掲載した内容はすべて個人の体験です。制度の利用条件や申請方法は、お住まいの自治体・加入している健康保険・職場の窓口にご確認ください。</small></p>
      </section>

      <section class="category__wrapper bg-white section">
        <div class="category">
          タグ：
          <a href="<?php echo esc_url( oursle_tag_url( 'SLEと付き合う' ) ); ?>">#SLEと付き合う </a>
          <a href="<?php echo esc_url( oursle_tag_url( 'くらし' ) ); ?>">#くらし </a>
          <a href="<?php echo esc_url( oursle_tag_url( 'SLEとは' ) ); ?>">#SLEとは </a>
        </div>
        <p class="up-dated__text">
          作成日 <time datetime="2026-07-31">2026.07.31</time><br>
          更新日 <time datetime="2026-07-31">2026.07.31</time>
        </p>
      </section>

      <img class="bg_blue_victor" src="<?= THEME_URI ?>/assets/images/background/bg-blue02.webp" alt="">

      <section class="pics bg-blue">
        <h2 class="pics__title">おすすめのページ</h2>
        <div class="pics__links">
          <a href="<?php echo esc_url( home_url( '/enquete03/' ) ); ?>" class="pics__left-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_anke-to3.webp" alt="あるあるアンケート第3回の結果のサムネイル">
            <div class="button">
              <span>つづきを読む</span>
              <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
            </div>
          </a>
          <a href="<?php echo esc_url( home_url( '/enquete02/' ) ); ?>" class="pics__right-link">
            <img class="thumbnail" src="<?= THEME_URI ?>/assets/images/thumbnails/thumbnail_anke-to2.webp" alt="あるあるアンケート第2回の結果のサムネイル">
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
