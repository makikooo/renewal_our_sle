# わたしたちのSLE WordPressテーマ（our-sle）

静的HTMLサイト「わたしたちのSLE」をWordPressオリジナルテーマ化したものです。
共通部分（ヘッダー・ハンバーガーメニュー・左右カラム・フッター）を
`header.php` / `footer.php` に集約し、各ページを個別テンプレートに変換しています。

## ファイル構成

```
our-sle/
├─ style.css            … テーマ識別ヘッダー（実スタイルは assets/css/）
├─ functions.php        … CSS/JS読み込み・お問い合わせ送信処理など
├─ header.php           … <head>〜メニュー〜左カラム〜center__column開始
├─ footer.php           … フッター〜右カラム〜スクリプト
├─ front-page.php       … トップページ（旧 index.html）／更新情報は最新投稿を表示
├─ home.php             … 更新情報一覧（投稿ページ。投稿をループ表示）
├─ index.php            … 一覧フォールバック（検索・アーカイブ）
├─ page.php             … 汎用固定ページ（管理画面の本文を表示）
├─ single.php           … ブログ単一記事（投稿）
├─ 404.php              … 404ページ
├─ searchform.php       … 検索フォーム
├─ page-{slug}.php      … 各固定ページ（下表参照）
└─ assets/              … CSS / JS / 画像 / フォント
```

## 導入手順

1. `our-sle` フォルダを WordPress の `wp-content/themes/` に置く。
2. 管理画面 → 外観 → テーマ で「わたしたちのSLE」を有効化。
3. **設定 → パーマリンク** を「投稿名」に設定（`/about-sle/` などのURLにするため）。
4. **固定ページを作成**し、各ページの「スラッグ」を下表に合わせる。
   スラッグが一致すると、対応する `page-{slug}.php` が自動的に使われます。
   （本文は空でOK。デザインはテンプレート側に入っています。）
5. **設定 → 表示設定** → ホームページの表示を「固定ページ」にし、
   フロントページに任意の固定ページを割り当てる（`front-page.php` が使われます）。
6. **外観 → メニュー**は不要です（メニューは `header.php` に固定実装）。

### 作成する固定ページとスラッグ一覧

| スラッグ | ページ | テンプレート |
|---|---|---|
| about-site | このサイトについて | page-about-site.php |
| first | 初めて診断された | page-first.php |
| doubt | 疑いと言われた | page-doubt.php |
| family | ご家族や身近な方 | page-family.php |
| contact | お問い合わせ | page-contact.php |
| menu-sle | SLEについて（一覧） | page-menu-sle.php |
| about-sle | SLEとは | page-about-sle.php |
| symptoms | SLEの症状 | page-symptoms.php |
| complications | 合併症 | page-complications.php |
| diagnosis | 診断基準 | page-diagnosis.php |
| treatment | SLEの治療 | page-treatment.php |
| remission | 社会的寛解 | page-remission.php |
| menu-support | 困っている（一覧） | page-menu-support.php |
| school-job | 仕事・学校 | page-school-job.php |
| kokoro-care | こころ | page-kokoro-care.php |
| sle-life-tips | 付き合うコツ | page-sle-life-tips.php |
| doctor | 医師との信頼関係 | page-doctor.php |
| care-guide | 受診の目安 | page-care-guide.php |
| pregnancy | 妊娠と出産 | page-pregnancy.php |
| faq | よくある質問 | page-faq.php |
| menu-check | 調べたい（一覧） | page-menu-check.php |
| results | 検査結果の見方 | page-results.php |
| aboutmedicine | お薬について | page-aboutmedicine.php |
| system | 医療費の制度 | page-system.php |
| jukyuusyahyou | 受給者票 | page-jukyuusyahyou.php |
| nanbyouteate | 難病手当 | page-nanbyouteate.php |
| tourokusyou | 登録者証 | page-tourokusyou.php |
| menu-communication | 仲間さがし（一覧） | page-menu-communication.php |
| openchat | オープンチャット | page-openchat.php |
| about-me | わたしについて | page-about-me.php |
| menu-enquete | 参加する（一覧） | page-menu-enquete.php |
| enquete01〜03 | アンケート結果 | page-enquete0X.php |
| blogs | 更新情報一覧（**投稿ページに指定**／home.php） | ― |

> 「blogs」ページは固定ページとして作成し、**投稿ページ**に割り当てます（下記「更新情報・ブログの動的化」参照）。
> 個別記事は投稿（home.php → single.php）で表示され、`page-article.php` は不要になりました。

## 仕組みのポイント

- **アセット参照**：テンプレート内は `<?= THEME_URI ?>/assets/...` で出力（`THEME_URI` は
  `functions.php` で `get_template_directory_uri()` を定義）。
- **center__column の id/class**：ページ固有のため、各テンプレート冒頭で
  `$GLOBALS['oursle_center_id']`（必要に応じて `$GLOBALS['oursle_center_class']`）を
  セットしてから `get_header()` を呼びます。
- **内部リンク**：すべて `home_url('/slug/')` に変換済み。外部リンク・アンカーはそのまま。

## お問い合わせフォーム

- `page-contact.php` ＋ `functions.php` の `oursle_handle_contact()` で動作します。
- WordPress nonce によるCSRF対策・ハニーポット・`wp_mail()` 送信を実装。
- 送信先は「設定 → 一般」の管理者メールアドレス。
- 元サイトの「入力→確認→送信」の2段階確認は、1ページ完結型に簡略化しています。
  確認画面を厳密に再現したい場合や到達率を上げたい場合は、
  Contact Form 7 などのプラグイン併用、または SMTP プラグインの導入を推奨します。

## 更新情報・ブログの動的化（設定方法）

更新情報とブログ記事は **WordPress の「投稿」** で管理できるようになりました。

1. **投稿一覧ページを用意**
   - 固定ページ「更新情報一覧」を作成し、スラッグを `blogs` にする。
   - **設定 → 表示設定** → 「投稿ページ」をこの固定ページに割り当てる。
   - → `/blogs/` で `home.php` が投稿一覧を表示します（ページ送り付き）。
2. **カテゴリーで色分け**（任意・トップページと一覧のバッジ色）
   - **投稿 → カテゴリー** で、以下のスラッグのカテゴリーを作成すると色分けされます。
     - `update` … 「更新」（緑系バッジ）
     - `news` … 「お知らせ」
     - `blog` … 「ブログ」
   - これ以外のカテゴリーはカテゴリー名がそのままバッジに表示されます。
3. **記事を投稿**
   - **投稿 → 新規追加** で記事を書く。アイキャッチ画像は記事ページ（`single.php`）の
     先頭に表示されます。カテゴリー／タグは記事下とサイドバーに反映されます。
4. **トップページの「更新情報」欄**
   - `front-page.php` が最新投稿3件を自動表示します（投稿を追加すれば自動反映）。

### コメント機能
- ブログ記事（`single.php`）に WordPress コメントを実装（`comments.php`）。
  お名前・メール・本文の投稿フォーム、返信（スレッド）、ページ送りに対応。
- 表示条件：記事でコメントが「開いている」か、既にコメントがある場合に表示。
- 有効/無効の切替：**設定 → ディスカッション**（サイト全体）や、各記事の編集画面
  「ディスカッション」パネル（個別）で設定できます。
- スレッド返信を使う場合は **設定 → ディスカッション → コメントの階層化** を有効に。
- デザイン用のスタイルは `assets/css/style.css` 末尾の「コメント」セクションに追加済み。

### 記事ナビ（前へ／次へ）でVK外部リンク投稿をスキップ
個別記事の「前へ／次へ」は `oursle_adjacent_post()` を使用し、
**VKプラグインの外部リンク投稿をスキップ**して次の通常記事を表示します。

判別は、その投稿のメタ（カスタムフィールド）キー `vk-ltc-link`（VK/Lightningの
外部リンク投稿が外部URLを保存するキー）で行います。`functions.php` の
`oursle_vk_link_meta_key()` で設定済みです。

```php
function oursle_vk_link_meta_key() {
    return apply_filters( 'oursle_vk_link_meta_key', 'vk-ltc-link' );
}
```

- キー名を変えたい場合はこの戻り値、または
  `add_filter( 'oursle_vk_link_meta_key', fn() => 'キー名' );` で上書きできます。
- キーが空文字のときはスキップ無効になり、標準どおり全記事を辿ります。

### 関連テンプレート
- `home.php` … 更新情報一覧（投稿ページ）
- `single.php` … 個別記事（前後の記事ナビ・カテゴリ／タグ・アイキャッチ・コメント対応）
- `comments.php` … コメント表示・投稿フォーム
- `index.php` … 検索結果・アーカイブのフォールバック一覧
- `front-page.php` … トップの更新情報欄（最新投稿）

## 今後の発展（任意）

- **メニューの動的化**：現在 `header.php` 固定。`wp_nav_menu()` 化も可能ですが、
  アコーディオン＋カテゴリ見出しの独自構造のためカスタムウォーカーが必要です。
- **「よく読まれているページ」の自動化**：現在は固定リンク。アクセス解析や
  人気記事プラグインと連携して動的化することもできます。
