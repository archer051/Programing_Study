<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열의 모든 요소에 함수를 적용한다</title>
</head>
<body>
<pre>
<?php
// 통화 환산하는 콜백 함수
function exchange($value){
  global $rate;
  if ($rate == 0) {
    $rate = 1;
  }
  // 환율을 환산한다
  $exPrice = $value/$rate;
  // 소수점 2자리에서 반올림한다
  $exPrice = round($exPrice*100)/100;
  return $exPrice;
}

// 원화 가격
$priceWon = [23000, 12000, 40000];
// 원／달러 환율
$rate = 1141.00;
// 달러 환산 가격
$priceDollar = array_map("exchange", $priceWon);
print_r($priceDollar);
?>
</pre>
</body>
</html>
