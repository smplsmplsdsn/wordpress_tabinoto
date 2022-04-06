<?php
/**
 * WordPress Popular Postsをカスタマイズ
 * https://blog-and-destroy.com/1270
 *
 */
function mp_wpp_custom_html($mostpopular, $instance){
	$output = '';

	foreach($mostpopular as $popular){
		$output .= post_data_core($popular -> id, 'standard');
		// esc_html( $popular->pageviews ).'views'; 
	}

	return $output;
}
add_filter('wpp_custom_html', 'mp_wpp_custom_html', 10, 2);