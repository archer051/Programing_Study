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
$search = array("p", "e");
// 대상 문자열
$subject = "a piece of the apple pie";
// 대문자 소문자를 구분하지 않고 바꾼다
$result = str_ireplace($search, "?", $subject, $count);
echo "바꾸기 전：{$subject}", "\n";
echo "바꾼 후：{$result}", "\n";
echo "개수：{$count}";
?>
</pre>
</body>
</html>
