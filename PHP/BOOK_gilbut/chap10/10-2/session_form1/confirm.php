<?php
require_once("../../lib/util.php");
// 세션 시작
session_start();
?>

<?php
// 문자 인코드 검증
if (!cken($_POST)){
  $encoding = mb_internal_encoding();
  $err = "Encoding Error! The expected encoding is " . $encoding ;
  // 오류 메시지를 표시하고 다음의 코드를 전부 삭제한다
    exit($err);
}
?>

<?php
// POST된 값을 세션 변수로 전달한다
if (isset($_POST['name'])){
  $_SESSION['name'] = $_POST['name'];
}
if (isset($_POST['words'])){
  $_SESSION['words'] = $_POST['words'];
}
// 입력 데이터 읽기와 확인
$error = [];
// 이름
if (empty($_SESSION['name'])){
  // 설정하지 않으면 오류
  $error[] = "이름을 입력해주세요. ";
} else {
  // 이름을 구한다
  $name = trim($_SESSION['name']);
}
// 좋아하는 단어
if (empty($_SESSION['words'])){
  // 설정하지 않으면 오류
  $error[] = "좋아하는 단어를 입력해주세요. ";
} else {
  // 좋아하는 단어를 꺼낸다
  $words = trim($_SESSION['words']);
}
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
  <form>
  <?php if (count($error)>0){ ?>
    <!-- 오류가 있을 때 -->
    <span class="error"><?php echo implode('<br>', $error); ?></span><br>
    <span>
      <input type="button" value="돌아가기" onclick="location.href='input.html'">
    </span>
  <?php } else { ?>
    <!-- 오류가 없을 때 -->
    <span>
      이름：<?php echo es($name); ?><br>
      좋아하는 단어：<?php echo es($words); ?><br>
      <input type="button" value="돌아가기" onclick="location.href='input.html'">
      <input type="button" value="송신한다" onclick="location.href='thankyou.php'">
    </span>
  <?php } ?>
  </form>
</div>
</body>
</html>
