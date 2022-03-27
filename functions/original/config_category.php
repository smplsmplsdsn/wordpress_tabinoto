<?php
$config_category = array(
  'カメラ・ガジェット' => 'gadget',
  'インテリア' => 'interior',
  '東京散歩' => 'discovery',
);

$config_category_for_search = array('post');
foreach($config_category as $key => $val) {
  array_push($config_category_for_search, $val);
}

