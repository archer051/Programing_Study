<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>계산 페이지</title>
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
    // 오류 메시지를 표시하고 다음 코드를 전부 취소한다
    exit($err);
  }
  // HTML 이스케이프(XSS 대응)
  $_POST = es($_POST);
  ?>

  <?php
  // POST된 값을 읽는다
  if (isSet($_POST["mile"])){
    // 수치인지 확인한다
    $isNum = is_numeric($_POST["mile"]);
    if ($isNum){
      // 수치라면 계산식과 폼 표시의 값에서 사용한다
      $mile = $_POST["mile"];
      $error = "";
    } else {
      $mile = "";
      $error = '<span class="error">←수치를 입력해주세요. </span>';
    }
  } else {
    // POST된 값이 없을 때
    $isNum = false;
    $mile = "";
    $error = "";
  }
  ?>

  <!-- 입력 폼으르 만든다(현재 페이지에 POST한다) -->
  <form method="POST" action="<?php echo es($_SERVER['PHP_SELF']); ?>">
    <ul>
      <li>
        <label>마일을 km로 변환：
        <input type="text" name="mile" value="<?php echo $mile; ?>">
        </label>
        <!-- 오류 표시 -->
        <?php echo $error; ?>
      </li>
      <li><input type="submit" value="계산한다"></li>
    </ul>
  </form>

  <?php
    // $mile이 수치라면 계산 결과를 표시한다
    if ($isNum) {
      echo "<HR>";
      $kilometer = $mile * 1.609344;
      echo "{$mile}마일은 {$kilometer}km입니다. ";
    }
  ?>
</div>
</body>
</html>
