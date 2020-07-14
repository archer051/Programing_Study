<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>메타 문자 마침표</title>
</head>
<body>
<pre>
<?php
// 서울？？로에 일치한다
$pattern = "/서울..로/u";
var_dump(preg_match($pattern, "서울충정로"));
var_dump(preg_match($pattern, "서울원효로"));
var_dump(preg_match($pattern, "서울구로"));
var_dump(preg_match($pattern, "서울세종대로"));
?>
</pre>
</body>
</html>
