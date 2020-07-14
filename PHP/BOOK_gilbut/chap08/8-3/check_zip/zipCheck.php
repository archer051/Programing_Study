<!DOCTYPE html>
<html lang="kr">
<head>
  <meta charset="utf-8">
  <title>폼 입력 확인</title>
  <link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>

<?php
  require_once("../../lib/util.php");
  // 문자 인코드 검증
  if (!cken($_POST)){
    $encoding = mb_internal_encoding();
    $err = "Encoding Error! The expected encoding is " . $encoding ;
    // 오류 메시지를 표시하고 더 이상 실행하지 않고 종료한다.
    exit($err);
  }
  // HTML 이스케이프(XSS 대응)
  $_POST = es($_POST);
?>

<?php
  // 오류 메시지를 넣는 배열
  $errors = [];
  if(isset($_POST['zip'])){
    // 우편 번호를 읽는다
    $zip = trim($_POST['zip']);
    // 우편 번호 패턴
    $pattern = "/^[0-9]{3}-[0-9]{3}$/";
    if (!preg_match($pattern, $zip)){
      // 우편 번호 형식이 아니다
      $errors[] ="우편 번호를 정확하게 입력해주세요. ";
    }
  } else {
    // 미설정 오류
    $errors[] ="우편번호를 정확하게 입력해주세요. ";
  }
?>

<?php
if (count($errors)>0){
  // 오류가 있을 때
  echo '<ol class="error">';
  foreach ($errors as $value) {
    echo "<li>", $value , "</li>";
  }
  echo "</ol>";
} else {
  // 오류가 없을 때
  echo "우편번호는 {$zip}입니다. ";
}
?>

<!-- 돌아오는 버튼의 폼  -->
  <form method="POST" action="zipCheckForm.php">
    <ul>
      <li><input type="submit" value="돌아가기"></li>
    </ul>
  </form>

</div>
</body>
</html>
