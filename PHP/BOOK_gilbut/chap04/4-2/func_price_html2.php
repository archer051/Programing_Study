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

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>사용자 정의 함수를 HTML 코드에 넣는다</title>
</head>
<body>
4,000원을 2개 구입할 시 금액은
<?php
$price1 = price(4000, 2);
echo "{$price1}원"
?>
<br>

2500원을 5개 구입할 시 금액은
<?php
$price2 = price(2500, 5);
echo "{$price2}원";
?>
</body>
</html>
