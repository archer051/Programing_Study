<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>var_dump의 출력</title>
</head>
<body>
<?php
$msg = "안녕";  // 문자열
$colors = array("red", "blue", "green");  // 배열
$now = new DateTime();  // DateTime 객체
$point = 45;   // 정수
$isPass = ($point>80);  // 논리값
$userName;   // 값 없음
var_dump($msg);
var_dump($colors);
var_dump($now);
var_dump($point);
var_dump($isPass);
var_dump($userName)
?>
</body>
</html>
