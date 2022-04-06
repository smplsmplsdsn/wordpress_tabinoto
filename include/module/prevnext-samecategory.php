<?php
/*
 * 投稿ページにて、同カテゴリーの前後記事の情報を取得する
 *
 * ATTENTION mp_html_list_unit.php を読み込んでいること
 */
$nextpost = get_adjacent_post(true, '', false);
$prevpost = get_adjacent_post(true, '', true);


if ($prevpost || $nextpost) {
?>
<nav class="prevnext list list--02 section section--prevnext">
  <div class="prevnext__inner">
<?php
  if ($prevpost) {
    echo post_data_core($prevpost -> ID, 'standard', 50);
  } else {
    echo '<div class="prevnext__none"></div>';
  }

  if ($nextpost) {
    echo post_data_core($nextpost -> ID, 'standard', 50);
  } else {
    echo '<div class="prevnext__none"></div>';
  }
?>
  </div>
</nav>
<?php  
}