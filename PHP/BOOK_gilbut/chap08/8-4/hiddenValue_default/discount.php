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
  // 문자 인코딩 검증
  if (!cken($_POST)){
    $encoding = mb_internal_encoding();
    $err = "Encoding Error! The expected encoding is " . $encoding ;
    // 오류 메시지를 표시하고 더 이상 실행하지 않고 종료한다
    exit($err);
  }
  // HTML이스케이프(XSS 대응)
  $_POST = es($_POST);
?>

<?php
  // 오류 메시지를 넣는 배열
  $errors = [];
  // 할인율 입력값(숨김 필드)
  if(isset($_POST['discount'])) {
    $discount = $_POST['discount'];
    // 입력값 확인
    if (!is_numeric($discount)){
      // 수치가 아닐 때 오류
      $errors[] = "할인율 수치 오류";
    }
  } else {
    // 미설정 오류
    $errors[] = "할인율이 미설정";
  }
  // 단가 입력값(숨김 필드)
  if(isset($_POST['unitPrice'])) {
    $unitPrice = $_POST['unitPrice'];
    // 입력값 확인
    if (!ctype_digit($unitPrice)){
      // 정수가 아닐 때 오류
      $errors[] = "단가 수치 오류";
    }
  } else {
    // 미설정 오류
    $errors[] = "단가가 미설정";
  }
?>

<?php
  // 개수 입력값
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
  // 오류가 있을 때(소수점은 버림)
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
  echo "(할인-{$off_price_fmt}원, {$off_per}% OFF)", "<br>";
}
?>

<!-- 돌아가기 버튼 폼 -->
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
