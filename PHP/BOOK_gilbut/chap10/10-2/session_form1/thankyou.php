<?php
require_once("../../lib/util.php");
// 세션시작
session_start();
$error = [];
// 세션 확인
if (!empty($_SESSION['name']) && !empty($_SESSION['words'])){
  // 세션 변수에서 값을 읽는다
  $name = $_SESSION['name'];
  $words = $_SESSION['words'];
} else {
  $error[] = "세션 오류입니다. ";
}
// HTML을 표시하기 전에 세션을 파기한다
killSession();
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
  <title>완료페이지</title>
  <link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
  <?php if (count($error)>0){ ?>
    <!-- 오류가 있을 때 -->
    <span class="error"><?php echo implode('<br>', $error); ?></span><br>
    <a href="input.html">첫 페이지로 돌아간다</a>
  <?php } else { ?>
    <!-- 오류가 없을 때 -->
    <span>
      다음과 같이 받았습니다. 고맙습니다.
      <HR>
      <span>
        이름：<?php echo es($name); ?><br>
        좋아하는 단어: <?php echo es($words); ?><br>
        <a href="input.html">첫 페이지로 돌아가기</a>
      </span>
  <?php } ?>
</div>
</body>
</html>
