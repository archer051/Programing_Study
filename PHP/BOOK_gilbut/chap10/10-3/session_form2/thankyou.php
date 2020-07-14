<?php
require_once("../../lib/util.php");
// 세션 시작
session_start();
// 세션 확인
$error = [];
if (!empty($_SESSION['name']) && !empty($_SESSION['words'])){
  // 세션 변수에서 값을 읽는다
  $name = $_SESSION['name'];
  $words = $_SESSION['words'];
  $dogcat = $_SESSION['dogcat'];
  $dogcatString = implode("를 좋아하고, ", $dogcat) . "를 좋아합니다. ";
} else {
  // 세션 변수가 비었을 때
  $error[] = "세션 오류입니다. ";
}
// HTML을 표시하기 전에 세션을 종료한다
killSession()
?>

<?php
// 세션을 파기한다
function killSession(){
  // 세션 변수의 값을 비운다
  $_SESSION = [];
  // 세션 쿠키를 파기한다
  if (isset($_COOKIE[session_name()])){
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time()-36000, $params['path']);
  }
  // 세션을 파기한다
  session_destroy();
}
?>

<!DOCTYPE html>
<html lang="kr">
<head>
  <meta charset="utf-8">
  <title>완료 페이지</title>
  <link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
  <?php if (count($error)>0){ ?>
    <!-- 오류가 있을 때 -->
    <span class="error"><?php echo implode('<br>', $error); ?></span><br>
    <span>
      <input type="button" value="처음 페이지로 돌아간다" onclick="location.href='input.php'">
    </span>
  <?php } else { ?>
    <!-- 오류가 없을 때 -->
    다음과 같이 받았습니다. 고맙습니다.
    <HR>
    <span>
      이름：<?php echo es($name); ?><br>
      좋아하는 단어: <?php echo es($words); ?><br>
      강아지와 고양이를 좋아하나요?: <?php echo es($dogcatString); ?><br>
      <a href="input.php">처음 페이지로 돌아간다</a>
    </span>
  <?php } ?>
</div>
</body>
</html>
