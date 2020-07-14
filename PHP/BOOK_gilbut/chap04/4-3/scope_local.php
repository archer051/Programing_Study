<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>오류 코드</title>
</head>
<body>
<?php
// 개수
$quantity = 2;

// 요금을 계산한다
function price(){
  $price = 250 * $quantity;
  echo " {$price}원입니다. ";
}
// 실행한다
echo "{$quantity}개에";
price();
?>
