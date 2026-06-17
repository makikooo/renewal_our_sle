<?php
/**
 * いま、気になること：タグ一覧（CSSで描画する手描き風タグ）。
 * トップページ／各固定ページで共通利用する。
 *
 * data-target（リンク先スラッグ）と data-views（閲覧数＝人気）は
 * concern-recommend.js の「あなたへのおすすめ」強調に使う。
 *
 * @package oursle
 */

$concern_tags = array(
	array( 'slug' => 'symptoms',      'class' => 'darusa',   'label' => 'だるさ' ),
	array( 'slug' => 'kokoro-care',   'class' => 'fuan',     'label' => '不安' ),
	array( 'slug' => 'school-job',    'class' => 'school',   'label' => '学校' ),
	array( 'slug' => 'doctor',        'class' => 'doctor',   'label' => '医師との信頼関係' ),
	array( 'slug' => 'symptoms',      'class' => 'skin',     'label' => '皮疹' ),
	array( 'slug' => 'sle-life-tips', 'class' => 'qol',      'label' => '生活のコツ' ),
	array( 'slug' => 'treatment',     'class' => 'medicine', 'label' => '薬' ),
);
?>
<div class="concern__wrapper">
	<?php foreach ( $concern_tags as $tag ) : ?>
	<a class="concern__link" data-target="<?php echo esc_attr( $tag['slug'] ); ?>" data-views="<?php echo (int) oursle_views_by_slug( $tag['slug'] ); ?>" href="<?php echo esc_url( home_url( '/' . $tag['slug'] . '/' ) ); ?>">
		<span class="concern__tag <?php echo esc_attr( $tag['class'] ); ?>">#<?php echo esc_html( $tag['label'] ); ?></span>
	</a>
	<?php endforeach; ?>
</div>
