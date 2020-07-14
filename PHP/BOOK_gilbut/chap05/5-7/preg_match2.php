<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>정규표현의 기본</title>
</head>
<body>
<pre>
<?php
// 검색하고 있는 번호는 [4?-49]
$result1 = preg_match("/4.-49/u", "확실히 49-46이었습니다");
$result2 = preg_match("/4.-49/u", "아마도 46-49였다");
$result3 = preg_match("/4.-49/u", "41-49인가?");
// 결과
var_dump($result1);
var_dump($result2);
var_dump($result3);
?>
</pre>
</body>
</html>
