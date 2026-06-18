<?php
/**
 * わたしたちのSLE テーマ functions
 *
 * @package oursle
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // 直接アクセス禁止
}

/**
 * テーマURI（assets 参照用ショートカット）。
 * テンプレート内で <?= THEME_URI ?>/assets/... のように使います。
 */
if ( ! defined( 'THEME_URI' ) ) {
	define( 'THEME_URI', get_template_directory_uri() );
}

/**
 * テーマの基本サポート設定
 */
function oursle_setup() {
	// <title> を WordPress に出力させる
	add_theme_support( 'title-tag' );

	// アイキャッチ画像
	add_theme_support( 'post-thumbnails' );

	// HTML5 マークアップ
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);

	// 自動フィードリンク
	add_theme_support( 'automatic-feed-links' );

	// ナビゲーションメニュー（任意。デザイン上の主メニューは header.php に固定実装）
	register_nav_menus(
		array(
			'primary' => 'メインメニュー',
		)
	);
}
add_action( 'after_setup_theme', 'oursle_setup' );

/**
 * CSS / JavaScript の読み込み
 */
function oursle_enqueue_assets() {
	$ver = '1.0.0';

	// リセットCSS
	wp_enqueue_style( 'oursle-reset', THEME_URI . '/assets/css/reset.css', array(), $ver );

	// メインCSS（reset の後に読み込む）
	wp_enqueue_style( 'oursle-style', THEME_URI . '/assets/css/style.css', array( 'oursle-reset' ), $ver );

	// テーマ識別用 style.css（中身は空。WordPress 慣習として読み込む）
	wp_enqueue_style( 'oursle-theme', get_stylesheet_uri(), array( 'oursle-style' ), $ver );

	// Font Awesome（CDN）
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', array(), '6.5.0' );

	// メインJS（フッターで defer 読み込み）
	wp_enqueue_script( 'oursle-main', THEME_URI . '/assets/js/main.js', array(), $ver, array( 'in_footer' => true ) );

	// スクロール時のフェードアップ表示（全ページ・フッター読み込み）
	wp_enqueue_script( 'oursle-scroll-reveal', THEME_URI . '/assets/js/scroll-reveal.js', array(), $ver, array( 'in_footer' => true ) );

	// 閲覧履歴の記録＋トップの「いま、気になること」おすすめ強調（全ページ）。
	// 履歴は全ページで記録し、強調はトップページのみ動作する。
	wp_enqueue_script( 'oursle-concern-recommend', THEME_URI . '/assets/js/concern-recommend.js', array(), $ver, array( 'in_footer' => true ) );

	// ローディング演出はトップページのみ（head で先読み）
	if ( is_front_page() ) {
		wp_enqueue_script( 'oursle-loading', THEME_URI . '/assets/js/loading.js', array(), $ver, false );

		// Cookie同意バナー（トップページのみ）
		wp_enqueue_script( 'oursle-cookie-consent', THEME_URI . '/assets/js/cookie-consent.js', array(), $ver, array( 'in_footer' => true ) );
	}

	// 返信（スレッド）コメント用スクリプト
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Google reCAPTCHA v2（お問い合わせページで、キーが設定されているときだけ）
	if ( is_page( 'contact' ) && oursle_recaptcha_enabled() ) {
		wp_enqueue_script( 'google-recaptcha', 'https://www.google.com/recaptcha/api.js', array(), null, array( 'in_footer' => true ) );
	}
}
add_action( 'wp_enqueue_scripts', 'oursle_enqueue_assets' );

/**
 * <title> の区切り文字をサイトに合わせる
 */
function oursle_title_separator() {
	return '|';
}
add_filter( 'document_title_separator', 'oursle_title_separator' );

/**
 * SEO 出力（meta description / OGP / Twitter Card / canonical / 構造化データ）。
 * 実体は inc/seo.php に分離している。
 */
require_once get_template_directory() . '/inc/seo.php';

/**
 * ブログ（更新情報一覧）のURLを返す。
 * 「設定 → 表示設定」で投稿ページが指定されていればそのURL、
 * 無ければスラッグ blogs の固定ページ、いずれも無ければトップを返す。
 *
 * @return string
 */
function oursle_blog_url() {
	$page_for_posts = (int) get_option( 'page_for_posts' );
	if ( $page_for_posts ) {
		$url = get_permalink( $page_for_posts );
		if ( $url ) {
			return $url;
		}
	}

	$blogs = get_page_by_path( 'blogs' );
	if ( $blogs ) {
		return get_permalink( $blogs );
	}

	return home_url( '/' );
}

/**
 * VKプラグインの「外部リンク投稿」を判別するためのメタキー。
 * このメタが設定された投稿は、記事ナビ（前へ／次へ）でスキップされます。
 * VK（Lightning）の外部リンク投稿は外部URLを 'vk-ltc-link' に保存します。
 *
 * @return string メタキー（空文字ならスキップ無効）
 */
function oursle_vk_link_meta_key() {
	// VK（Lightning）の外部リンク投稿が外部URLを保存するメタキー。
	return apply_filters( 'oursle_vk_link_meta_key', 'vk-ltc-link' );
}

/**
 * その投稿が「VK外部リンク投稿」（記事ナビでスキップ対象）かどうか。
 *
 * @param int|WP_Post|null $post 投稿。
 * @return bool
 */
function oursle_is_vk_external_post( $post = null ) {
	$post = get_post( $post );
	if ( ! $post ) {
		return false;
	}
	$key = oursle_vk_link_meta_key();
	if ( '' === $key ) {
		return false;
	}
	$value = get_post_meta( $post->ID, $key, true );
	return ! empty( $value );
}

/**
 * 「VK外部リンク投稿」をスキップした隣接記事を返す。
 * 標準の get_previous_post()/get_next_post() の代わりに使います。
 *
 * @param bool $previous true=前の記事（古い方）、false=次の記事（新しい方）。
 * @return WP_Post|null
 */
function oursle_adjacent_post( $previous = true ) {
	$current = get_post();
	if ( ! $current ) {
		return null;
	}

	$args = array(
		'post_type'           => $current->post_type,
		'post_status'         => 'publish',
		'posts_per_page'      => 1,
		'orderby'             => 'date',
		'order'               => $previous ? 'DESC' : 'ASC',
		'ignore_sticky_posts' => true,
		'post__not_in'        => array( $current->ID ),
		'date_query'          => array(
			array(
				( $previous ? 'before' : 'after' ) => $current->post_date,
				'inclusive'                        => false,
			),
		),
		'no_found_rows'       => true,
	);

	// VK外部リンク投稿（指定メタキーが非空）を除外する
	$key = oursle_vk_link_meta_key();
	if ( '' !== $key ) {
		$args['meta_query'] = array(
			'relation' => 'OR',
			array(
				'key'     => $key,
				'compare' => 'NOT EXISTS',
			),
			array(
				'key'     => $key,
				'value'   => '',
				'compare' => '=',
			),
		);
	}

	$query = new WP_Query( $args );
	$found = $query->have_posts() ? $query->posts[0] : null;
	wp_reset_postdata();
	return $found;
}

/**
 * カテゴリー1件から更新情報バッジ（class と ラベル）を返す。
 *
 * @param WP_Term|null $cat カテゴリー。
 * @return array array( 'class' => 'is-xxx', 'label' => 'ラベル' )
 */
function oursle_news_badge_by_category( $cat = null ) {
	if ( ! $cat instanceof WP_Term ) {
		return array(
			'class' => 'is-blog',
			'label' => 'ブログ',
		);
	}

	// スラッグでマッチさせるマップ
	$map = array(
		'update' => array( 'is-update', '更新情報' ),
		'news'   => array( 'is-sleinfo', 'SLE情報' ),
		'blog'   => array( 'is-aboutme', 'わたしのこと' ),
	);

	// カテゴリー名でマッチさせるマップ（スラッグが日本語/任意の場合に対応）
	$by_name = array(
		'更新情報'     => array( 'is-update',  '更新情報' ),
		'わたしのこと' => array( 'is-aboutme', 'わたしのこと' ),
		'SLE情報'      => array( 'is-sleinfo', 'SLE情報' ),
	);

	if ( isset( $map[ $cat->slug ] ) ) {
		return array(
			'class' => $map[ $cat->slug ][0],
			'label' => $map[ $cat->slug ][1],
		);
	}

	if ( isset( $by_name[ $cat->name ] ) ) {
		return array(
			'class' => $by_name[ $cat->name ][0],
			'label' => $by_name[ $cat->name ][1],
		);
	}

	return array(
		'class' => 'is-blog',
		'label' => $cat->name,
	);
}

/**
 * 投稿カテゴリーから更新情報バッジ（class と ラベル）を返す。
 * カテゴリーのスラッグを update / news / blog に合わせると色分けされます。
 *
 * @param int|WP_Post|null $post 投稿。省略時は現在の投稿。
 * @return array array( 'class' => 'is-xxx', 'label' => 'ラベル' )
 */
function oursle_news_badge( $post = null ) {
	$cats = get_the_category( $post ? get_post( $post )->ID : null );
	foreach ( $cats as $cat ) {
		$badge = oursle_news_badge_by_category( $cat );
		if ( 'is-blog' !== $badge['class'] ) {
			return $badge;
		}
	}

	// マッチしなければ最初のカテゴリー名（無ければ「ブログ」）
	$label = ! empty( $cats ) ? $cats[0]->name : 'ブログ';
	return array(
		'class' => 'is-blog',
		'label' => $label,
	);
}

/**
 * ページ／投稿の閲覧数を記録する。
 * 単一ページ表示のたびに post meta 'oursle_views' を 1 増やす。
 * トップの「いま、気になること」のおすすめ（人気ページ順）に使う。
 *
 * ・管理画面／単一ページ以外／プレビューは対象外
 * ・ログイン中（編集者など自分のアクセス）は集計しない
 * ・同じ人の連続表示でふくらまないよう、Cookieで6時間あけて数える
 */
function oursle_count_views() {
	if ( is_admin() || ! is_singular() || is_preview() || is_user_logged_in() ) {
		return;
	}
	// Cookie利用に同意した閲覧者のみ集計する（同意バナーで '1' を保存）。
	// 未選択・拒否のあいだは記録しない。
	if ( ! isset( $_COOKIE['oursle_consent'] ) || '1' !== $_COOKIE['oursle_consent'] ) {
		return;
	}
	$post_id = get_queried_object_id();
	if ( ! $post_id ) {
		return;
	}
	$cookie = 'oursle_v_' . $post_id;
	if ( isset( $_COOKIE[ $cookie ] ) ) {
		return;
	}
	if ( ! headers_sent() ) {
		setcookie( $cookie, '1', time() + 6 * HOUR_IN_SECONDS, COOKIEPATH ? COOKIEPATH : '/' );
	}
	$count = (int) get_post_meta( $post_id, 'oursle_views', true );
	update_post_meta( $post_id, 'oursle_views', $count + 1 );
}
add_action( 'wp', 'oursle_count_views' );

/**
 * 固定ページ（スラッグ指定）のIDを返す。スラッグ単位でキャッシュする。
 * 「いま、気になること」の各タグから繰り返し呼ばれるため。
 *
 * @param string $slug 固定ページのスラッグ（例 'symptoms'）。
 * @return int 投稿ID（見つからなければ 0）。
 */
function oursle_page_id_by_slug( $slug ) {
	static $cache = array();
	if ( array_key_exists( $slug, $cache ) ) {
		return $cache[ $slug ];
	}
	$pages = get_posts(
		array(
			'name'           => $slug,
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'posts_per_page' => 1,
			'no_found_rows'  => true,
			'fields'         => 'ids',
		)
	);
	$cache[ $slug ] = ! empty( $pages ) ? (int) $pages[0] : 0;
	return $cache[ $slug ];
}

/**
 * 固定ページ（スラッグ指定）の閲覧数を返す。
 * 「いま、気になること」のおすすめ強調（人気ページ順）に使う。
 *
 * @param string $slug 固定ページのスラッグ。
 * @return int 閲覧数（取得できなければ 0）。
 */
function oursle_views_by_slug( $slug ) {
	$id = oursle_page_id_by_slug( $slug );
	return $id ? (int) get_post_meta( $id, 'oursle_views', true ) : 0;
}

/**
 * 固定ページ（スラッグ指定）の正しいパーマリンクを返す。
 * 子ページ（/menu-sle/symptoms/ 等）でも正確なURLになり、
 * home_url('/slug/') 直リンクで起きる301リダイレクトを避けられる。
 *
 * @param string $slug 固定ページのスラッグ。
 * @return string URL（ページが無ければ home_url('/slug/') にフォールバック）。
 */
function oursle_url_by_slug( $slug ) {
	$id  = oursle_page_id_by_slug( $slug );
	$url = $id ? get_permalink( $id ) : '';
	return $url ? $url : home_url( '/' . $slug . '/' );
}

/**
 * タグの台帳：固定ページ（スラッグ） => そのページの「タグ：」に並ぶラベル。
 *
 * 各ページテンプレートの <div class="category"> に書かれている #タグと
 * 必ず一致させてください（ここが「タグ → 関連ページ一覧」の元データです）。
 * ページのタグを増減したら、この配列も合わせて更新します。
 *
 * @return array スラッグ => ラベル配列。
 */
function oursle_tag_index() {
	return array(
		'about-me'      => array( '自己紹介', 'オープンチャット', '仲間さがし' ),
		'symptoms'      => array( 'SLEについて', 'SLEの症状', '全身', '皮膚', '粘膜', '筋肉', '関節', '腎臓', '肺', '心臓', '神経', '血液' ),
		'system'        => array( '高額療養費', '制度', '指定難病の医療費助成', '自立支援医療', '医療費控除', '確定申告', '傷病手当' ),
		'aboutmedicine' => array( 'お薬', 'ステロイド', '免疫抑制剤', '生物学的製剤', 'プラケニル', '骨粗しょう症', '外用薬' ),
		'treatment'     => array( 'SLEの治療', 'ステロイド', 'グリオコルチコイド', '免疫抑制剤', '免疫調整剤', '治療方法' ),
		'enquete02'     => array( 'SLEとは', '免疫', '膠原病' ),
		'faq'           => array( '妊娠', '出産', '再燃', '通院', '受信サイン' ),
		'remission'     => array( 'SLEについて', 'SLEの症状', '全身', '皮膚', '粘膜', '筋肉', '関節', '腎臓', '肺', '心臓', '神経', '血液', 'SLEとは', '免疫', '膠原病', '発熱', '関節痛', '皮疹' ),
		'doctor'        => array( '医師との信頼関係', '通院' ),
		'jukyuusyahyou' => array( '特定疾患受給者票', '難病', '減免' ),
		'care-guide'    => array( 'SLEの症状', '通院' ),
		'results'       => array( '検査結果', '血液検査', '尿検査', '免疫学的検査', '補体', '炎症反応', '再燃の指標' ),
		'tourokusyou'   => array( '特定疾患受給者票', '市区町村' ),
		'diagnosis'     => array( 'SLEについて', 'SLEの症状', '全身', '皮膚', '粘膜', '筋肉', '関節', '腎臓', '肺', '心臓', '神経', '血液' ),
		'enquete03'     => array( 'SLEとは', 'SLEの症状', '妊娠', 'SLEと付き合う', 'くらし', 'ベンリスタ' ),
		'about-sle'     => array( 'SLEとは', '免疫', '膠原病', '発熱', '関節痛', '皮疹' ),
		'complications' => array( 'SLEについて', '合併症', 'ループス腎炎', '血栓', '中枢神経', '心臓・肺', '血液', '感染症', '骨' ),
		'pregnancy'     => array( '妊娠', '出産', 'SLEの症状' ),
		'nanbyouteate'  => array( '難病手当', '市区町村' ),
		'sle-life-tips' => array( '症状', '生活のコツ' ),
		'school-job'    => array( '学校', '仕事', '通院', 'オープン' ),
		'kokoro-care'   => array( 'こころ', 'メンタル' ),
		'enquete01'     => array( 'SLEとは', '免疫', '膠原病' ),
		'openchat'      => array( 'オープンチャット', '仲間さがし' ),
	);
}

/**
 * 指定したタグ（ラベル）を含む固定ページのスラッグを返す。
 *
 * @param string $label タグのラベル（先頭の「#」なし）。
 * @return array スラッグの配列（台帳の並び順）。
 */
function oursle_pages_for_tag( $label ) {
	$slugs = array();
	foreach ( oursle_tag_index() as $slug => $labels ) {
		if ( in_array( $label, $labels, true ) ) {
			$slugs[] = $slug;
		}
	}
	return $slugs;
}

/**
 * 台帳に登場するすべてのタグラベルを、初出順・重複なしで返す。
 *
 * @return array ラベルの配列。
 */
function oursle_all_tag_labels() {
	$labels = array();
	foreach ( oursle_tag_index() as $tags ) {
		foreach ( $tags as $label ) {
			if ( ! in_array( $label, $labels, true ) ) {
				$labels[] = $label;
			}
		}
	}
	return $labels;
}

/**
 * タグ一覧ページ（/tags/?t=ラベル）のURLを返す。
 *
 * @param string $label タグのラベル（先頭の「#」なし）。
 * @return string URL。
 */
function oursle_tag_url( $label ) {
	return home_url( '/tags/' ) . '?t=' . rawurlencode( $label );
}

/**
 * タグ一覧の固定ページ（スラッグ 'tags'）を一度だけ自動作成する。
 * テンプレートは page-tags.php が使われる。
 */
function oursle_ensure_tags_page() {
	if ( get_option( 'oursle_tags_page_created' ) ) {
		return;
	}
	if ( ! get_page_by_path( 'tags' ) ) {
		wp_insert_post(
			array(
				'post_title'   => 'タグ',
				'post_name'    => 'tags',
				'post_status'  => 'publish',
				'post_type'    => 'page',
				'post_content' => '',
			)
		);
	}
	update_option( 'oursle_tags_page_created', 1 );
}
add_action( 'admin_init', 'oursle_ensure_tags_page' );

/**
 * center__column の id をテンプレートから受け取るヘルパー。
 * 各ページテンプレートで get_header() の前に
 * $GLOBALS['oursle_center_id'] = 'xxxx'; とセットします。
 */
function oursle_center_id() {
	$id = isset( $GLOBALS['oursle_center_id'] ) ? $GLOBALS['oursle_center_id'] : 'main_content';
	return esc_attr( $id );
}

/**
 * Google reCAPTCHA v2（チェックボックス）用のヘルパー。
 *
 * サイトキー／シークレットキーは mail-config.php に
 *   'RECAPTCHA_SITE_KEY'   => '...',
 *   'RECAPTCHA_SECRET_KEY' => '...',
 * の形で記述します（Git 管理外）。両方そろっているときだけ認証が有効になり、
 * 未設定ならフォームは従来どおり（ハニーポット＋日本語必須＋nonce）動きます。
 */
function oursle_recaptcha_site_key() {
	$c = oursle_smtp_config();
	return isset( $c['RECAPTCHA_SITE_KEY'] ) ? (string) $c['RECAPTCHA_SITE_KEY'] : '';
}

function oursle_recaptcha_secret_key() {
	$c = oursle_smtp_config();
	return isset( $c['RECAPTCHA_SECRET_KEY'] ) ? (string) $c['RECAPTCHA_SECRET_KEY'] : '';
}

/** サイトキー・シークレットキーが両方そろっていれば true。 */
function oursle_recaptcha_enabled() {
	return '' !== oursle_recaptcha_site_key() && '' !== oursle_recaptcha_secret_key();
}

/**
 * reCAPTCHA のトークンを Google で検証する。
 *
 * @param string $token フォームから送られる g-recaptcha-response の値。
 * @return bool 成功したら true。
 */
function oursle_recaptcha_verify_response( $token ) {
	$token = trim( (string) $token );
	if ( '' === $token ) {
		return false;
	}
	$response = wp_remote_post(
		'https://www.google.com/recaptcha/api/siteverify',
		array(
			'timeout' => 8,
			'body'    => array(
				'secret'   => oursle_recaptcha_secret_key(),
				'response' => $token,
				'remoteip' => isset( $_SERVER['REMOTE_ADDR'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REMOTE_ADDR'] ) ) : '',
			),
		)
	);
	if ( is_wp_error( $response ) ) {
		return false;
	}
	$data = json_decode( wp_remote_retrieve_body( $response ), true );
	return ! empty( $data['success'] );
}

/**
 * reCAPTCHA 通過の証となる署名トークン。
 * 入力画面で reCAPTCHA に成功したら発行し、確認画面の hidden で引き継ぎ、
 * 送信ステップで検証する（reCAPTCHA トークン自体は使い捨て・短命のため）。
 */
function oursle_recaptcha_pass_token( $time ) {
	return hash_hmac( 'sha256', 'recaptcha-passed|' . $time, wp_salt( 'auth' ) . 'oursle_recaptcha' );
}

/** 通過トークンが正しく、30分以内かを検証する。 */
function oursle_recaptcha_pass_verify( $token, $time ) {
	if ( ! ctype_digit( (string) $time ) ) {
		return false;
	}
	if ( time() - (int) $time > 1800 ) {
		return false; // 30分経過した通過証は無効
	}
	return hash_equals( oursle_recaptcha_pass_token( (int) $time ), (string) $token );
}

/**
 * お問い合わせフォームの送信処理
 * contact 固定ページ（スラッグ "contact"）で POST されたときに動作します。
 * 結果は $GLOBALS['oursle_contact'] に格納し、page-contact.php で表示します。
 */
function oursle_handle_contact() {
	$GLOBALS['oursle_contact'] = array(
		'errors' => array(),
		'old'    => array(),
		'sent'   => false,
		'mode'   => 'input', // input | confirm | sent
	);

	if ( ! is_page( 'contact' ) ) {
		return;
	}
	if ( empty( $_SERVER['REQUEST_METHOD'] ) || 'POST' !== $_SERVER['REQUEST_METHOD'] ) {
		return;
	}
	// nonce 検証（CSRF対策）
	if ( ! isset( $_POST['oursle_contact_nonce'] ) || ! wp_verify_nonce( $_POST['oursle_contact_nonce'], 'oursle_contact' ) ) {
		$GLOBALS['oursle_contact']['errors']['_'] = '送信に失敗しました。もう一度お試しください。';
		return;
	}
	// ハニーポット（botがURL欄に入力したら無視）
	if ( ! empty( $_POST['website'] ) ) {
		return;
	}

	// フィールド名は contact_ 接頭辞を付ける。
	// WordPress の予約クエリ変数（name 等）と衝突すると、POST 時に WP が
	// その値のスラッグの投稿を探して 404 になるため。
	$name    = isset( $_POST['contact_name'] ) ? sanitize_text_field( wp_unslash( $_POST['contact_name'] ) ) : '';
	$email   = isset( $_POST['contact_email'] ) ? sanitize_email( wp_unslash( $_POST['contact_email'] ) ) : '';
	$title   = isset( $_POST['contact_title'] ) ? sanitize_text_field( wp_unslash( $_POST['contact_title'] ) ) : '';
	$message = isset( $_POST['contact_message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['contact_message'] ) ) : '';

	// reCAPTCHA 関連の値。
	// g-recaptcha-response … 入力画面のチェックボックスから送られるトークン。
	// recaptcha_pass / recaptcha_time … 確認画面へ引き継ぐ「通過証」と発行時刻。
	$recaptcha_response = isset( $_POST['g-recaptcha-response'] ) ? wp_unslash( $_POST['g-recaptcha-response'] ) : '';
	$recaptcha_pass     = isset( $_POST['contact_recaptcha_pass'] ) ? sanitize_text_field( wp_unslash( $_POST['contact_recaptcha_pass'] ) ) : '';
	$recaptcha_time     = isset( $_POST['contact_recaptcha_time'] ) ? sanitize_text_field( wp_unslash( $_POST['contact_recaptcha_time'] ) ) : '';

	$old = compact( 'name', 'email', 'title', 'message', 'recaptcha_pass', 'recaptcha_time' );
	$GLOBALS['oursle_contact']['old'] = $old;

	// どのステップから送信されたか（confirm=確認画面へ / send=実際に送信 / edit=入力へ戻る）
	$step = isset( $_POST['oursle_step'] ) ? sanitize_text_field( wp_unslash( $_POST['oursle_step'] ) ) : 'confirm';

	// 確認画面の「修正する」→ 入力画面へ戻す（バリデーションはしない）
	if ( 'edit' === $step ) {
		$GLOBALS['oursle_contact']['mode'] = 'input';
		return;
	}

	$errors = array();

	if ( '' === $name ) {
		$errors['name'] = 'お名前を入力してください。';
	}
	if ( '' === $email ) {
		$errors['email'] = 'メールアドレスを入力してください。';
	} elseif ( ! is_email( $email ) ) {
		$errors['email'] = 'メールアドレスの形式が正しくありません。';
	}
	if ( '' === $message ) {
		$errors['message'] = 'メッセージを入力してください。';
	} elseif ( ! preg_match( '/[\x{3040}-\x{309F}\x{30A0}-\x{30FF}\x{4E00}-\x{9FFF}\x{FF66}-\x{FF9D}]/u', $message ) ) {
		// 日本語（ひらがな・カタカナ・漢字・半角カナ）を含まない＝英文のみはエラー（スパム対策）
		$errors['message'] = 'メッセージは日本語でご入力ください。';
	}

	// reCAPTCHA の検証（キーが設定されているときだけ）。
	// 入力→確認では Google にトークンを問い合わせ、確認→送信では通過証を検証する。
	if ( oursle_recaptcha_enabled() ) {
		if ( 'send' === $step ) {
			if ( ! oursle_recaptcha_pass_verify( $recaptcha_pass, $recaptcha_time ) ) {
				$errors['recaptcha'] = '認証の有効期限が切れました。お手数ですが、もう一度ご確認のうえ送信してください。';
			}
		} elseif ( '' === trim( (string) $recaptcha_response ) ) {
			$errors['recaptcha'] = '「私はロボットではありません」にチェックを入れてください。';
		} elseif ( ! oursle_recaptcha_verify_response( $recaptcha_response ) ) {
			$errors['recaptcha'] = '認証に失敗しました。もう一度お試しください。';
		}
	}

	$GLOBALS['oursle_contact']['errors'] = $errors;

	// 入力エラーがあれば入力画面に戻す
	if ( ! empty( $errors ) ) {
		$GLOBALS['oursle_contact']['mode'] = 'input';
		return;
	}

	// 確認画面の表示（まだ送信しない）
	if ( 'send' !== $step ) {
		// reCAPTCHA を通過した証として署名トークンを発行し、確認画面へ引き継ぐ。
		if ( oursle_recaptcha_enabled() ) {
			$pass_time = time();
			$GLOBALS['oursle_contact']['old']['recaptcha_time'] = (string) $pass_time;
			$GLOBALS['oursle_contact']['old']['recaptcha_pass'] = oursle_recaptcha_pass_token( $pass_time );
		}
		$GLOBALS['oursle_contact']['mode'] = 'confirm';
		return;
	}

	// メール送信
	$smtp    = oursle_smtp_config();
	$to      = ! empty( $smtp['ADMIN_EMAIL'] ) ? $smtp['ADMIN_EMAIL'] : get_option( 'admin_email' );
	$subject = '[お問い合わせ] ' . ( '' !== $title ? $title : '（件名なし）' );
	$body    = "お名前: {$name}\n";
	$body   .= "メール: {$email}\n";
	$body   .= "件名: {$title}\n\n";
	$body   .= "メッセージ:\n{$message}\n";
	$headers = array(
		'Content-Type: text/plain; charset=UTF-8',
		'Reply-To: ' . $name . ' <' . $email . '>',
	);

	$GLOBALS['oursle_contact']['sent'] = wp_mail( $to, $subject, $body, $headers );
	if ( $GLOBALS['oursle_contact']['sent'] ) {
		$GLOBALS['oursle_contact']['mode'] = 'sent';

		// 送信者本人への自動返信（控え）メール。
		// 管理者宛の送信が成功したときだけ送る。失敗しても完了画面はそのまま。
		$site_name  = ! empty( $smtp['SITE_NAME'] ) ? $smtp['SITE_NAME'] : get_bloginfo( 'name' );
		$auto_to    = $email;
		$auto_subj  = '【' . $site_name . '】お問い合わせを受け付けました';
		$auto_body  = "{$name} 様\n\n";
		$auto_body .= "この度はお問い合わせいただき、ありがとうございます。\n";
		$auto_body .= "以下の内容で受け付けいたしました。\n";
		$auto_body .= "内容を確認のうえ、5日以内（土日祝日以外）にご返信を心がけております。\n\n";
		$auto_body .= "──────────────────\n";
		$auto_body .= "お名前: {$name}\n";
		$auto_body .= "メール: {$email}\n";
		$auto_body .= "件名: {$title}\n\n";
		$auto_body .= "メッセージ:\n{$message}\n";
		$auto_body .= "──────────────────\n\n";
		$auto_body .= "※このメールは送信専用の自動返信です。ご返信いただいてもお答えできない場合があります。\n";
		$auto_body .= "※心当たりのない場合は、お手数ですがこのメールを破棄してください。\n\n";
		$auto_body .= $site_name . "\n";
		// 自動返信への返信は管理者へ届くようにする
		$auto_headers = array(
			'Content-Type: text/plain; charset=UTF-8',
			'Reply-To: ' . $to,
		);
		wp_mail( $auto_to, $auto_subj, $auto_body, $auto_headers );
	} else {
		// 送信失敗時は確認画面のまま再送信できるようにする
		$GLOBALS['oursle_contact']['mode']        = 'confirm';
		$GLOBALS['oursle_contact']['errors']['_'] = '送信に失敗しました。時間をおいて再度お試しください。';
	}
}
add_action( 'template_redirect', 'oursle_handle_contact' );

/**
 * SMTP 接続情報を読み込む。
 * テーマ直下の mail-config.php（Git管理外）に配列で記述する。
 * ファイルが無い場合は空配列を返し、wp_mail() は既定（PHP mail()）のまま動く。
 *
 * @return array
 */
function oursle_smtp_config() {
	static $config = null;
	if ( null !== $config ) {
		return $config;
	}
	$file   = get_template_directory() . '/mail-config.php';
	$config = is_readable( $file ) ? (array) require $file : array();
	return $config;
}

/**
 * wp_mail() を SMTP 送信に切り替える。
 * mail-config.php に SMTP_HOST / SMTP_USER / SMTP_PASS が揃っているときだけ有効。
 *
 * @param PHPMailer\PHPMailer\PHPMailer $phpmailer
 */
function oursle_configure_smtp( $phpmailer ) {
	$c = oursle_smtp_config();
	if ( empty( $c['SMTP_HOST'] ) || empty( $c['SMTP_USER'] ) || empty( $c['SMTP_PASS'] ) ) {
		return; // 設定が無ければ何もしない
	}
	$phpmailer->isSMTP();
	$phpmailer->Host       = $c['SMTP_HOST'];
	$phpmailer->Port       = isset( $c['SMTP_PORT'] ) ? (int) $c['SMTP_PORT'] : 587;
	$phpmailer->SMTPAuth   = true;
	$phpmailer->Username   = $c['SMTP_USER'];
	$phpmailer->Password   = $c['SMTP_PASS'];
	$phpmailer->SMTPSecure = isset( $c['SMTP_SECURE'] ) ? $c['SMTP_SECURE'] : 'tls';
	$phpmailer->CharSet    = 'UTF-8';
	// 差出人は認証アカウントに揃える（SPF/DMARC 対策）。返信先は別途 Reply-To で設定済み。
	if ( ! empty( $c['MAIL_FROM'] ) ) {
		$phpmailer->setFrom( $c['MAIL_FROM'], isset( $c['MAIL_FROM_NAME'] ) ? $c['MAIL_FROM_NAME'] : '' );
	}
}
add_action( 'phpmailer_init', 'oursle_configure_smtp' );

/**
 * center__column の class を返す。
 * 追加クラスが必要なページは get_header() の前に
 * $GLOBALS['oursle_center_class'] = 'diagnosis center__column'; のようにセットします。
 */
function oursle_center_class() {
	$class = isset( $GLOBALS['oursle_center_class'] ) ? $GLOBALS['oursle_center_class'] : 'center__column';
	return esc_attr( $class );
}

/**
 * 検索語にマッチする「テンプレート直書き固定ページ」を返す。
 *
 * 各ページ（お薬について等）の内容は page-{slug}.php テンプレートに直接
 * HTMLで書かれており、DBの post_content は空。そのため標準のWordPress検索
 * （post_title / post_content が対象）ではヒットしない。
 * ここではテンプレートファイルの可視テキストを走査し、検索語を含むページを
 * 固定ページとして取得して返す。
 *
 * @param string $term 検索語。
 * @return WP_Post[] マッチした公開済み固定ページ（重複除外済み）。
 */
function oursle_search_template_pages( $term ) {
	$term = trim( $term );
	if ( '' === $term ) {
		return array();
	}

	$files = glob( get_template_directory() . '/page-*.php' );
	if ( empty( $files ) ) {
		return array();
	}

	$found = array();
	foreach ( $files as $file ) {
		// page-aboutmedicine.php → aboutmedicine
		$slug = preg_replace( '/^page-/', '', basename( $file, '.php' ) );
		if ( '' === $slug ) {
			continue;
		}

		$raw = file_get_contents( $file );
		if ( false === $raw ) {
			continue;
		}

		// PHPブロックを除去 → HTMLタグを除去し、画面に出る可視テキストだけ残す
		$text = preg_replace( '/<\?(php|=).*?\?>/s', ' ', $raw );
		$text = wp_strip_all_tags( $text );

		// UTF-8は自己同期なので、バイト一致の stripos で安全に部分一致できる
		// （mb_stripos はサーバーの内部エンコーディング設定で日本語が外れることがある）
		if ( false === stripos( $text, $term ) ) {
			continue;
		}

		// テンプレート階層 page-{slug}.php は階層に関係なく post_name で決まるため、
		// 子ページでも確実に引けるよう get_page_by_path（フルパス前提）ではなく
		// post_name で直接照合する。
		$pages = get_posts(
			array(
				'name'           => $slug,
				'post_type'      => 'page',
				'post_status'    => 'publish',
				'posts_per_page' => 1,
				'no_found_rows'  => true,
			)
		);
		if ( ! empty( $pages ) ) {
			$page                 = $pages[0];
			$found[ $page->ID ] = $page;
		}
	}

	return array_values( $found );
}

/**
 * 検索結果に、テンプレート直書きの固定ページを差し込む。
 * （「プレドニン」のようにテンプレートにベタ書きの語が標準検索に出ない問題への対応）
 *
 * @param WP_Post[] $posts 検索結果。
 * @param WP_Query  $query 実行中のクエリ。
 * @return WP_Post[]
 */
function oursle_inject_template_pages_in_search( $posts, $query ) {
	if ( is_admin() || ! $query->is_main_query() || ! $query->is_search() ) {
		return $posts;
	}
	// 2ページ目以降への重複差し込みを避ける
	if ( $query->is_paged() ) {
		return $posts;
	}

	$pages = oursle_search_template_pages( $query->get( 's' ) );
	if ( empty( $pages ) ) {
		return $posts;
	}

	$existing_ids = wp_list_pluck( $posts, 'ID' );
	$added        = 0;
	foreach ( $pages as $page ) {
		if ( ! in_array( $page->ID, $existing_ids, true ) ) {
			// 情報ページを結果の先頭に出す
			array_unshift( $posts, $page );
			$existing_ids[] = $page->ID;
			$added++;
		}
	}

	if ( $added > 0 ) {
		$query->found_posts += $added;
		$per_page            = (int) $query->get( 'posts_per_page' );
		if ( $per_page > 0 ) {
			$query->max_num_pages = (int) ceil( $query->found_posts / $per_page );
		}
	}

	return $posts;
}
add_filter( 'the_posts', 'oursle_inject_template_pages_in_search', 10, 2 );
