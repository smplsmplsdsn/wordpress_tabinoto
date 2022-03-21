<section class="sub__section section">
  <div class="section__header">
    <h1>新着記事</h1>
  </div>
  <div class="list list--03">
    <div class="list__inner">
      <?php
      for ($i = 0; $i < 10; $i++) {
      ?>
        <article class="list__unit">
          <div class="list__unit-inner js-link js-link-ajax" href="/uncategorized/hello-world/">
            <figure data-category="カテゴリ名"></figure>
            <div class="list__unit-text">
              <h1><a class="js-link-ajax" href="/uncategorized/hello-world/">タイトルテキストタイトルテキストタイトルテキスト</a></h1>
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
</section>          
