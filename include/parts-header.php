<header class="header layout__header js-header">
  <div class="searchform js-searchform">
    <form class="js-form-search" action="/" method="get">
      <input type="text" name="s" value="<?php echo $s; ?>">
      <input class="searchform__submit" type="submit" value="検索">
    </form>
  </div>

  <div class="header__inner">
    <a class="header__link js-link js-link-movetosub">
      <span class="icon-down"></span>
    </a>
    <h1 class="header__title">
      <a class="js-link-ajax" href="/">
        <img class="header__logo" src="<?php echo ASSETS_PATH; ?>/images/tabinoto.svg">
      </a>
    </h1>
    <a class="header__link js-link js-link-search-opencloase">
      <span class="icon-search"></span>
    </a>
  </div>
</header>
