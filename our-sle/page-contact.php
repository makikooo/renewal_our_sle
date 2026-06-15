<?php
/**
 * お問い合わせ
 * 元ファイル: contact.php
 * 送信処理は functions.php の oursle_handle_contact() が行います。
 */
$GLOBALS['oursle_center_id'] = 'contact';
get_header();

$contact = isset( $GLOBALS['oursle_contact'] ) ? $GLOBALS['oursle_contact'] : array( 'errors' => array(), 'old' => array(), 'sent' => false );
$errors  = $contact['errors'];
$old     = $contact['old'];
$sent    = $contact['sent'];

/** 入力値の安全な出力 */
$old_val = function ( $key ) use ( $old ) {
	return isset( $old[ $key ] ) ? esc_attr( $old[ $key ] ) : '';
};
?>
      <section class="center__wrapper" aria-label="デスクトップ用ヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
          <li class="breadcrumb__item">お問い合わせ</li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="<?php bloginfo( 'name' ); ?>">
        </a>
        <h1 class="title">お問い合わせ・ご相談</h1>
      </section>

      <?php if ( $sent ) : ?>
      <section class="sec01">
        <p class="title__text">お問い合わせありがとうございました。</p>
        <p>内容を確認のうえ、5日以内（土日祝日以外）にご返信を心がけております。<br>
        万一返信が届かない場合は、迷惑メール設定をご確認のうえ、再度お送りくださいませ。</p>
        <a class="button contact__button" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <span>トップへ戻る</span>
          <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
        </a>
      </section>
      <?php else : ?>
      <section class="sec01">
        <p class="title__text">ご相談やホームページのご感想などお気軽にお問い合わせくださいませ。</p>
        <div class="sec01__flex">
          <div class="sec01__flex-item active">入力</div>
          <span>
            <svg width="20" height="24" viewBox="0 0 20 24">
              <polygon points="0,0 20,12 0,24" fill="#fff" stroke="#A5FF9F" stroke-width="2" />
            </svg>
          </span>
          <div class="sec01__flex-item">確認</div>
          <span>
            <svg width="20" height="24" viewBox="0 0 20 24">
              <polygon points="0,0 20,12 0,24" fill="#fff" stroke="#A5FF9F" stroke-width="2" />
            </svg>
          </span>
          <div class="sec01__flex-item">送信</div>
        </div>
      </section>

      <section class="sec02">
        <?php if ( ! empty( $errors ) ) : ?>
          <p class="form__error-summary" style="color:#d33; font-weight:bold;">入力内容にエラーがあります。ご確認ください。</p>
        <?php endif; ?>
        <?php if ( ! empty( $errors['_'] ) ) : ?>
          <p class="form__error" style="color:#d33;"><?php echo esc_html( $errors['_'] ); ?></p>
        <?php endif; ?>
        <form action="<?php echo esc_url( get_permalink() ); ?>" method="post" class="form">
          <?php wp_nonce_field( 'oursle_contact', 'oursle_contact_nonce' ); ?>
          <!-- スパム対策（人間には見えない項目。入力されていたらbotとみなす） -->
          <p style="position:absolute; left:-9999px;" aria-hidden="true">
            <label>このフィールドは空のままにしてください<input type="text" name="website" tabindex="-1" autocomplete="off" value=""></label>
          </p>

          <label for="name">お名前（必須事項）</label>
          <?php if ( ! empty( $errors['name'] ) ) : ?>
            <p class="form__error" style="color:#d33; margin:0;"><?php echo esc_html( $errors['name'] ); ?></p>
          <?php endif; ?>
          <input type="text" id="name" name="name" value="<?php echo $old_val( 'name' ); ?>" required>

          <label for="email">メールアドレス（必須事項）</label>
          <?php if ( ! empty( $errors['email'] ) ) : ?>
            <p class="form__error" style="color:#d33; margin:0;"><?php echo esc_html( $errors['email'] ); ?></p>
          <?php endif; ?>
          <input type="email" name="email" id="email" value="<?php echo $old_val( 'email' ); ?>" required>

          <label for="title">件名</label>
          <?php if ( ! empty( $errors['title'] ) ) : ?>
            <p class="form__error" style="color:#d33; margin:0;"><?php echo esc_html( $errors['title'] ); ?></p>
          <?php endif; ?>
          <input type="text" name="title" id="title" value="<?php echo $old_val( 'title' ); ?>">

          <label for="message">メッセージ（必須事項）</label>
          <?php if ( ! empty( $errors['message'] ) ) : ?>
            <p class="form__error" style="color:#d33; margin:0;"><?php echo esc_html( $errors['message'] ); ?></p>
          <?php endif; ?>
          <textarea name="message" id="message" rows="4" required><?php echo esc_textarea( isset( $old['message'] ) ? $old['message'] : '' ); ?></textarea>

          <button type="submit" class="button contact__button">
            <span>送信する</span>
            <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
          </button>
        </form>
        <p>お問い合わせのご返信は5日以内(土日祝日以外)を心がけております。お客様のご利用環境、また迷惑メール対策等の設定により、お返事が届かない場合があります。7日経過しても返信のない場合、大変お手数をおかけしますが再度お送りいただくよう、お願い申し上げます。</p>
      </section>
      <?php endif; ?>
<?php get_footer();
