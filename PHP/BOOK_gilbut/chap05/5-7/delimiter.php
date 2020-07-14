<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>정규표현의 기본</title>
</head>
<body>
<pre>
<?php
$filepath = "/goods/image/cat/";
// 단락 문자가 슬래시인 경우
var_dump(preg_match("/\/image\//u", $filepath));
// 단락 문자가 #인 경우
var_dump(preg_match("#/image/#u", $filepath));
?>
</pre>
</body>
</html>
