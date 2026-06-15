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

	// ローディング演出はトップページのみ（head で先読み）
	if ( is_front_page() ) {
		wp_enqueue_script( 'oursle-loading', THEME_URI . '/assets/js/loading.js', array(), $ver, false );
	}

	// 返信（スレッド）コメント用スクリプト
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
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
 * 共通の meta description（SEOプラグイン未導入時のフォールバック）
 */
function oursle_meta_description() {
	$default = 'わたしたちのSLEは、SLE（全身性エリテマトーデス）の症状・検査・治療・暮らしの工夫を、患者目線でやさしくまとめた情報サイトです。';
	$desc    = get_bloginfo( 'description' );
	if ( empty( $desc ) ) {
		$desc = $default;
	}
	echo '<meta name="description" content="' . esc_attr( $desc ) . '">' . "\n";
}
add_action( 'wp_head', 'oursle_meta_description', 1 );

/**
 * 投稿カテゴリーから更新情報バッジ（class と ラベル）を返す。
 * カテゴリーのスラッグを update / news / blog に合わせると色分けされます。
 *
 * @param int|WP_Post|null $post 投稿。省略時は現在の投稿。
 * @return array array( 'class' => 'is-xxx', 'label' => 'ラベル' )
 */
function oursle_news_badge( $post = null ) {
	$map = array(
		'update' => array( 'is-update', '更新' ),
		'news'    => array( 'is-news', 'お知らせ' ),
		'blog'    => array( 'is-blog', 'ブログ' ),
	);

	$cats = get_the_category( $post ? get_post( $post )->ID : null );
	foreach ( $cats as $cat ) {
		if ( isset( $map[ $cat->slug ] ) ) {
			return array(
				'class' => $map[ $cat->slug ][0],
				'label' => $map[ $cat->slug ][1],
			);
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
 * center__column の id をテンプレートから受け取るヘルパー。
 * 各ページテンプレートで get_header() の前に
 * $GLOBALS['oursle_center_id'] = 'xxxx'; とセットします。
 */
function oursle_center_id() {
	$id = isset( $GLOBALS['oursle_center_id'] ) ? $GLOBALS['oursle_center_id'] : 'main_content';
	return esc_attr( $id );
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

	$name    = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
	$email   = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
	$title   = isset( $_POST['title'] ) ? sanitize_text_field( wp_unslash( $_POST['title'] ) ) : '';
	$message = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

	$old    = compact( 'name', 'email', 'title', 'message' );
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
	}

	$GLOBALS['oursle_contact']['old']    = $old;
	$GLOBALS['oursle_contact']['errors'] = $errors;

	if ( ! empty( $errors ) ) {
		return;
	}

	// メール送信
	$to      = get_option( 'admin_email' );
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
	if ( ! $GLOBALS['oursle_contact']['sent'] ) {
		$GLOBALS['oursle_contact']['errors']['_'] = '送信に失敗しました。時間をおいて再度お試しください。';
	}
}
add_action( 'template_redirect', 'oursle_handle_contact' );

/**
 * center__column の class を返す。
 * 追加クラスが必要なページは get_header() の前に
 * $GLOBALS['oursle_center_class'] = 'diagnosis center__column'; のようにセットします。
 */
function oursle_center_class() {
	$class = isset( $GLOBALS['oursle_center_class'] ) ? $GLOBALS['oursle_center_class'] : 'center__column';
	return esc_attr( $class );
}
