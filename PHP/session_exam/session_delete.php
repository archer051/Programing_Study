<?php
  session_start();
  $_SESSION = [];

  if (isset($_COOKIE[session_name()])) 
  {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time()-3600, $params['path']);
  }
  session_destroy();
?>

<a href="session_get.php">세션 값 읽기</a><br>
<a href="session_set.php">세션 값 쓰기</a>