<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>오류 코드</title>
</head>
<body>
<?php
// 세금
$tax = 0.1;

// 요금을 계산한다
function taxPrice($unitPrice, $quantity){
  $price = $unitPrice * $quantity * (1+$tax);
  echo "{$price}원입니다. ";
}
// 실행한다
taxPrice(250, 4);
echo "부가세 " . $tax*100 , "%";
?>
</body>
</html>
