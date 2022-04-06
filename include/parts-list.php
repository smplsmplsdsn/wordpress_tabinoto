<div class="section section--bar">
  <div class="section__header">
    <h1><?php echo $headline; ?></h1>
    <p><?php echo $excerpt; ?></p>
  </div>
  <div class="list list--02">
    <div class="list__inner">      
      <?php
      if (have_posts()){
        while(have_posts()){    
          the_post();
          echo post_data_core(get_the_id(),'standard');
        }
      }      
      ?>
    </div>
  </div>
</div>