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
      <time class="main__time" datetime="<?php echo $post_time; ?>">
        <span class="main__time-day"><?php echo $post_date_day; ?></span>
        <span class="main__time-month"><?php echo $post_date_month; ?></span>
        <span class="main__time-year"><?php echo $post_date_year; ?></span>
      </time>
      <h1 class="main__title"><?php the_title(); ?></h1>
    </div>
    <p class="main__complete-info" title="1分間に読む文字数を<?php echo $body_one_minute_letter; ?>字として計算しています">本文<?php echo $body_length; ?>字(読むのにかかる時間 およそ<?php echo $body_time; ?>分)</p>
    <div class="body main__body">
      <?php the_content(); ?>
    </div>
    <aside class="main__author">
      <p class="main__author-title"><span>この記事を書いた人</span></p>
      <div class="main__author-content">
        <figure class="main__author-figure" style="background-image:url(<?php the_field('profile-image', 'user_'.$post_author_id); ?>);"></figure>
        <div class="main__author-text">
          <h1 class="main__author-name"><?php echo $post_author_name; ?></h1>
          <p class="main__author-excerpt"><?php echo the_field('profile-image', $post_author_id); ?><?php echo get_the_author_meta('user_description', $post_author_id); ?></p>
          <ul class="main__author-sns sns-list">
            <?php
            $author_sns_array = ['twitter', 'instagram', 'youtube', 'tiktok', 'facebook', 'website'];
            foreach ($author_sns_array as $author_sns) {
              $author_sns_data = trim(get_field('profile-'.$author_sns, 'user_'.$post_author_id));
              if ($author_sns_data != '') {
                echo '<li><a class="sns-'.$author_sns.'" href="'.$author_sns_data.'"><span class="icon-'.$author_sns.'"></span></a></li>';
              }            
            }
            ?>
          </ul>
        </div> 
      </div>
    </aside>
  </main>

  <?php include($theme_dir."/include/parts-comment.php"); ?>
  <?php
  include($theme_dir."/include/module/prevnext-samecategory.php");

  // カスタム投稿の場合 
  // include($theme_dir."/include/module/prevnext-all.php");
  ?>
</div>
