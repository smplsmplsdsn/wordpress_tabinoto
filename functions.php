<?php
// functions/admin/ 直下のphpファイルをすべてて呼び出す
foreach (glob(dirname(__FILE__).'/../../../../../simplesimples/htdocs/wp-content/themes/smplsmpls/functions/admin/{*.php}',GLOB_BRACE) as $file) {
  if (is_file($file)) {
    include_once($file);
  }
}
