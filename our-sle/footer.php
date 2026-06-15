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

<?php wp_footer(); ?>
</body>
</html>
