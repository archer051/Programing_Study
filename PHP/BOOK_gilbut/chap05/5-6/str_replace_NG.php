<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>문자 검색 바꾸기</title>
</head>
<body>
<pre>
<?php
// 검색문자
$search = ["XG", "P10"];
// 바꿀 문자
$replace = ["XP","P10a"];
// 대상 문자열
$subject = "XG90, XG100, P10, P15";
$result = str_replace($search, $replace, $subject);
echo "바꾸기 전：{$subject}", "\n";
echo "바꾼 후：{$result}";
?>
</pre>
</body>
</html>
