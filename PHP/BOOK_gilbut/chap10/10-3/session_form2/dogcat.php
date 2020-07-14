<?php
// 세션 시작
session_start();
require_once("../../lib/util.php");

// $_POST 변수에 값이 있으면 세션 변수에 전달한다
if (isset($_POST['name'])){
  $_SESSION['name'] = $_POST['name'];
}
if (isset($_POST['words'])){
  $_SESSION['words'] = $_POST['words'];
}
// 세션 변수에 값이 있으면 전달한다
if (empty($_SESSION['dogcat'])){
  $dogcat = [];
} else {
  $dogcat = $_SESSION['dogcat'];
}
?>

<?php
// 초기값으로 확인할지
function checked($value, $question){
  if (is_array($question)){
    // 배열일 때 값이 포함되어 있으면 true
    $isChecked = in_array($value, $question);
  } else {
    // 배열이 아닐 때 값이 일치하면 true
    $isChecked = ($value===$question);
  }
  if ($isChecked) {
    // 확인한다
    echo "checked";
  } else {
    echo "";
  }
}
?>

<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>강아지와 고양이의 선호도 조사</title>
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
  설문 조사(2 / 2)<br>
  <form method="POST" action="confirm.php">
    <ul>
      <li><span>강아지를 좋아하나요? 고양이를 좋아하나요?</span><br>
      <label><input type="checkbox" name="dogcat[]" value="강아지" <?php checked("강아지", $dogcat); ?> >강아지가 좋아요</label><br>
      <label><input type="checkbox" name="dogcat[]" value="고양이" <?php checked("고양이", $dogcat); ?> >고양이가 좋아요</label>
      </li>
      <input type="button" value="돌아가기" onclick="location.href='input.php'">
      <input type="submit" value="확인한다">
    </ul>
  </form>
</div>
</body>
</html>
