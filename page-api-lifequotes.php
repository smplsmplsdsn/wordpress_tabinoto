<?php
header("Content-Type: application/json; charset=utf-8");

$param = '';
if (isset($_GET['exclusion_id'])) {
  $param .= '&exclusion_id='.$_GET['exclusion_id'];
}
if (isset($_GET['id'])) {
  $param .= '&id='.$_GET['id'];
}

$url = 'https://simplesimples.com/api/?class=lifequotes'.$param;

if ($json_data = file_get_contents($url)) {
  echo $json_data;
} else {
  echo '[{"id":4698,"content":"\u5f85\u3063\u3066\u3044\u308b\u3060\u3051\u306e\u4eba\u305f\u3061\u306b\u3082\u4f55\u304b\u304c\u8d77\u3053\u308b\u304b\u3082\u3057\u308c\u306a\u3044\u304c\u3001\u305d\u308c\u306f\u52aa\u529b\u3057\u305f\u4eba\u305f\u3061\u306e\u6b8b\u308a\u7269\u3060\u3051\u3067\u3042\u308b","words_speaker":"\u30a8\u30a4\u30d6\u30e9\u30cf\u30e0\u30fb\u30ea\u30f3\u30ab\u30fc\u30f3","words_info":"\u653f\u6cbb\u5bb6, <span class=\"nowrap\">1809 - 1865<\/span>"}]';
}

