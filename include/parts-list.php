<div class="section section--bar">
  <div class="section__header">
    <h1><?php echo $headline; ?></h1>
    <p><?php echo $excerpt; ?></p>
  </div>
  <div class="list list--02">
    <div class="list__inner">      
      <?php
      $list_type = 'standard';      
      if (have_posts()){
        while(have_posts()){    
          the_post();
          include($theme_dir."/functions/post_data_core.php");
        }
      }      
      unset($list_type);    // データタイプの削除      
      ?>
    </div>
  </div>
</div>