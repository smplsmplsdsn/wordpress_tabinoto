<?php
/*

// アクセスするごとに24時間有効なクッキーを作る場合
setcookie('name', 'value', time() + 24*60*60);

// セッションがあれば、それを利用し、なければセッションを発行する場合
if (isset($_SESSION['name'])) {
  $session_key = $_SESSION['name'];
} else {
  $session_key = md5(md5(time()).'value');
  $_SESSION['name'] = $session_key;
}
*/
// WordPressのテンプレートパス
$theme_dir = get_template_directory();

// お手製のPHPファイルを読み込む
include_once($theme_dir."/functions/index.php");



// テンプレート
switch (true) {
    
  // ホームページ
  case is_home():
  case is_front_page():
    $content_type = 'home';
    $title = get_bloginfo('name');
    $head_title = $title;
    $head_description = get_bloginfo('description');
    $head_ogp_img = ASSETS_PATH.'/ogp.png';
    $current_link = DOMAIN;
    break;
  
  // 固定ページ
  case is_page():
    $content_type = 'page';    
    include_once($theme_dir."/functions/post_data.php");
    break;
  
  // 投稿
  case is_single():
    $content_type = 'single';    
    include_once($theme_dir."/functions/post_data.php");
    break;
  
  // カテゴリー一覧
  case is_category():
    $post_category = get_queried_object();
    $post_category_name = $post_category -> name;
    $post_category_base = $post_category -> slug;

    // このカテゴリーの URL を取得
    $post_category_link = get_category_link($post_category->term_id);
    
    $content_type = 'category';
    $title = $post_category_name.'に関する記事';
    $head_description = category_description();
    $head_ogp_img = mp_get_thumbnail('0', $post_category_base);
    if ($head_ogp_img === '') {
      $head_ogp_img = ASSETS_PATH.'/ogp.png';
    }
    $current_link = $post_category_link;
    
    break;
  
  // 検索結果
  case is_search():
    $s_result_num = $wp_query -> found_posts;
    $is_result = $s != "" && $s_result_num > 0;

    $content_type = 'search';
    $title = '「'.$s.'」にヒットした記事一覧';
    $head_description = '「'.$s.'」にヒットしたすべての記事をリストアップします。';
    $head_ogp_img = ASSETS_PATH.'/ogp.png';
    $current_link = DOMAIN.'/?s='.$s;
    break;
  
  // 404もしくはその他
  case is_404():
  default:
    include_once($theme_dir."/include/content/404.php");
    die();
}

// titleタグ用のタイトル
if (!isset($head_title)) {
  $head_title = $title.' - '.get_bloginfo('name');
}

// 初期表示かjson呼び出しか判別する
$json = enc_param('json', $_GET);
if ($json === '') {
  include_once($theme_dir."/include/template.php");  
} else {
?>
<div class="js-ajax-info">
  <span class="js-ajax-title"><?php echo $title; ?></span>
  <span class="js-ajax-head-title"><?php echo $head_title; ?></span>
  <span class="js-ajax-head-description"><?php echo $head_description; ?></span>
  <span class="js-ajax-head-ogp-img"><?php echo $head_ogp_img; ?></span>
  <span class="js-ajax-current-link"><?php echo $current_link; ?></span>
</div>
<?php
  include_once($theme_dir."/include/content/".$content_type.".php");
}

