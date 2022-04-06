<div class="layout__3column">
  
  <?php
  foreach ($config_category as $category_name => $category_base) {
  ?>
  <section class="section section--common section section--bar">
    <div class="section__header">
      <h1><a class="js-link-ajax" href="/<?php echo $category_base; ?>/"><?php echo $category_name; ?></a></h1>
    </div>
    <div class="list list--01 list--smp-scroll">
      <div class="list__inner">
        <?php
        $args = array(
          'post_type' => $category_base,
          'posts_per_page' => 9,
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()):
        while ($the_query->have_posts()): $the_query->the_post();        
          echo post_data_core(get_the_id(),'standard');
        endwhile;
        endif;
        wp_reset_query();    // 投稿データのリセット        
        ?>
      </div>
    </div>
    <p class="section__more"><a class="js-link-ajax" href="/<?php echo $category_base; ?>/"><strong><?php echo $category_name; ?></strong>をもっとみる</a></p>
  </section>
  <?php
  }
  ?>

</div>