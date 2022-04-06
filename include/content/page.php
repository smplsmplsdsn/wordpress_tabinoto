<?php
$sns_link_twitter = 'https://twitter.com/share?url='.rawurlencode(get_permalink()).'&text='.rawurlencode(get_the_title().'【たびのと】');
$sns_link_facebook = 'https://www.facebook.com/sharer/sharer.php?u='.rawurlencode(get_permalink());
$sns_link_line = 'https://line.me/R/msg/text/?'.rawurlencode('【たびのと】'.get_the_title().' '.get_permalink());

$body_check_array = array(' ', '　', "。", "、", "\t");
$body_text = strip_tags(get_the_content());
$body_text = str_replace($body_check_array, '', $body_text);
$body_length = mb_strlen($body_text);
$body_one_minute_letter = 500;
$body_time = ceil($body_length/$body_one_minute_letter);
?>
<div class="layout__post">
  <main class="main">
    <?php if ($post_img != ''): ?>
    <figure class="main__mainvisual js-mainvisual" data-src="<?php echo $post_img; ?>"></figure>
    <?php endif; ?>
    <div class="main__header">
      <h1 class="main__title"><?php the_title(); ?></h1>
    </div>
    <div class="body main__body">
      <?php the_content(); ?>
    </div>
  </main>
</div>

