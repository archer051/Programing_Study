<?php
  session_start();

  $coupon = $_SESSION['coupon'];
  $price = $_SESSION['price'];
  $count = $_SESSION['count'];

  $price_num = (int)str_replace('원', '', $price);
  $count_num = (int)str_replace('개', '', $count);
  $total_price = $price_num * $count_num;
?>

Coupon Code : <?= $coupon ?><br>
Coupon Price : <?= $price ?><br>
Coupon Count : <?= $count ?><br>
Total  Price : <?= $total_price ?>원<br>

<a href="session_set.php">세션 값 쓰기</a><br>
<a href="session_delete.php">세션 지우기</a>