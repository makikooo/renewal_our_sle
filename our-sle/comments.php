<?php
/**
 * コメント表示・投稿フォーム
 *
 * @package oursle
 */

// パスワード保護記事ではコメントを表示しない
if ( post_password_required() ) {
	return;
}
?>
<section class="comments" id="comments">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments__title">
			<?php
			$oursle_count = get_comments_number();
			if ( '1' === (string) $oursle_count ) {
				echo 'コメント（1件）';
			} else {
				echo 'コメント（' . esc_html( number_format_i18n( $oursle_count ) ) . '件）';
			}
			?>
		</h2>

		<ol class="comments__list">
			<?php
			wp_list_comments(
				array(
					'style'       => 'ol',
					'avatar_size' => 48,
					'short_ping'  => true,
				)
			);
			?>
		</ol>

		<?php
		// コメントのページ送り
		the_comments_pagination(
			array(
				'prev_text' => '前のコメント',
				'next_text' => '次のコメント',
			)
		);
		?>

	<?php endif; ?>

	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="comments__closed">コメントは受け付けていません。</p>
	<?php endif; ?>

	<?php
	comment_form(
		array(
			'class_form'           => 'comment-form form',
			'title_reply'          => 'コメントを書く',
			'title_reply_to'       => '%s さんへ返信',
			'cancel_reply_link'    => '返信をキャンセル',
			'label_submit'         => '送信する',
			'class_submit'         => 'button contact__button',
			'comment_notes_before' => '<p class="comment-notes">メールアドレスが公開されることはありません。</p>',
			'comment_field'        => '<p class="comment-form-comment"><label for="comment">コメント<span class="required">*</span></label> <textarea id="comment" name="comment" rows="5" required></textarea></p>',
			'fields'               => array(
				'author' => '<p class="comment-form-author"><label for="author">お名前<span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" required></p>',
				'email'  => '<p class="comment-form-email"><label for="email">メールアドレス<span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" required></p>',
			),
		)
	);
	?>
</section>
