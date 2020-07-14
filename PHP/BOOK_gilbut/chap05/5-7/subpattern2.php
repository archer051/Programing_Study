<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>메타 문자 서브 패턴</title>
</head>
<body>
<pre>
<?php
// 휴대 전화 번호에 일치한다
$pattern = "/(010|011|070)(-?\d{4}){2}/u";
var_dump(preg_match($pattern, "010-1234-5678"));
var_dump(preg_match($pattern, "011-1234-5678"));
var_dump(preg_match($pattern, "07012345678"));
var_dump(preg_match($pattern, "12345678"));
?>
</pre>
</body>
</html>
