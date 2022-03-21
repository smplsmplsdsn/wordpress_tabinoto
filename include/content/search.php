<?php
// 検索結果
$s_result_num = $wp_query -> found_posts;
$is_result = $s != "" && $s_result_num > 0;

$headline = $$title;
if ($is_result) {
  $excerpt = '「'.$s.'」にヒットした記事は全部で'.$s_result_num.'件見つかりました。';
} else {
  $excerpt = '「'.$s.'」にヒットする記事は見つかりませんでした。';
}
include_once($theme_dir."/include/parts-list.php");