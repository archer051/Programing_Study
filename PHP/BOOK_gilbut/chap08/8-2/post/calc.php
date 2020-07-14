<!DOCTYPE html>
<html lang="kr">
<head>
  <meta charset="utf-8">
  <title>폼 입력 값으로 계산한다</title>
  <link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
<?php
  // 폼 입력 값을 구한다(단가와 개수)
  $unitPrice = $_POST["unitPrice"];
  $quantity = $_POST["quantity"];
  // 계산한다
  $price = $unitPrice * $quantity;
  // 표시한다(３자릿수)
  $quantity = number_format($unitPrice);
  $price = number_format($price);
  echo "단가 {$unitPrice}원 × {$quantity}개는 {$price}원입니다. "
?>
</div>
</body>
</html>
