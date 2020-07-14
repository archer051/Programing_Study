<!DOCTYPE html>
<html lang="kr">
<head>
  <meta charset="utf-8">
  <title>금액 계산</title>
  <link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
<?php
  require_once("../../lib/util.php");
  // 문자 인코드 검증
  if (!cken($_POST)){
    $encoding = mb_internal_encoding();
    $err = "Encoding Error! The expected encoding is " . $encoding ;
    // 오류 메시지를 표시하고 다음 코드를 전부 취소한다
    exit($err);
  }
  // HTML 이스케이프(XSS 대응)
  $_POST = es($_POST);
?>

<?php
  // 오류 메시지를 넣는 배열
  $errors = [];
  // 보이지 않는 폼에서의 입력값
  $discount = $_POST['discount'];
  $unitPrice = $_POST['unitPrice'];
  // 폼 입력 값
  $quantity = $_POST['quantity'];
?>

<?php
  // 입력 값 확인
  if (!ctype_digit($quantity)){
    // 정수가 아닐 때 오류
    $errors[] = "개수는 정수로 입력해주세요. ";
  }
?>

<?php
if (count($errors)>0){
  // 오류가 있을 때
  echo '<ol class="error">';
  foreach ($errors as $value) {
    echo "<li>", $value , "</li>";
  }
  echo "</ol>";
} else {
  // 오류가 없을 때(소수점은 버림)
  $price = $unitPrice * $quantity;
  $discount_price = floor($price * $discount);
  $off_price = $price - $discount_price;
  $off_per = (1 - $discount)*100;
  // ３자릿수
  $unitPrice_fmt = number_format($unitPrice);
  $discount_price_fmt = number_format($discount_price);
  $off_price_fmt = number_format($off_price);
  // 표시한다
  echo "단가: {$unitPrice_fmt}원, ", "개수：{$quantity}개", "<br>";
  echo "금액: {$discount_price_fmt}원", "<br>";
  echo "（할인: -{$off_price_fmt}円、{$off_per}% OFF)", "<br>";
}
?>

<!-- 돌아가는 버튼 폼 -->
  <form method="POST" action="discountForm.php">
    <!-- 보이지 않는 입력에 개수를 설정해 POST한다 -->
    <input type="hidden" name="quantity" value="<?php echo $quantity ?>">
    <ul>
      <li><input type="submit" value="돌아가기"></li>
    </ul>
  </form>

</div>
</body>
</html>
