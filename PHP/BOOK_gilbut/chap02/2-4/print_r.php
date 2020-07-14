<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>print_r()로 배열과 객체의 값을 확인하기</title>
</head>
<body>
<?php
$colors = array("red", "blue", "green");
$now = new DateTime();
print_r($colors);
print_r($now);
?>
</body>
</html>
