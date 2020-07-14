<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>문자 클래스 범위</title>
</head>
<body>
<pre>
<?php
// 대문자-숫자-영문자에 일치한다
$pattern = "/[A-F]-[0-9]-[0-9a-zA-Z]/u";
var_dump(preg_match($pattern, "A-5-5"));
var_dump(preg_match($pattern, "F-9-c"));
var_dump(preg_match($pattern, "G-17-10"));
var_dump(preg_match($pattern, "a-2-9"));
?>
</pre>
</body>
</html>
