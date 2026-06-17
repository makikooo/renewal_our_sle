<?php
/**
 * SEO 出力（meta description / OGP / Twitter Card / canonical / 構造化データ）
 *
 * SEOプラグイン未導入でも、各ページに最適化したメタ情報を出力する。
 * テンプレート直書きの固定ページ（page-{slug}.php）は post_content が空のため、
 * ページ別の説明文は oursle_seo_descriptions() の台帳から取得する。
 *
 * @package oursle
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // 直接アクセス禁止
}

/**
 * サイト共通の説明文（フォールバック）。
 *
 * @return string
 */
function oursle_seo_default_description() {
	$desc = get_bloginfo( 'description' );
	if ( '' !== trim( (string) $desc ) ) {
		return $desc;
	}
	return 'わたしたちのSLEは、SLE（全身性エリテマトーデス）の症状・検査・治療・暮らしの工夫を、患者目線でやさしくまとめた情報サイトです。不安や悩みを抱える方へ、日常を少しでも楽にするヒントを届けます。';
}

/**
 * ページ別の meta description 台帳（固定ページのスラッグ => 説明文）。
 * テンプレート直書きページは本文が空のため、ここで個別に指定する。
 * 手入力の抜粋（excerpt）がある投稿・ページは、台帳より抜粋を優先する。
 *
 * @return array<string, string>
 */
function oursle_seo_descriptions() {
	return apply_filters(
		'oursle_seo_descriptions',
		array(
			// SLEについて
			'menu-sle'      => 'SLEとは・症状・合併症・診断基準・治療・社会的寛解まで、SLE（全身性エリテマトーデス）の基礎知識をまとめたもくじページです。',
			'about-sle'     => 'SLE（全身性エリテマトーデス）とはどんな病気か、原因や免疫の仕組み、膠原病との関係を、患者目線でやさしく解説します。',
			'symptoms'      => '発熱・関節痛・皮疹など、SLE（全身性エリテマトーデス）が全身・皮膚・腎臓・神経などに起こす多彩な症状を、部位別にわかりやすくまとめました。',
			'complications' => 'ループス腎炎・血栓・中枢神経症状・感染症など、SLEで起こりやすい合併症と、注意したいサインを患者目線で解説します。',
			'diagnosis'     => 'SLE（全身性エリテマトーデス）の診断基準と必要な検査を、分類基準のポイントとあわせてわかりやすく解説します。',
			'treatment'     => 'ステロイド・免疫抑制剤・生物学的製剤など、SLEの治療方法と薬の役割を、患者目線でやさしくまとめました。',
			'remission'     => 'SLEの「社会的寛解」とは何か。病気とつきあいながら自分らしく暮らすための考え方を、患者目線で解説します。',

			// 困っている
			'menu-support'  => '仕事・学校、こころ、妊娠・出産、受診の目安など、SLEで困ったときに役立つ情報をまとめたもくじページです。',
			'school-job'    => 'SLEとつきあいながら働く・学ぶための工夫。職場や学校への伝え方、通院との両立のヒントをまとめました。',
			'kokoro-care'   => 'SLEの不安やつらさとどう向き合うか。こころのケアやメンタルを保つためのヒントを、患者目線でやさしくまとめました。',
			'sle-life-tips' => '紫外線対策や体調管理など、SLEの症状とうまく付き合いながら毎日を過ごすための生活のコツをまとめました。',
			'doctor'        => 'SLEの治療を続けるうえで大切な、主治医との信頼関係の築き方や、通院・相談のコツをまとめました。',
			'care-guide'    => 'SLEで「これは受診すべき？」と迷ったときの目安。再燃のサインや受診の判断ポイントをわかりやすく解説します。',
			'pregnancy'     => 'SLEの妊娠・出産で知っておきたいこと。計画妊娠や治療との両立、注意点を患者目線でやさしくまとめました。',
			'faq'           => '妊娠・出産、再燃、通院など、SLE（全身性エリテマトーデス）についてよく寄せられる質問にQ&A形式でお答えします。',

			// 調べたい
			'menu-check'    => '検査結果の見方、お薬、医療費の制度など、SLEについて調べたいことをまとめたもくじページです。',
			'results'       => '血液検査・尿検査・補体・炎症反応など、SLEの検査結果の見方と再燃の指標を、患者目線でやさしく解説します。',
			'aboutmedicine' => 'ステロイド・免疫抑制剤・生物学的製剤・プラケニルなど、SLEで使われるお薬の種類と特徴をわかりやすくまとめました。',
			'system'        => '指定難病の医療費助成・高額療養費・自立支援医療・医療費控除など、SLEで使える医療費の制度をわかりやすく解説します。',
			'jukyuusyahyou' => '特定医療費（指定難病）受給者証でできる、医療費以外の減免やサービスを患者目線でまとめました。',
			'nanbyouteate'  => 'お住まいの市区町村で受けられる難病手当（見舞金など）の内容と、申請の流れをわかりやすくまとめました。',
			'tourokusyou'   => '難病の登録者証とは何か、取得のメリットや申請方法を、患者目線でやさしく解説します。',

			// 仲間さがし
			'menu-communication' => 'オープンチャットや運営者の紹介など、SLEの仲間とつながるための情報をまとめたページです。',
			'openchat'      => 'SLE患者どうしでつながれるLINEオープンチャットのご案内。同じ病気の仲間と、悩みや工夫を分かち合えます。',
			'about-me'      => 'サイト運営者の自己紹介。SLE患者である「わたし」が、このサイトを作った想いをお伝えします。',

			// 参加する（アンケート）
			'menu-enquete'  => 'SLE患者さんへの「あるあるアンケート」と、その結果をまとめたページです。あなたの声もぜひお寄せください。',
			'enquete01'     => 'コロナワクチンについてのアンケート結果。SLE患者さんの回答から、医師の接種許可状況・接種したワクチンの種類・副反応の有無や具体的な症状をまとめました。',
			'enquete02'     => 'SLE患者さん25名のアンケート結果。年齢・発症からの年数、プレドニンの副作用、周囲の理解、紫外線対策、コロナ感染など、治療と暮らしのリアルをまとめました。',
			'enquete03'     => 'SLE患者14名のお悩みQ&A。ムーンフェイス対策、ステロイド減薬、自己注射の痛み対策、妊娠・出産・育児、仕事、メンタル、レイノー現象など、当事者のリアルな工夫をまとめました。',

			// 入口・その他
			'first'         => 'SLEと初めて診断されて不安な方へ。まず知っておきたいことと、これからの過ごし方のヒントをまとめました。',
			'family'        => 'SLEの方を支えるご家族や身近な方へ。病気の理解や接し方のヒントを、患者目線でまとめました。',
			'doubt'         => '「SLEの疑い」と言われて不安な方へ。診断までの流れや、いま知っておきたいことをわかりやすくまとめました。',
			'contact'       => 'わたしたちのSLEへのお問い合わせフォームです。ご意見・ご感想・ご質問をお気軽にお寄せください。',
			'about-site'    => '「わたしたちのSLE」の運営方針や、掲載している情報の使い方についての注意点をまとめたページです。',
			'tags'          => 'タグから、関連するSLE（全身性エリテマトーデス）の情報ページをまとめて探せます。',
		)
	);
}

/**
 * 文字列を指定文字数（全角換算）で切り詰める。日本語向けに mb_substr を使う。
 *
 * @param string $text   元の文字列。
 * @param int    $length 最大文字数。
 * @return string
 */
function oursle_seo_trim( $text, $length = 120 ) {
	$text = trim( preg_replace( '/\s+/u', ' ', wp_strip_all_tags( (string) $text ) ) );
	if ( mb_strlen( $text ) > $length ) {
		$text = mb_substr( $text, 0, $length ) . '…';
	}
	return $text;
}

/**
 * 現在表示中のページに最適な meta description を返す。
 *
 * 優先順位：手入力の抜粋 > スラッグ台帳 > 本文の抜き出し > サイト共通文。
 *
 * @return string
 */
function oursle_seo_description() {
	$default = oursle_seo_default_description();
	$desc    = '';

	if ( is_front_page() || is_home() ) {
		$desc = $default;
	} elseif ( is_singular() ) {
		$post = get_queried_object();
		if ( $post instanceof WP_Post ) {
			if ( has_excerpt( $post ) ) {
				$desc = get_the_excerpt( $post );
			} else {
				$map = oursle_seo_descriptions();
				if ( isset( $map[ $post->post_name ] ) ) {
					$desc = $map[ $post->post_name ];
				} elseif ( '' !== trim( wp_strip_all_tags( $post->post_content ) ) ) {
					$desc = strip_shortcodes( $post->post_content );
				}
			}
		}
	} elseif ( is_search() ) {
		$desc = '「' . get_search_query() . '」の検索結果です。' . $default;
	} elseif ( is_category() || is_tag() || is_tax() ) {
		$desc = term_description();
		if ( '' === trim( wp_strip_all_tags( (string) $desc ) ) ) {
			$desc = single_term_title( '', false ) . 'に関する情報の一覧です。' . $default;
		}
	} elseif ( is_post_type_archive() || is_archive() ) {
		$desc = $default;
	}

	if ( '' === trim( wp_strip_all_tags( (string) $desc ) ) ) {
		$desc = $default;
	}

	return oursle_seo_trim( $desc, 120 );
}

/**
 * OGP / Twitter Card 用のページタイトル。区切り以降のサイト名は付けたまま使う。
 *
 * @return string
 */
function oursle_seo_title() {
	return wp_get_document_title();
}

/**
 * 現在ページの正規URL（canonical）。
 *
 * @return string
 */
function oursle_seo_canonical() {
	if ( is_front_page() ) {
		return home_url( '/' );
	}
	if ( is_singular() ) {
		$url = get_permalink( get_queried_object_id() );
		if ( $url ) {
			return $url;
		}
	}
	if ( is_category() || is_tag() || is_tax() ) {
		$url = get_term_link( get_queried_object() );
		if ( ! is_wp_error( $url ) ) {
			return $url;
		}
	}
	// その他（検索・アーカイブ等）は現在のリクエストURLを採用する。
	global $wp;
	return home_url( add_query_arg( array(), $wp->request ? trailingslashit( $wp->request ) : '' ) );
}

/**
 * OGP に使う共有画像のURL（絶対パス）。
 * 単一ページにアイキャッチがあればそれを、無ければ既定のヒーロー画像を使う。
 *
 * @return string
 */
function oursle_seo_image() {
	if ( is_singular() && has_post_thumbnail( get_queried_object_id() ) ) {
		$src = wp_get_attachment_image_url( get_post_thumbnail_id( get_queried_object_id() ), 'full' );
		if ( $src ) {
			return $src;
		}
	}
	return apply_filters( 'oursle_seo_default_image', THEME_URI . '/assets/images/toppage/hero.webp' );
}

/**
 * <head> に meta description / OGP / Twitter Card / canonical を出力する。
 */
function oursle_seo_head_meta() {
	$title       = oursle_seo_title();
	$description = oursle_seo_description();
	$canonical   = oursle_seo_canonical();
	$image       = oursle_seo_image();
	$site_name   = get_bloginfo( 'name' );
	$og_type     = ( is_singular() && ! is_front_page() ) ? 'article' : 'website';
	$locale      = get_locale() ? get_locale() : 'ja_JP';

	$tags = array();

	$tags[] = sprintf( '<meta name="description" content="%s">', esc_attr( $description ) );

	// canonical（singular は WordPress 標準の rel_canonical が出力するため重複させない）
	if ( ! is_singular() && $canonical ) {
		$tags[] = sprintf( '<link rel="canonical" href="%s">', esc_url( $canonical ) );
	}

	// Open Graph
	$tags[] = sprintf( '<meta property="og:type" content="%s">', esc_attr( $og_type ) );
	$tags[] = sprintf( '<meta property="og:title" content="%s">', esc_attr( $title ) );
	$tags[] = sprintf( '<meta property="og:description" content="%s">', esc_attr( $description ) );
	$tags[] = sprintf( '<meta property="og:url" content="%s">', esc_url( $canonical ) );
	$tags[] = sprintf( '<meta property="og:site_name" content="%s">', esc_attr( $site_name ) );
	$tags[] = sprintf( '<meta property="og:locale" content="%s">', esc_attr( $locale ) );
	$tags[] = sprintf( '<meta property="og:image" content="%s">', esc_url( $image ) );

	// Twitter Card
	$tags[] = '<meta name="twitter:card" content="summary_large_image">';
	$tags[] = sprintf( '<meta name="twitter:title" content="%s">', esc_attr( $title ) );
	$tags[] = sprintf( '<meta name="twitter:description" content="%s">', esc_attr( $description ) );
	$tags[] = sprintf( '<meta name="twitter:image" content="%s">', esc_url( $image ) );

	echo "\n" . implode( "\n", $tags ) . "\n";
}
add_action( 'wp_head', 'oursle_seo_head_meta', 1 );

/**
 * 構造化データ（JSON-LD）を出力する。
 * トップ：WebSite（サイト内検索）＋ Organization。
 * 単一投稿・固定ページ：WebPage／Article ＋ パンくず（BreadcrumbList）。
 */
function oursle_seo_jsonld() {
	$graph     = array();
	$site_name = get_bloginfo( 'name' );
	$home      = home_url( '/' );

	if ( is_front_page() || is_home() ) {
		$graph[] = array(
			'@type'           => 'WebSite',
			'@id'             => $home . '#website',
			'url'             => $home,
			'name'            => $site_name,
			'description'     => oursle_seo_default_description(),
			'inLanguage'      => 'ja',
			'potentialAction' => array(
				'@type'       => 'SearchAction',
				'target'      => array(
					'@type'       => 'EntryPoint',
					'urlTemplate' => $home . '?s={search_term_string}',
				),
				'query-input' => 'required name=search_term_string',
			),
		);
		$graph[] = array(
			'@type' => 'Organization',
			'@id'   => $home . '#organization',
			'name'  => $site_name,
			'url'   => $home,
			'logo'  => array(
				'@type' => 'ImageObject',
				'url'   => THEME_URI . '/assets/images/logo.webp',
			),
		);
	} elseif ( is_singular() ) {
		$post = get_queried_object();
		if ( $post instanceof WP_Post ) {
			$url     = get_permalink( $post );
			$is_post = ( 'post' === $post->post_type );

			$node = array(
				'@type'         => $is_post ? 'Article' : 'WebPage',
				'@id'           => $url . '#' . ( $is_post ? 'article' : 'webpage' ),
				'url'           => $url,
				'name'          => get_the_title( $post ),
				'headline'      => get_the_title( $post ),
				'description'   => oursle_seo_description(),
				'inLanguage'    => 'ja',
				'datePublished' => get_the_date( DATE_W3C, $post ),
				'dateModified'  => get_the_modified_date( DATE_W3C, $post ),
				'isPartOf'      => array( '@id' => $home . '#website' ),
				'publisher'     => array(
					'@type' => 'Organization',
					'name'  => $site_name,
					'logo'  => array(
						'@type' => 'ImageObject',
						'url'   => THEME_URI . '/assets/images/logo.webp',
					),
				),
			);
			if ( $is_post ) {
				$node['author'] = array(
					'@type' => 'Person',
					'name'  => get_the_author_meta( 'display_name', $post->post_author ),
				);
			}
			if ( has_post_thumbnail( $post ) ) {
				$node['image'] = oursle_seo_image();
			}
			$graph[] = $node;

			// パンくず（祖先ページ → 現在ページ）
			$items     = array();
			$position  = 1;
			$items[]   = array(
				'@type'    => 'ListItem',
				'position' => $position++,
				'name'     => 'ホーム',
				'item'     => $home,
			);
			$ancestors = array_reverse( get_post_ancestors( $post ) );
			foreach ( $ancestors as $ancestor_id ) {
				$items[] = array(
					'@type'    => 'ListItem',
					'position' => $position++,
					'name'     => get_the_title( $ancestor_id ),
					'item'     => get_permalink( $ancestor_id ),
				);
			}
			$items[] = array(
				'@type'    => 'ListItem',
				'position' => $position++,
				'name'     => get_the_title( $post ),
				'item'     => $url,
			);
			$graph[] = array(
				'@type'           => 'BreadcrumbList',
				'itemListElement' => $items,
			);
		}
	}

	if ( empty( $graph ) ) {
		return;
	}

	$data = array(
		'@context' => 'https://schema.org',
		'@graph'   => $graph,
	);

	echo "\n" . '<script type="application/ld+json">'
		. wp_json_encode( $data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE )
		. '</script>' . "\n";
}
add_action( 'wp_head', 'oursle_seo_jsonld', 5 );
