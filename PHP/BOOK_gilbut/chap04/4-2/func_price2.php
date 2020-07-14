<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>사용자 정의 함수를 사용해 계산한다</title>
</head>
<body>

<?php
function price($unitPrice, $quantity) {
  $shippingfee = 2500;
  $deleveryfee = $unitPrice * $quantity;
  // 10,000원 미만은 배송비 2,500원
  if ($deleveryfee<10000){
    $deleveryfee += $shippingfee;
  }
  return $deleveryfee;
}

// 4,000원을 2개 구입할 시와 2,500원을 5개 구입할 시
$price1 = price(4000, 2);
$price2 = price(2500, 5);
echo "금액1은 {$price1}원" . "<br>" . PHP_EOL;
echo "금액2는 {$price2}원";
?>
</body>
</html>
