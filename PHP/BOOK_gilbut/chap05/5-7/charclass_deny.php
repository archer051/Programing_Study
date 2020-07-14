<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>문자클래스 부정</title>
</head>
<body>
<pre>
<?php
// 파란나무 또는 빨간나무가 아닐 때 일치한다
$pattern = "/[^파란빨간]나무/u";
var_dump(preg_match($pattern, "큰나무"));
var_dump(preg_match($pattern, "파란나무"));
var_dump(preg_match($pattern, "빨간나무"));
var_dump(preg_match($pattern, "빨간나무, 하얀나무"));
?>
</pre>
</body>
</html>
