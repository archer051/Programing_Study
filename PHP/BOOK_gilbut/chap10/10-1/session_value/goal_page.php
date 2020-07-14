<?php
require_once("../../lib/util.php");
// 세션 시작
session_start();
?>

<!DOCTYPE html>
<html lang="kr">
<head>
  <meta charset="utf-8">
  <title>확인페이지</title>
  <link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
  <?php
    // 세션 변수를 알아본다
    if(isset($_SESSION["coupon"])){
      // 쿠폰코드를 꺼낸다
      $coupon = $_SESSION["coupon"];
      // 올바른 쿠폰 코드
      $couponList = ["ABC123", "XYZ999"];
      // 쿠폰 코드를 확인한다
      if (in_array($coupon, $couponList)){
        echo es($coupon), "는 사용할 수 있는 쿠폰 코드입니다. ";
      } else {
        echo es($coupon), "는 사용할 수 없는 쿠폰 코드입니다. ";
      }
    } else {
      echo "세션 오류입니다. ";
    }
   ?>
</div>
</body>
</html>
