<?php
/**
 * コア情報
 * 投稿・固定・カスタム投稿の場合、そのデータを取得する
 * どのページでもループ内で利用する場合、そのデータを取得する
 *
 * @param (string|integer) $post_id: ポストID
 * @param (string) $list_type: リストの場合はコーディングするため引数必須(post_data_cording.php 参照)
 * @param (number) $excerpt_length: 100 リストの概要テキストの最大文字数
 * @param (string) リストユニットのソースコード
 */
function post_data_core($post_id, $list_type = '', $excerpt_length = 100) {
  global $theme_dir;  
  include($theme_dir."/functions/get_post_data_core.php");

  // コーディングある場合は、コードを返却する
  $output = '';
  if ($list_type === "standard") {
    $output = '
<article class="list__unit js-link js-link-ajax" data-href="'.$current_link.'">
  <div class="list__unit-inner">
    <figure data-category="'.$post_category_name.'" style="background-image: url('.$thumbnail_img.');"></figure>
    <div class="list__unit-text">
      <h1><a class="js-link-ajax" href="'.$current_link.'">'.$post_title.'</a></h1>
      <p class="list__unit-excerpt">'.$head_description.'(テキスト: '.$post_author_name.')</p>
      <p class="list__unit-spec">
        <time datetime="'.$post_time.'">'.$post_date.'</time><span>'.$post_category_name.'</span>
      </p>
    </div>
  </div>
</article>
    ';
  }
  return $output;
}
