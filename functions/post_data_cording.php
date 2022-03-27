<?php
if ($list_type === "standard") {
?>
<article class="list__unit">
  <div class="list__unit-inner js-link js-link-ajax" href="<?php echo $current_link; ?>">
    <figure data-category="<?php echo $post_category_name; ?>" style="background-image: url(<?php echo $thumbnail_img; ?>);"></figure>
    <div class="list__unit-text">
      <h1><a class="js-link-ajax" href="<?php echo $current_link; ?>"><?php echo $post_title; ?></a></h1>
      <p class="list__unit-excerpt"><?php echo $head_description; ?>(テキスト: <?php echo $post_author_name; ?>)</p>
      <p class="list__unit-spec">
        <time datetime="<?php echo $post_time; ?>"><?php echo $post_date; ?></time><span><?php echo $post_category_name; ?></span>
      </p>
    </div>
  </div>
</article>
<?php
}