<?php
require_once("../../lib/util.php");
?>

<!DOCTYPE html>
<html lang="kr">
<head>
  <meta charset="utf-8">
  <title>쿠키 확인 페이지</title>
  <link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
  <?php
  // 쿠키 변수를 알아본다
  echo "쿠키를 확인했습니다. ", "<br>";
  if(isset($_COOKIE["message"])){
    // 쿠키 값을 읽는다
    $message = $_COOKIE["message"];
    echo "쿠키 값：", es($message), "<hr>";
    echo  '<a href="delete_cookie.php">쿠키를 삭제한다</a>';
  } else {
    echo "쿠키는 없습니다. ", "<hr>";
    echo '<a href="set_cookie.php">쿠키를 설정하는 페이지로</a>';
  }
  ?>
</div>
</body>
</html>
