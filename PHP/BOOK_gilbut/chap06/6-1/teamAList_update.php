<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>이름 목록</title>
</head>
<body>
<pre>
<?php
$teamA = ["김철수", "이민우", "박영배"];
// 인덱스 번호1 값을 변경한다
$teamA[1] = "김민재";
echo $teamA[0], "씨\n";
echo $teamA[1], "씨\n";
echo $teamA[2], "씨\n";
?>
</pre>
</body>
</html>
