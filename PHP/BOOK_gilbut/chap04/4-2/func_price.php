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
?>
</body>
</html>
