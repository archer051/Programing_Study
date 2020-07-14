<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>메타 문자 반복</title>
</head>
<body>
<pre>
<?php
// 소문자 4~8문자에 일치한다
$pattern = "/[a-z]{4,8}/u";
var_dump(preg_match($pattern, "cycling"));
var_dump(preg_match($pattern, "marathon"));
var_dump(preg_match($pattern, "run"));
var_dump(preg_match($pattern, "SURF"));
?>
</pre>
</body>
</html>
