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
    <title>Not Found ページが見つかりませんでした</title>    
    <meta name="robots" content="NONE">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="format-detection" content="telephone=no">
    <style>
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
        overflow: hidden;
        font-family: "Hiragino Sans", "Hiragino Kaku Gothic ProN", Meiryo, "sans-serif";
        line-height: 1.5;
      }
      div {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 100%;
      }
      a {
        text-decoration: none;
      }
      a::before {
        content: '-';
        padding: 0 5px 0 0;
      }
    </style>
  </head>  
  <body>
    <div>
      <h1>Not Found</h1>
      <p>ページが見つかりませんでした。</p>
      <p><a href="/">たびのと</a></p>
    </div>
    
  </body>
</html>
