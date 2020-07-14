<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>문자 클래스 범위</title>
</head>
<body>
<pre>
<?php
// A1~F9에 일치한다
$pattern = "/[A-F][1-9]/u";
var_dump(preg_match($pattern, "B8"));
var_dump(preg_match($pattern, "G7"));
var_dump(preg_match($pattern, "D6"));
var_dump(preg_match($pattern, "a2"));
var_dump(preg_match($pattern, "1A"));
?>
</pre>
</body>
</html>
