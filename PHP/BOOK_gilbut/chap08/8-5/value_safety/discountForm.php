<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>할인 구입 페이지</title>
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
    // HTML 이스케이프（XSS 대응）
    $_POST = es($_POST);
  ?>

  <?php
    /* 재입력이라면 이전 값을 초기화한다 */
    // 개수에 값이 있는지 없는지\
    if (isset($_POST['quantity'])){
      $quantity = $_POST['quantity'];
    } else {
      $quantity = "";
    }
  ?>

  <?php
    // 판매 데이터를 읽어 들인다
    require_once("saleData.php");
    // 쿠폰 코드와 상품 ID
    $couponCode = "ha45as";
    $goodsID = "ax102";
    // 할인율과 단가
    $discount = getCouponRate($couponCode);
    $unitPrice = getPrice($goodsID);
    // 할인율과 단가에 값이 있는지 없는지 확인한다
    if (is_null($discount)||is_null($unitPrice)){
      // 오류 메시지를 표시하고 다음 코드를 전부 취소한다
      $err = '<div class="error 잘못된 조작이 있었습니다. </div>';
      exit($err);
    }
  ?>

  <?php
    $off = (1 - $discount)*100;
    if ($discount>0){
      echo "<h2>이 페이지에서 구입하면 {$off}% OFF가 됩니다! </h2>";
    }
    // ３자릿수
    $unitPrice_fmt = number_format($unitPrice);
  ?>

  <!-- 입력 폼을 만든다 -->
  <form method="POST" action="discount.php">
    <!-- 숨김 필드에 쿠폰 코드와 상품 설정해 POST한다 -->
    <input type="hidden" name="couponCode" value="<?php echo $couponCode; ?>">
    <input type="hidden" name="goodsID" value="<?php echo $goodsID; ?>">
    <ul>
      <li><label>단가：<?php echo $unitPrice_fmt; ?>원</label></li>
      <li><label>개수：
        <input type="number" name="quantity" value="<?php echo $quantity; ?>">
      </label></li>
      <li><input type="submit" value="계산한다" ></li>
    </ul>
  </form>
</div>
</body>
</html>
