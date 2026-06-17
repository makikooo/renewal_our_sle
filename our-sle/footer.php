<?php
/**
 * フッター（共通）
 * center__column を閉じ、右カラム・main を閉じてスクリプトを出力します。
 *
 * @package oursle
 */
?>
      <img class="footer__top-img" src="<?= THEME_URI ?>/assets/images/background/bg_yellow02.webp" alt="">
      <footer class="footer">
        
        <?php if ( ! is_front_page() ) : ?>
        <div class="footer__line-sp">
          <a href="https://line.me/ti/g2/vthSUWGZnAREorbZw_pkxZ1umVSj0lhslOhGsA?utm_source=invitation&utm_medium=link_copy&utm_campaign=default" target="_blank" rel="noopener noreferrer" class="line__container">
            <img class="line__img" src="<?= THEME_URI ?>/assets/images/line_icon.webp" alt="LINEのアイコン">
            <img class="qr__img" src="<?= THEME_URI ?>/assets/images/qr.webp" alt="LINEのQRコード">
            <div class="oc__text_box">
              <p class="oc__text">SLE仲間募集してます<br>オープンチャット</p>
            </div>
          </a>
          <a class="button go_to_line" href="https://line.me/ti/g2/vthSUWGZnAREorbZw_pkxZ1umVSj0lhslOhGsA?utm_source=invitation&utm_medium=link_copy&utm_campaign=default" target="_blank" rel="noopener noreferrer">
            <span>匿名で参加してみる</span>
            <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
          </a>
        </div>
        <?php endif; ?>
        <a class="button contact__button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
          <span>お問い合わせ</span>
          <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
        </a>
        <small class="footer__copy">&copy;わたしたちのSLE 2022-<?php echo esc_html( date_i18n( 'Y' ) ); ?></small>
        <img class="footer__flower" src="<?= THEME_URI ?>/assets/images/flower.webp" alt="">
      </footer>
    </div><!-- /.center__column -->

    <aside class="right__column">
      <img class="mizutama mizutama01" src="<?= THEME_URI ?>/assets/images/mizutama/mizutama01.webp" alt="">
      <img class="mizutama mizutama02" src="<?= THEME_URI ?>/assets/images/mizutama/mizutama02.webp" alt="">
      <img class="mizutama mizutama03" src="<?= THEME_URI ?>/assets/images/mizutama/mizutama03.webp" alt="">
      <img class="mizutama mizutama04" src="<?= THEME_URI ?>/assets/images/mizutama/mizutama04.webp" alt="">
      <img class="mizutama mizutama05" src="<?= THEME_URI ?>/assets/images/mizutama/mizutama05.webp" alt="">
      <img class="mizutama mizutama06" src="<?= THEME_URI ?>/assets/images/mizutama/mizutama06.webp" alt="">
      <img class="mizutama mizutama07" src="<?= THEME_URI ?>/assets/images/mizutama/mizutama07.webp" alt="">
      <img class="mizutama mizutama08" src="<?= THEME_URI ?>/assets/images/mizutama/mizutama08.webp" alt="">
    </aside>
  </main>

  <?php // Cookie利用の同意バナー（トップページのみ。未選択のときだけ cookie-consent.js が表示する） ?>
  <?php if ( is_front_page() ) : ?>
  <div id="cookie-consent" class="cookie-consent" role="dialog" aria-label="Cookieの利用について" hidden>
    <p class="cookie-consent__text">
      当サイトでは、表示の改善と「いま、気になること」のおすすめ表示のために、Cookie（クッキー）とブラウザの保存機能を使用します。ご利用に同意いただけますか？
    </p>
    <div class="cookie-consent__buttons">
      <button type="button" class="cookie-consent__agree">同意する</button>
      <button type="button" class="cookie-consent__reject">拒否する</button>
    </div>
  </div>
  <?php endif; ?>

  <?php // 「いま、気になること」タグの枠線を手描き風に揺らすSVGフィルター ?>
  <svg width="0" height="0" aria-hidden="true" focusable="false" style="position:absolute">
    <filter id="oursle-rough" x="-5%" y="-5%" width="110%" height="110%">
      <feTurbulence type="fractalNoise" baseFrequency="0.018" numOctaves="2" seed="7" result="noise"/>
      <feDisplacementMap in="SourceGraphic" in2="noise" scale="4" xChannelSelector="R" yChannelSelector="G"/>
    </filter>
  </svg>

<?php wp_footer(); ?>
</body>
</html>
