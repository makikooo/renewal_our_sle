<?php
/**
 * いま、気になること：タグ一覧（CSSで描画する手描き風タグ）。
 * トップページ／各固定ページで共通利用する。
 *
 * ここに並べるのは「候補プール」。実際の表示は concern-recommend.js が
 * 閲覧履歴＋人気で点数化し、各閲覧者向けに上位7個だけを表示する
 * （残りは隠す／表示7個の上位を「おすすめ」として強調）。
 * 初回・判断材料が無い閲覧者には、この配列の【先頭7個】が既定で表示される。
 * そのため先頭7個には「最初に見せたい定番タグ」を置く。
 *
 * 追加・削除・並べ替えは下の $concern_tags に「スラッグ」と「ラベル」を
 * 足す／消す／順番を変えるだけ。配置は自動（flexで折り返し）。
 * data-target / data-views は上記おすすめ選定に使う。
 *
 * @package oursle
 */

$concern_tags = array(
	array( 'slug' => 'symptoms',      'label' => 'だるさ' ),
	array( 'slug' => 'kokoro-care',   'label' => '不安' ),
	array( 'slug' => 'school-job',    'label' => '学校' ),
	array( 'slug' => 'doctor',        'label' => '医師との信頼関係' ),
	array( 'slug' => 'symptoms',      'label' => '皮疹' ),
	array( 'slug' => 'sle-life-tips', 'label' => '生活のコツ' ),
	array( 'slug' => 'treatment',     'label' => '薬' ),
	array( 'slug' => 'about-sle',     'label' => 'SLEとは' ),
	array( 'slug' => 'jukyuusyahyou', 'label' => '受給者票の使い道' ),
	array( 'slug' => 'system',        'label' => '医療費の制度' ),
	array( 'slug' => 'nanbyouteate',  'label' => '難病手当' ),
	array( 'slug' => 'tourokusyou',   'label' => '難病登録証' ),
	array( 'slug' => 'complications', 'label' => '合併症' ),
	array( 'slug' => 'diagnosis',     'label' => '診断基準' ),
	array( 'slug' => 'results',       'label' => '検査結果' ),
	array( 'slug' => 'pregnancy',     'label' => '妊娠・出産' ),
	array( 'slug' => 'remission',     'label' => '社会的寛解' ),
	array( 'slug' => 'care-guide',    'label' => '受診の目安' ),
	array( 'slug' => 'faq',           'label' => 'よくある質問' ),
);
?>
<div class="concern__wrapper">
	<?php foreach ( $concern_tags as $tag ) : ?>
	<a class="concern__link" data-target="<?php echo esc_attr( $tag['slug'] ); ?>" data-views="<?php echo (int) oursle_views_by_slug( $tag['slug'] ); ?>" href="<?php echo esc_url( oursle_url_by_slug( $tag['slug'] ) ); ?>">
		<span class="concern__tag">#<?php echo esc_html( $tag['label'] ); ?></span>
	</a>
	<?php endforeach; ?>
</div>
