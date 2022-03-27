<section class="section section--home section section--bar">
  <div class="section__header">
    <h1>よく読まれている記事</h1>
  </div>
  
  <div class="list list--01 list--smp-scroll">
    <div class="list__inner layout__3column">
      <?php
      $list_type = 'standard';
      $args = array(
        'post_type' => $config_category_for_search,
        'posts_per_page' => 9,
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()):
      while ($the_query->have_posts()): $the_query->the_post();        
        include($theme_dir."/functions/post_data_core.php");
      endwhile;
      endif;
      unset($list_type);    // データタイプの削除
      wp_reset_query();    // 投稿データのリセット        
      ?>
    </div>
  </div>
</section>


<div class="layout__3column">
  
  <?php
  foreach ($config_category as $category_name => $category_base) {
  ?>
  <section class="section section--home section section--bar">
    <div class="section__header">
      <h1><a class="js-link-ajax" href="/<?php echo $category_base; ?>/"><?php echo $category_name; ?></a></h1>
    </div>
    <div class="list list--01 list--smp-scroll">
      <div class="list__inner">
        <?php
        $list_type = 'standard';    // TODO 'category' にして、カテゴリーは「グルメ」「観光」などタクソノミーを表示する
        $args = array(
          'post_type' => $category_base,
          'posts_per_page' => 9,
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()):
        while ($the_query->have_posts()): $the_query->the_post();        
          include($theme_dir."/functions/post_data_core.php");
        endwhile;
        endif;
        unset($list_type);    // データタイプの削除
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
