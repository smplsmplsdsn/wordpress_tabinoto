<div class="section section--bar">
  <div class="section__header">
    <h1><?php echo $headline; ?></h1>
    <p><?php echo $excerpt; ?></p>
  </div>
  <div class="list list--02">
    <div class="list__inner">
      <?php
      for ($i = 0; $i < 20; $i++) {
      ?>
        <article class="list__unit">
          <div class="list__unit-inner js-link js-link-ajax" href="/article/hello-world/">
            <figure data-category="カテゴリ名"></figure>
            <div class="list__unit-text">
              <h1><a class="js-link-ajax" href="/article/hello-world/">タイトルテキストタイトルテキストタイトルテキスト</a></h1>
              <p class="list__unit-excerpt">これはテキストテキストテキストこれはテキストテキストテキストこれはテキストテキストテキストこれはテキストテキストテキスト...(テキスト:たけたけ)</p>
              <p class="list__unit-spec">
                <time>2022-4-1</time><span>カテゴリ名</span>
              </p>
            </div>
          </div>
        </article>
      <?php
      }
      ?>
    </div>
  </div>
</div>