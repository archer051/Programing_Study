<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>리스트박스</title>
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
  if (isSet($_POST["meal"])){
    // 식사인지 아닌지 확인한다
    $meals = ["아침식사","저녁식사"];
    // $meals에 포함되지 않는 값이 있으면 구한다
    $diffValue = array_diff($_POST["meal"], $meals);
    // 정해진 값 이외의 값이 포함되지 않으면 OK
    if (count($diffValue)==0){
      // 체크되어 있는 값을 구한다
      $mealSelected = $_POST["meal"];
    } else {
      $mealSelected = [];
      $error[] = "식사에 오류가 있습니다. ";
    }
  } else {
    // POST된 값이 없을 때
    $mealSelected = [];
  }

  // POST된 투어를 읽는다
  if (isSet($_POST["tour"])){
    // 투어인지 아닌지 확인한다
    $tours = ["카누", "MTB", "트래킹"];
    // $tours에 포함되지 않는 값이 있으면 구한다
    $diffValue = array_diff($_POST["tour"], $tours);
    // 정규 외의 값이 포함되지 않으면 OK
    if (count($diffValue)==0){
      // 체크되어 있는 값을 구한다
      $tourSelected = $_POST["tour"];
    } else {
      $tourSelected = [];
      $error[] = "투어에 입력 오류가 있습니다. ";
    }
  } else {
    // POST된 값이 없을 때
    $tourSelected = [];
  }
  ?>

  <?php
  // 초기값으로 선택할지
  function selected($value, $question){
    if (is_array($question)){
      // 배열일 떄 값이 포함되어 있으면 true
      $isSelected = in_array($value, $question);
    } else {
      // 배열이 아닐 때 값이 일치하면 true
      $isSelected = ($value===$question);
    }
    if ($isSelected) {
      // 선택한다
      echo "selected";
    } else {
      echo "";
    }
  }
 ?>

  <!-- 입력 폼을 만든다（현재 페이지에 POST한다） -->
  <form method="POST" action="<?php echo es($_SERVER['PHP_SELF']); ?>">
    <ul>
      <li><span>식사：</span>
        <select name="meal[]" size="2" multiple>
          <option value="아침식사" <?php selected("아침식사", $mealSelected); ?> >아침식사</option>
          <option value="저녁식사" <?php selected("저녁식사", $mealSelected); ?> >저녁식사</option>
      </select>
      </li>
      <li><span>투어：</span>
        <select name="tour[]" size="3" multiple>
          <option value="카누" <?php selected("카누", $tourSelected) ; ?> >카누</option>
          <option value="MTB" <?php selected("MTB", $tourSelected); ?> >MTB</option>
          <option value="트래킹" <?php selected("트래킹", $tourSelected); ?> >트래킹</option>
        </select>
      </li>
      <li><input type="submit" value="송신한다" ></li>
    </ul>
  </form>

  <?php
    // 식사와 투어가 입력되어 있으면 결과를 표시한다
    $isSelected = count($mealSelected)>0 || count($tourSelected)>0;
    if ($isSelected) {
      echo "<HR>";
      // 값을 "와"로 연결해 표시한다]
      echo "식사: ", implode("와 ", $mealSelected), "<br>";
      echo "투어: ", implode("와 ", $tourSelected), "<br>";
    } else {
      echo "<HR>";
      echo "선택한 것이 없습니다. ";
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
