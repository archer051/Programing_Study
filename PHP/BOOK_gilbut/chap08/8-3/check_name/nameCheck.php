<!DOCTYPE html>
<html lang="kr">
<head>
  <meta charset="utf-8">
  <title>폼 입력 검사</title>
  <link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>

<?php
  require_once("../../lib/util.php");
  // 문자 인코드의 검증
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
  // 에러 플래그
  $isError = false;
  // 이름을 읽는다
  if (isset($_POST['name'])){
    $name = trim($_POST['name']);
    if ($name===""){
      // 공백일 때 오류
      $isError = true;
    }
  } else {
    // 설정하지 않을 때 오류
    $isError = true;
  }
?>

<?php if ($isError): ?>
  <!-- 오류가 있을 때 -->
  <span class="error">이름을 입력해주세요. </span>
  <form method="POST" action="nameCheckForm.php">
    <input type="submit" value="돌아가기">
  </form>
<?php else: ?>
  <!-- 오류가 없을 때 -->
  <span>
  안녕하세요, <?php echo $name; ?>씨.
  </span>
<?php endif; ?>

</div>
</body>
</html>
