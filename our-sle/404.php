<?php
/**
 * ページが見つかりませんでした | わたしたちのSLE | SLE（全身性エリテマトーデス）を患者目線でやさしく解説
 * 元ファイル: 404.html
 */
$GLOBALS['oursle_center_id'] = 'page404';
get_header();
?>
      <section class="center__wrapper" aria-label="デスクトップ用ヘッダー">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">404ページ</a></li>
        </ul>
        <a class="logo__link pc_only" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo" src="<?= THEME_URI ?>/assets/images/logo.webp" alt="わたしたちのSLE">
        </a>
        <h1 class="title">ページが見つかりませんでした</h1>
        <p class="page404__text">指定されたページは存在しないか、または移動した可能性があります。</p>
      </section>
      <section class="sec01">
        <div class="sec01__wrapper">
          <p>次のような原因でエラーが発生した可能性があります</p>
          <ul>
            <li>URLの入力に誤りがある</li>
            <li>ページが移動・削除された</li>
            <li>アクセス集中により繋がりにくくなっている</li>
          </ul>
        </div>
        <button class="button contact__button back" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <span>トップページに戻る</span>
          <i class="fa-regular fa-circle-right fa-2xl" style="color: #71936d;"></i>
        </button>
        <form class="search__wrapper">
          <input type="text" placeholder="症状、検査 …で検索">
          <button>検索</button>
        </form>
      </section>
      <section class="sec02">
        <img class="sec02__top-img" src="<?= THEME_URI ?>/assets/images/background/bg-white03.webp" alt="">
        <h3 class="term__title">ご利用にあたって</h3>
        <p class="term__text">
          本サイトの内容は、SLEに関する情報提供を目的としており、医師の診断や治療に代わるものではありません。<br>
          体調に不安がある場合や治療について判断が必要な場合は、必ず医療機関へご相談ください。<br>
          掲載情報はできる限り正確にお伝えできるよう努めていますが、内容の完全性・最新性を保証するものではありません。
        </p>
      </section>

      
<?php get_footer();
