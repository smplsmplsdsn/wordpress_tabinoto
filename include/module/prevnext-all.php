<?php
/*
 * 投稿ページもしくはカスタム投稿ページにて、前後記事の情報を取得する
 *
 * mp_html_list_unit.php を読み込んでいること
 */
$nextpost_all = get_adjacent_post(false, '', false);
$prevpost_all = get_adjacent_post(false, '', true);


if ($nextpost_all || $prevpost_all) {
  if ($prevpost_all) {
    echo post_data_core($prevpost_all -> ID, 'standard', 50);
  } else {
    echo '';
  }

  if ($nextpost_all) {
    echo post_data_core($nextpost_all -> ID, 'standard', 50);
  } else {
    echo '';
  }
}