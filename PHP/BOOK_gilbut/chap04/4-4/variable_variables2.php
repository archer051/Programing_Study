<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>가변변수를 사용해 계산식의 변수를 바꾼다</title>
</head>
<body>
<?php
$unitPrice = 230;
$quantity = 5;
// 변수에 변수명을 넣는다
$danga = "unitPrice";
$gaesu = "quantity";
// 들어 있는 변수명의 변수를 사용해 계산한다
$price = $$danga * $$gaesu;
echo $price . "원";
?>
</body>
</html>
