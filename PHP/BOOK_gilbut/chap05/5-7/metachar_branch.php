<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>메타 문자 분기</title>
</head>
<body>
<pre>
<?php
// 서울 또는 제주도에 일치한다
$pattern = "/서울|제주도/u";
var_dump(preg_match($pattern, "서울역"));
var_dump(preg_match($pattern, "제주도공항"));
var_dump(preg_match($pattern, "서울시청"));
var_dump(preg_match($pattern, "남대문"));
?>
</pre>
</body>
</html>
