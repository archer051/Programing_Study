<?php
// 세션 시작
session_start();
?>

<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>세션 시작 페이지</title>
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
  이 페이지에서 구입하면 쿠폰 할인이 적용됩니다. <br>
  <?php
  // 세션 변수에 값을 대입한다
  $_SESSION["coupon"] = "ABC123";
  ?>
  <a href="goal_page.php">다음 페이지로</a>
</div>
</body>
</html>
