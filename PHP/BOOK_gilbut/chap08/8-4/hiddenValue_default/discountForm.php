<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>할인율 구입 페이지</title>
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
      // 오류 메시지를 표시하고 더 이상 실행하지 않고 종료한다
      exit($err);
    }
    // HTML 이스케이프(XSS 대응)
    $_POST = es($_POST);
  ?>

  <?php
    /* 재입력하면 이전 값을 초기화한다  */
    // 개수에 값이 있는지 없는지
    if (isset($_POST['quantity'])){
      $quantity = $_POST['quantity'];
    } else {
      $quantity = "";
    }
  ?>

  <?php
    // 할인율
    $discount = 0.8;
    $off = (1 - $discount)*100;
    if ($discount>0){
      echo "<h2>이 페이지에서 구입하면 {$off}% OFF입니다! </h2>";
    }
    // 단가 설정
    $unitPrice = 2900;
    // ３자릿수
    $unitPrice_fmt = number_format($unitPrice);
   ?>

  <!-- 입력폼을 만든다 -->
  <form method="POST" action="discount.php">
    <!-- 숨김 필드에 할인율과 단가를 설정해 POST한다 -->
    <input type="hidden" name="discount" value="<?php echo $discount; ?>">
    <input type="hidden" name="unitPrice" value="<?php echo $unitPrice; ?>">
    <ul>
      <li><label>단가: <?php echo $unitPrice_fmt; ?>원</label></li>
      <li><label>개수: 
        <input type="number" name="quantity" value="<?php echo $quantity; ?>">
      </label></li>
      <li><input type="submit" value="계산한다"></li>
    </ul>
  </form>
</div>
</body>
</html>
