<nav class="nav">
  <ul>
    <?php
    foreach ($config_category as $category_name => $category_base) {
      $category_label_class = ($category_base === "gadget")? 'js-link-ajax letter letter--packing': 'js-link-ajax';
    ?>
    <li><a class="<?php echo $category_label_class; ?>" href="/<?php echo $category_base; ?>/"><?php echo $category_name; ?></a></li>
    <?php
    }
    ?>
  </ul>
  <form class="js-form-search" action="/" method="get">
    <input type="text" name="s" value="<?php echo $s; ?>">
  </form>
</nav>
