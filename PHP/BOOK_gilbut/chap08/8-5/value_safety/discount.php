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
  // HTML 이스케이프(XSS 대책）
  $_POST = es($_POST);
?>

<?php
  // 오류 메세지를 넣는 배열
  $errors = [];
  // 쿠폰 코드
  if (isset($_POST['couponCode'])) {
    $couponCode = $_POST['couponCode'];
  } else {
    // 미설정 오류
    $couponCode = "";
  }
  // 상품 ID
  if (isset($_POST['goodsID'])) {
    $goodsID = $_POST['goodsID'];
  } else {
    // 미설정 오류
    $goodsID = "";
  }
?>

<?php
  // 판매 데이터를 읽어 들인다
  require_once("saleData.php");
  // 할인율과 단가
  $discount = getCouponRate($couponCode);
  $unitPrice = getPrice($goodsID);
  // 할인율과 단가에 값이 있는지 없는지를 체크한다
  if (is_null($discount)||is_null($unitPrice)){
    // 오류 메세지를 표시하고 다음 코드를 전부 취소한다
    $err = '<div class="error">잘못된 조작이 있습니다. </div>';
    exit($err);
  }
?>

<?php
  // 개수의 입력값
  if(isset($_POST['quantity'])) {
    $quantity = $_POST['quantity'];
    // 입력값 확인
    if (!ctype_digit($quantity)){
      // 정수가 아닐 때 오류
      $errors[] = "개수는 정수로 입력해주세요. ";
    }
  } else {
    // 미설정 오류
    $errors[] = "개수가 미설정";
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
  // 오류가 없을 때(소수점은 버린다)
  $price = $unitPrice * $quantity;
  $discount_price = floor($price * $discount);
  $off_price = $price - $discount_price;
  $off_per = (1 - $discount)*100;
  // ３자릿수
  $unitPrice_fmt = number_format($unitPrice);
  $discount_price_fmt = number_format($discount_price);
  $off_price_fmt = number_format($off_price);
  // 표시한다
  echo "단가：{$unitPrice_fmt}원, ", "개수：{$quantity}개", "<br>";
  echo "금액：{$discount_price_fmt}원", "<br>";
  echo "（할인：-{$off_price_fmt}원, {$off_per}% OFF)", "<br>";
}
?>

<!-- 돌아가기 버튼 폼 -->
  <form method="POST" action="discountForm.php">
    <!-- 숨김 필드에 개수를 설정해 POST한다 -->
    <input type="hidden" name="quantity" value="<?php echo $quantity; ?>">
    <ul>
      <li><input type="submit" value="돌아가기"></li>
    </ul>
  </form>

</div>
</body>
</html>
