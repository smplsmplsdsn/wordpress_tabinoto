<section class="sub__section section">
  <div class="section__header">
    <h1>新着記事</h1>
  </div>
  <div class="list list--03">
    <div class="list__inner">
      <?php
      $args = array(
        'post_type' => $config_category_for_search,
        'posts_per_page' => 9,
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()):
      while ($the_query->have_posts()): $the_query->the_post();
        
        echo post_data_core(get_the_id(), 'standard');
      endwhile;
      endif;
      wp_reset_query();    // 投稿データのリセット        
      ?>
      
      
    </div>
  </div>
</section>          
