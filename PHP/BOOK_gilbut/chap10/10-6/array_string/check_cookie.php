<?php
require_once("../../lib/util.php");
?>

<!DOCTYPE html>
<html lang="kr">
<head>
  <meta charset="utf-8">
  <title>쿠키를 확인한다</title>
  <link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
  <?php
  // 쿠키 값을 꺼낸다
  if (isset($_COOKIE["fruits"])){
    // 방문 로그의 값을 꺼낸다
    $valueString = $_COOKIE["fruits"];
    // 값을 배열로 한다
    $fruits = explode("&", $valueString);
    // HTML 이스케이프한다
    $fruits = es($fruits);
    // 배열의 값을 나열한다
    echo "좋아하는 과일：", "<br>";
    echo implode("<br>", $fruits), "<hr>";
  } else {
    echo "쿠키는 없습니다. ", "<hr>";
  }
  ?>
  <a href="set_cookie.php">돌아가기</a>
</div>
</body>
</html>
