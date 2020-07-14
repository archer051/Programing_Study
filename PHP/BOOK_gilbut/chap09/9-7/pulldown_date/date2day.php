<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>연월일 풀다운 메뉴</title>
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
    // 오류 메시지를 표시하고 다음의 코드를 전부 취소한다
    exit($err);
  }
  // HTML 이스케이프(XSS 대응)
  $_POST = es($_POST);
  ?>

  <?php
  // 날짜 초기화(오늘))
  $theYear = date('Y');
  $theMonth = date('n');
  $theDay = date('j');
  // 오류를 넣는 배열
  $error = [];
  // POST된 값을 읽는다
  if (isSet($_POST["year"])&&isSet($_POST["month"])&&isSet($_POST["day"])){
    $theYear = $_POST["year"];
    $theMonth = $_POST["month"];
    $theDay = $_POST["day"];
    // 값이 날짜로써 올바른지 확인한다
    $isDate = checkdate($theMonth, $theDay, $theYear);
    if (!$isDate){
      $error[] = "올바른 날짜 형식이 아닙니다.";
    } else {
      // 날짜 객체를 만든다
      $dateString = $theYear . "-". $theMonth . "-" . $theDay;
      $dateObj = new DateTime($dateString);
    }
  } else {
    $isDate = false;
  }
  ?>

 <?php
 // 이번 년도 전후 15년의 풀다운 메뉴를 만든다
 function yearOption(){
   global $theYear;
   // 이번 년도
   $thisYear = date('Y');
   $startYear = $thisYear - 15;
   $endYear = $thisYear + 15;
   echo '<select name="year">', '\n';
   for ($i=$startYear; $i <= $endYear; $i++) {
     // POST된 년을 선택한다
     if ($i==$theYear){
       echo "<option value={$i} selected>{$i}</option>", "\n";
     } else {
       echo "<option value={$i}>{$i}</option>", "\n";
     }
   }
   echo '</select>';
 }

  // 1~12월의 풀다운 메뉴를 만든다
 function monthOption(){
   global $theMonth;
   echo '<select name="month">';
   for ($i=1; $i <= 12; $i++) {
     // POST된 월을 선택한다
     if ($i==$theMonth){
       echo "<option value={$i} selected>{$i}</option>", "\n";
     } else {
       echo "<option value={$i}>{$i}</option>", "\n";
     }
   }
   echo '</select>';
 }

 // 1~31일의 풀다운 메뉴를 만든다
 function dayOption(){
   global $theDay;
   echo '<select name="day">';
   for ($i=1; $i <= 31; $i++) {
     // POST된 일을 선택한다
     if ($i==$theDay){
       echo "<option value={$i} selected>{$i}</option>", "\n";
     } else {
       echo "<option value={$i}>{$i}</option>", "\n";
     }
   }
   echo '</select>';
 }
?>

  <!-- 연월일의 풀다운 메뉴를 만든다(현재 페이지에 POST한다） -->
  <form method="POST" action="<?php echo es($_SERVER['PHP_SELF']); ?>">
    <ul>
      <li>
        <?php yearOption(); ?>년
        <?php monthOption();?>월
        <?php dayOption(); ?>일
      </li>
      <li><input type="submit" value="송신한다" ></li>
    </ul>
  </form>

    <?php
      // 올바른 날짜라면 표시한다
      if ($isDate) {
        // 날짜를 연월일의 서식으로 한다
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
