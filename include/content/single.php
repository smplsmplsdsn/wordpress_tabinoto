<?php
$sns_link_twitter = 'https://twitter.com/share?url='.rawurlencode(get_permalink()).'&text='.rawurlencode(get_the_title().'【シンプルシンプルデザイン】');
$sns_link_facebook = 'https://www.facebook.com/sharer/sharer.php?u='.rawurlencode(get_permalink());
$sns_link_line = 'https://line.me/R/msg/text/?'.rawurlencode('【シンプルシンプルデザイン】'.get_the_title().' '.get_permalink());

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

		// the_category(', ');
		$post_category = get_the_category();
		$post_category = $post_category[0];
		$post_category_id = $post_category -> term_id;
		$post_category_base = $post_category -> slug;
		$post_category_name = $post_category -> name;


		// このカテゴリーの URL を取得
		$post_category_link = get_category_link($post_category->term_id);

		// キャッチ画像取得
		$post_img = '';
		if (get_the_post_thumbnail_url()) {
			$post_img = get_the_post_thumbnail_url($post_id, 'large');
    }
    
    // head ogp用画像
    $head_ogp_img = ($post_img != '')? $post_img: mp_get_thumbnail($post_id, $post_category_base, get_the_content());
    
    // head タイトル
    $head_title = $post_title.' - シンプルシンプルデザイン '.$post_category_name;
    
    // head 概要文
    $head_description = get_the_excerpt();
    $is_post_desciption_more = (mb_strlen($head_description, 'UTF-8') > 100);
    $head_description = mb_substr($head_description, 0, 100, 'UTF-8');
    if ($is_post_desciption_more) {
      $head_description = $head_description."...";
    }
    $head_description = replace_rn_to_space($head_description);
    $head_description = esc_html($head_description);
   
    // カスタムフィールド
		//$post_cf_movie = get_field("youtube");
		//$post_cf_github = get_field("github");    
	}
}
?>

<?php the_content(); ?>