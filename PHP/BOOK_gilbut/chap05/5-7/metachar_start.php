<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>메타 문자 시작</title>
</head>
<body>
<pre>
<?php
// 김으로 시작하는 이름에 일치한다
$pattern = "/^김/u";
var_dump(preg_match($pattern, "김유신"));
var_dump(preg_match($pattern, "김유리"));
var_dump(preg_match($pattern, "신사임당"));
var_dump(preg_match($pattern, "장영실, 김춘추"));
?>
</pre>
</body>
</html>
