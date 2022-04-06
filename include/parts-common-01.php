<section class="section section--common section section--bar">
  <div class="section__header">
    <h1>よく読まれている記事</h1>
  </div>
  
  <div class="list list--01 list--smp-scroll">
    <div class="list__inner layout__3column">
      <?php
      ?>
      
      <?php
      /*
       * プラグイン「WordPress Popular Posts」を有効にするとある関数
       */
      if (function_exists('wpp_get_mostpopular')) {
        
        // よく読まれる記事リスト
        $arg_wpp = array (
          'limit' => 9,    // 記事を表示する最大件数
          'range' => 'monthly',   // 集計期間。 daily, weekly, monthly, all のいずれかを指定     
          'order_by'  => 'views',   // ソート順の対象。 views(閲覧数), comments(コメント数), avg(1日の平均）のいずれかを指定
          'post_type' => implode($config_category_for_search, ','),    // ポストタイプを指定。post, page, などを指定
        );

        wpp_get_mostpopular($arg_wpp);
      }
      ?>
      
    </div>
  </div>
</section>

<section class="section section--common section section--bar">
  <div class="section__header">
    <h1>新着記事</h1>
  </div>
  
  <div class="list list--01 list--smp-scroll">
    <div class="list__inner layout__3column">
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




