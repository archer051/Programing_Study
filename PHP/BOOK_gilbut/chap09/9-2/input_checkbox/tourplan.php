<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>체크박스</title>
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
    // 오류 메시지를 표시하고 다음 코드를 전부 취소합니다
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
    // $meal에 포함되지 않은 값이 있으면 읽는다
    $diffValue = array_diff($_POST["meal"], $meals);
    // 정규 외 값이 포함되어 있지 않으면 OK
    if (count($diffValue)==0){
      // 체크되어 있는 값을 구한다
      $mealChecked = $_POST["meal"];
    } else {
      $mealChecked = [];
      $error[] = "식사에 입력 오류가 있습니다. ";
    }
    } else {
    // POST된 값이 없을 때
    $mealChecked = [];
    }


  // POST된 투어를 읽는다
  if (isSet($_POST["tour"])){
    // 투어인지 아닌지 확인한다
    $tours = ["카누","MTB", "트래킹"];
    // $tours에 포함되지 않는 값이 있으면 꺼낸다
    $diffValue = array_diff($_POST["tour"], $tours);
    // 정규 외 값이 포함되어 있지 않으면 OK
    if (count($diffValue)==0){
      // 체크된 값을 구한다
      $tourChecked = $_POST["tour"];
    } else {
      $tourChecked = [];
      $error[] = "투어에 입력 오류가 있습니다. ";
    }
  } else {
    // POST된 값이 없을 때
    $tourChecked = [];
  }
  ?>

  <?php
  // 초기값으로 체크할지
  function checked($value, $question){
    if (is_array($question)){
      // 배열일 때 값이 포함되어 있으면 true
      $isChecked = in_array($value, $question);
    } else {
      // 배열이 아닐 때 값이 일치하면 true
      $isChecked = ($value===$question);
    }
    if ($isChecked) {
      // 체크한다
      echo "checked";
    } else {
      echo "";
    }
  }
 ?>

  <!-- 입력폼을 만든다(현재 페이지에 POST한다) -->
  <form method="POST" action="<?php echo es($_SERVER['PHP_SELF']); ?>">
    <ul>
      <li><span>식사：</span>
        <label><input type="checkbox" name="meal[]" value="아침식사" <?php checked("아침식사", $mealChecked); ?> >아침식사</label>
        <label><input type="checkbox" name="meal[]" value="저녁식사" <?php checked("저녁식사", $mealChecked); ?> >저녁식사</label>
      </li>
      <li><span>투어：</span>
        <label><input type="checkbox" name="tour[]" value="카누" <?php checked("카누", $tourChecked) ; ?> >카누</label>
        <label><input type="checkbox" name="tour[]" value="MTB" <?php checked("MTB", $tourChecked); ?> >MTB</label>
        <label><input type="checkbox" name="tour[]" value="트래킹" <?php checked("트래킹", $tourChecked); ?> >트래킹</label>
      </li>
      <li><input type="submit" value="송신한다" ></li>
    </ul>
  </form>

  <?php
    // 식사와 투어 중 한 쪽이 송신되면 결과를 표시한다
    $isSelected = count($mealChecked)>0 || count($tourChecked)>0;
    if ($isSelected) {
      echo "<HR>";
      // 값을 와로 연결해 표시한다
      echo "식사：", implode("와 ", $mealChecked), "<br>";
      echo "투어：", implode("와 ", $tourChecked), "<br>";
    } else {
      echo "<HR>";
      echo "선택된 것이 없습니다. ";
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
