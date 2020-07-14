<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>4명으로 나눌 경우 금액 구하기</title>
</head>
<body>
<?php
$amount = 54750;
$rest = $amount % 4;
$person = ($amount - $rest)/4;
echo "１인 {$person}원, 부족 {$rest}원";
?>
</body>
</html>
