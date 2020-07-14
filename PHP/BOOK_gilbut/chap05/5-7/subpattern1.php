<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>멘타 문자 반복</title>
</head>
<body>
<pre>
<?php
// 휴대폰 전화 번호에 일치한다
$pattern = "/(010|011|070)-{0,1}[0-9]{4}-{0,1}[0-9]{4}/u";
var_dump(preg_match($pattern, "010-1234-5678"));
var_dump(preg_match($pattern, "011-1234-5678"));
var_dump(preg_match($pattern, "07012345678"));
var_dump(preg_match($pattern, "12345678"));
?>
</pre>
</body>
</html>
