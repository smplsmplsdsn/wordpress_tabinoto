<html>
  <head lang="ja">
    <?php if ($is_honban): ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-63693007-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-63693007-1');
    </script>
    <?php endif; ?>
    
    <meta charset="utf-8">
    <title><?php echo $head_title; ?></title>    
    <meta name="robots" content="ALL">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="<?php echo $head_description; ?>">
    <meta property="og:image" content="<?php echo $head_ogp_img; ?>">
    <link rel="manifest" href="<?php echo ASSETS_PATH; ?>/manifest/manifest.json">  
    <link rel="shortcut icon" href="<?php echo ASSETS_PATH; ?>/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo ASSETS_PATH; ?>/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>/icomoon/style.css?t=<?php echo filemtime(ASSETS_LOOT."/icomoon/style.css"); ?>">
    <link rel="stylesheet" href="<?php echo SMPLSMPLS_ASSETS_PATH; ?>/css/tabinoto.min.css?t=<?php echo filemtime(SMPLSMPLS_ASSETS_LOOT."/css/tabinoto.min.css"); ?>">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
    
    <link rel="canonical" href="<?php echo $current_link; ?>">
    <?php wp_head(); ?>
  </head>  
  <body class="layout">
    <div class="wrapper">
      <?php include_once($theme_dir."/include/parts-header.php"); ?>
      <?php include_once($theme_dir."/include/parts-nav.php"); ?>      

      <div class="layout__main-sub">        
        <main class="main">          
          <div class="content show js-content<?php echo $content_class; ?>">
            <?php include_once($theme_dir."/include/content/".$content_type.".php"); ?>
          </div>
          <?php include_once($theme_dir."/include/parts-common-01.php"); ?>
        </main>        
        <?php include_once($theme_dir."/include/parts-sub.php"); ?>
      </div>
    </div>
    
    <p class="pagetop js-pagetop-btn pagetop">
      <a class="pagetop__link js-link-pagetop">
        <span class="icon-up"></span>
      </a>
    </p>
    
    <?php include_once($theme_dir."/include/parts-footer.php"); ?>
        
    <div class="bg js-bg"></div>
    
    <script>
      const DOMAIN = '<?php echo DOMAIN; ?>';
    </script>
    <script src="<?php echo SMPLSMPLS_ASSETS_PATH; ?>/js/tabinoto.min.js?t=<?php echo filemtime(SMPLSMPLS_ASSETS_LOOT."/js/tabinoto.min.js"); ?>"></script>
    <?php wp_footer(); ?>    
  </body>
</html>
