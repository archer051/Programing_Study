<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>날짜 필드</title>
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
  // 오류를 넣는 배열
  $error = [];
  // POST된 날짜를 읽는다
  if (!empty($_POST["theDate"])){
    // 날짜 문자열을 구한다
    $postDate = trim($_POST["theDate"]);
    // 날짜 형식의 패턴(YYYY-M-D 또는 YYYY/M/D)
    $pattern1 = preg_match("/^[0-9]{4}-[0-9]{1,2}-[0-9]{1,2}$/", $postDate);
    $pattern2 = preg_match("#^[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}$#", $postDate);
    // 연월일을 배열로 한다
    if ($pattern1){
      $dateArray = explode("-", $postDate);
    }
    if ($pattern2){
      $dateArray = explode("/", $postDate);
    }
    if ($pattern1||$pattern2){
      // 올바른 날짜 형식이었을 때
      $theYear = $dateArray[0];
      $theMonth = $dateArray[1];
      $theDay = $dateArray[2];
      // 날짜 타당성 확인
      $isDate = checkdate($theMonth, $theDay, $theYear);
      if ($isDate){
        // 날짜 오브젝트를 만든다
        $dateObj = new DateTime($postDate);
      } else {
        $error[] = "올바른 날짜 형식이 아닙니다.";
      }
    } else {
      // 맞는 날짜 형식이 아니었을 때
      $today = new DateTime();
      $today1 = $today->format("Y-n-j");
      $today2 = $today->format("Y/n/j");
      $error[] ="날짜는 다음의 어느 형식으로 입력해주세요.<br>{$today1} 또는 {$today2}";
      $isDate = false;
    }
  } else {
    $isDate = false;
    $postDate = "";
  }
  ?>

  <!-- 입력 폼을 만든다(현재 페이지에 POST한다） -->
  <form method="POST" action="<?php echo es($_SERVER['PHP_SELF']); ?>">
    <ul>
      <li><span>날짜를 선택한다：</span>
        <input type="date" name="theDate" value=<?php echo "{$postDate}" ?>>
      </li>
      <li><input type="submit" value="송신한다" ></li>
    </ul>
  </form>

  <?php
  // 올바른 날짜면 표시한다
  if ($isDate) {
    // 날짜를 연월일 서식으로 한다
    $date = $dateObj->format("Y년m월d일");
    // 날짜에서 요일을 구한다
    $w = (int)$dateObj->format("w");
    $week = ["일", "월", "화", "수", "목", "금", "토"];
    $day = $week[$w];
    echo "<HR>";
    echo "{$date}은 {$day}요일입니다. ";
  }
  ?>

  <?php
  // 오류 표시
  if (count($error)>0){
    echo "<HR>";
    // 값을 "<br>"로 연결해 표시한다
    echo '<span class="error">', implode("<br>", $error), '</span>';
  }
  ?>
</div>
</body>
</html>
