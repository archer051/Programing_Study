<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>문자 검색 바꾸기</title>
</head>
<body>
<pre>
<?php
// 검색 문자
$search = ["김과장", "35세"];
// 바꿀 문자
$replace = ["A","x세"];
// 대상 문자열
$subject = "담당은 김과장입니다. 김과장은(는) 35세 남성입니다. ";
$result = str_replace($search, $replace, $subject);
echo "바꾸기 전：{$subject}", "\n";
echo "바꾼 후：{$result}";
?>
</pre>
</body>
</html>
