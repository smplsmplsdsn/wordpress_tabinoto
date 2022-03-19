<style>
  .test {
    padding: 2rem;
    line-height: 1.5;
  }
</style>
<div class="test">
<h1>Single Page Applicationとして機能するかテスト用リンク</h1>
<p>前提条件</p>
<ul>
  <li>設定 > パーマリンク設定 で共通設定をカスタム構造の「/%category%/%postname%/」にする</li>
  <li>プラグイン「No Category Base (WPML)」を新規インストールして、有効化する</li>
</ul>
<h2>インストール直後の状態でテスト</h2>
<ul>
  <li><a class="js-link-ajax" href="/">ホーム</a></li>
  <li><a class="js-link-ajax" href="/uncategorized/">カテゴリ</a></li>
  <li><a class="js-link-ajax" href="/uncategorized/hello-world/">記事ページ</a></li>
  <li><a class="js-link-ajax" href="/sample-page/">固定ページ</a></li>
  <li><a class="js-link-ajax" href="/?s=abc">検索</a></li>
</ul>
</div>