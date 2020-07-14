<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열을 정규 표현으로 검색한다</title>
</head>
<body>
<pre>
<?php
$data = ["R5", "E2", "E6", "A8", "R1", "G8"];
$pattern = "/['A'|'R']/";
// 패턴에 매치하지 않는 값을 배열에서 모두 꺼낸다
$result = preg_grep($pattern, $data, PREG_GREP_INVERT);
echo "해당하지 않는다 " . count($result) . "건\n";
// 값을 개행으로 연결해 문자열로 한다
$resultString = implode("\n", $result);
echo $resultString;
// foreach ($result as $value) {
//   echo $value , "\n";
// }
?>
</pre>
</body>
</html>
