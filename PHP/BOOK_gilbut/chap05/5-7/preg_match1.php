<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>정규표현 기본</title>
</head>
<body>
<pre>
<?php
// 검색하는 패턴은[46-49]
$result1 = preg_match("/46-49/u", "확실히 49-46이었습니다");
$result2 = preg_match("/46-49/u", "아마도 46-49였다");
$result3 = preg_match("/46-49u", "49-46");
// 결과
var_dump($result1);
var_dump($result2);
var_dump($result3);
?>
</pre>
</body>
</html>
