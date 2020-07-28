<?php
  // echo ("session_path := ".session_save_path()."<br>");
  session_start();
  

  $_SESSION['coupon'] = "ABC123";
  $_SESSION['price'] = "10000원";
  $_SESSION['count'] = "30개";
?>

<a href="session_get.php">세션 값 읽기</a><br>
<a href="session_delete.php">세션 지우기</a>