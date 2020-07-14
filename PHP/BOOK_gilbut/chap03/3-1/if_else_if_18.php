<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>나이에 따라서 요금을 나눈다</title>
</head>
<body>
<?php
$age = 18; // 나이가 18세인 경우
if ($age<13) {
  $price = 0;
} elseif ($age<=15) {
  $price = 500;
} elseif ($age<=19) {
  $price = 1000;
} else {
  $price = 2000;
}
echo "{$age}세이므로 {$price}원입니다."
?>
</body>
</html>
