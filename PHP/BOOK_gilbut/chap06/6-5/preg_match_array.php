<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열을 정규 표현으로 검색한다</title>
</head>
<body>
<pre>
<?php
$nameList = ["이순신", "신사임당", "율곡이이", "장영실"];
$pattern = "/이/";
// 패턴에 매치하는 값을 배열에서 모두 꺼낸다
$result = preg_grep($pattern, $nameList);
echo "해당 " . count($result) . "건\n";
foreach ($result as $value) {
  echo $value , "\n";
}
?>
</pre>
</body>
</html>
