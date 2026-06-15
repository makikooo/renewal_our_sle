<?php
/**
 * 検索フォーム
 *
 * @package oursle
 */
?>
<form class="search__wrapper" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" role="search">
  <input type="text" name="s" placeholder="症状、検査 …で検索" value="<?php echo get_search_query(); ?>">
  <button type="submit">検索</button>
</form>
