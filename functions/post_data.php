<?php
global $post;

if (have_posts()){
	while(have_posts()){    
		the_post();
    
		$post_id = get_the_id();
		$post_title = wp_strip_all_tags(get_the_title());
		$post_time = get_the_time('Y-m-d\TH:i');
		$post_date = get_the_time('Y年n月j日');
		$post_date_year = get_the_time('Y');
		$post_date_month = strtoupper(get_post_time('M'));
		$post_date_day = get_the_time('j');    


    if (is_singular('post')) {

      // the_category(', ');
      $post_category = get_the_category();
      $post_category = $post_category[0];
      $post_category_id = $post_category -> term_id;
      $post_category_base = $post_category -> slug;
      $post_category_name = $post_category -> name;
      $post_category_link = get_category_link($post_category->term_id);
      
    } else if (is_page()) {

      $parent_id = $post -> post_parent;
      
      if ($parent_id > 0) {
        $post_category = get_post($parent_id);
        $post_category_base = $post_category -> post_name;
        $post_category_name = $post_category -> post_title;
        $post_category_link = get_permalink($parent_id);     
      } else {
        $post_category_name = '';
        $post_category_base = '';
        $post_category_link = '';        
      }
      
    } else {
      
      $post_category = get_post_type_object(get_post_type());
      $post_category_name = get_post_type_object(get_post_type()) -> label;
      $post_category_base = get_post_type_object(get_post_type()) -> name;
      $post_category_link = DOMAIN.'/'.$post_category_base.'/';    // URLを取得
    }
    
    
    // タイトル
    $title = $post_title;
    $head_title = $post_title.' - '.get_bloginfo('name').' '.$post_category_name;

    // head 概要文
    $head_description = get_the_excerpt();
    $is_post_desciption_more = (mb_strlen($head_description, 'UTF-8') > 100);
    $head_description = mb_substr($head_description, 0, 100, 'UTF-8');
    if ($is_post_desciption_more) {
      $head_description = $head_description."...";
    }
    $head_description = replace_rn_to_space($head_description);
    $head_description = esc_html($head_description);

		// キャッチ画像取得
		$post_img = '';
		if (get_the_post_thumbnail_url()) {
			$post_img = get_the_post_thumbnail_url($post_id, 'large');
    }
    
    // head ogp用画像
    $head_ogp_img = ($post_img != '')? $post_img: mp_get_thumbnail($post_id, $post_category_base, get_the_content());
    
    if ($head_ogp_img === '') {
      $head_ogp_img = ASSETS_PATH.'/ogp.png';
    }
    
    // リンク
    $current_link = get_permalink();
    
    // カスタムフィールド
		// $post_cf_movie = get_field("youtube");
		// $post_cf_github = get_field("github");    
    
	}
}