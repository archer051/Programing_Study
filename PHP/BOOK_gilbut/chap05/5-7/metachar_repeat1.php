<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>메타문자 반복</title>
</head>
<body>
<pre>
<?php
// 숫자 3자릿수-2자릿수에 일치한다
$pattern = "/[0-9]{3}-[0-9]{2}/u";
var_dump(preg_match($pattern, "123-45"));
var_dump(preg_match($pattern, "090-88"));
var_dump(preg_match($pattern, "11-222"));
var_dump(preg_match($pattern, "abc-de"));
?>
</pre>
</body>
</html>
