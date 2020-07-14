<?php
// 세션 시작
session_start();
require_once("../../lib/util.php");
?>

<?php
// 문자 인코드 검증
if (!cken($_POST)){
  $encoding = mb_internal_encoding();
  $err = "Encoding Error! The expected encoding is " . $encoding ;
  $isError = true;
  // 오류 메시지를 표시하고 다음 코드를 전부 취소합니다
  exit($err);
}
?>

<?php
// 입력 데이터를 읽고 확인
$error = [];
// 세션 변수에 값이 있으면 전달 받는다
if (empty($_SESSION['name'])){
  $error[] = "이름을 입력해주세요. ";
} else {
  $name = $_SESSION['name'];
}
if (empty($_SESSION['words'])){
  $error[] = "좋아하는 단어를 입력해주세요. ";
} else {
  $words = $_SESSION['words'];
}

// $_POST 변수에 값이 있으면 세션 변수에 전달합니다
if (isset($_POST['dogcat'])){
  $dogcat = $_POST['dogcat'];
  $_SESSION['dogcat'] = $dogcat;
  // 값 확인
  $diffValue = array_diff($dogcat, ["강아지", "고양이"]);
  // 규정 외의 값이 포함되지 않으면 OK
  if (count($diffValue)>0){
    $error[] = "강아지와 고양이의 선호도 조사 응답에 오류가 있습니다. ";
  }
  $dogcatString = implode("를 좋아하고, ", $dogcat) . "를 좋아합니다. ";
} else {
  $dogcatString = "모두 좋아하지 않습니다. ";
  $_SESSION['dogcat'] = [];
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
    <input type="button" value="돌아가기" onclick="location.href='input.php'">
  </span>
<?php } else { ?>
  <!-- 오류가 없을 때 -->
  <span>
    이름：<?php echo es($name); ?><br>
    좋아하는 단어: <?php echo es($words); ?><br>
    강아지와 고양이 좋아하나요?: <?php echo es($dogcatString); ?><br>
    <input type="button" value="수정한다" onclick="location.href='input.php'">
    <input type="button" value="송신한다" onclick="location.href='thankyou.php'">
  </span>
<?php } ?>
</form>
</div>
</body>
</html>
