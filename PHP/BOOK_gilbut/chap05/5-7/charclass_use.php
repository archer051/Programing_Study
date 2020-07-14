<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>문자 클래스를 사용한다</title>
</head>
<body>
<pre>
<?php
// 빨강구슬, 파랑구슬, 녹색구슬 중 하나에 일치한다
$pattern = "/[빨강파랑녹색]구슬/u";
var_dump(preg_match($pattern, "그것은 빨강구슬입니다"));
var_dump(preg_match($pattern, "파랑구슬이 2개입니다"));
var_dump(preg_match($pattern, "녹색구슬이었습니다"));
var_dump(preg_match($pattern, "녹색상자였습니다"));
?>
</pre>
</body>
</html>
