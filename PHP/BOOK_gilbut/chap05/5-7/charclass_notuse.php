<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>문자 클래스를 사용하지 않는 정규표현</title>
</head>
<body>
<pre>
<?php
// 빨간 구슬에 일치한다
$pattern = "/빨간 구슬/u";
var_dump(preg_match($pattern, "빨간 구슬입니다"));
var_dump(preg_match($pattern, "파란 구슬입니다"));
var_dump(preg_match($pattern, "빨간 상자입니다"));
?>
</pre>
</body>
</html>
