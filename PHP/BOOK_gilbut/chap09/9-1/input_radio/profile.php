<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>라디오 버튼</title>
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
  // POST된 성별을 읽는다
  if (isSet($_POST["sex"])){
    // 성별인지 아닌지 확인한다
     $sexValues = ["남성","여성"];
    // $sexValues에 포함되어 있는 값이면 true
    $isSex = in_array($_POST["sex"], $sexValues);
    if ($isSex){
      // 선택된 값을 구한다
      $sex = $_POST["sex"];
    } else {
      $sex = "error";
      $error[] = "성별에 입력 오류가 있습니다. ";
    }
  } else {
     // POST된 값이 없을 때
    $isSex = false;
    $sex = "남성";
  }
  // POST된 결혼을 읽는다
  if (isSet($_POST["marriage"])){
    // 결혼인지 아닌지를 확인한다
    $marriageValues = ["독신","기혼", "동거 중"];
    // $marriageValues에 포함되어 있는 값이면 true
    $isMarriage = in_array($_POST["marriage"], $marriageValues);
    if ($isMarriage){
      // 선택되어 있는 값을 구한다
      $marriage = $_POST["marriage"];
    } else {
      $marriage = "error";
      $error[] = "결혼에 입력 오류가 있습니다. ";
    }
  } else {
    // POST된 값이 없을 때
    $isMarriage = false;
    $marriage = "독신";
  }
  ?>

  <?php
  // 초기값으로 체크할지 말지
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

  <!-- 입력 폼을 만든다(현재 페이지에 POST한다） -->
  <form method="POST" action="<?php echo es($_SERVER['PHP_SELF']); ?>">
    <ul>
      <li><span>성별：</span>
        <label><input type="radio" name="sex" value="남성" <?php checked("남성", $sex); ?> >남성</label>
        <label><input type="radio" name="sex" value="여성" <?php checked("여성", $sex); ?> >여성</label>
      </li>
      <li><span>결혼：</span>
        <label><input type="radio" name="marriage" value="독신" <?php checked("독신", $marriage) ; ?> >독신</label>
        <label><input type="radio" name="marriage" value="기혼" <?php checked("기혼", $marriage); ?> >기혼</label>
        <label><input type="radio" name="marriage" value="동거 중" <?php checked("동거 중", $marriage); ?> >동거 중</label>
      </li>
      <li><input type="submit" value="송신한다" ></li>
    </ul>
  </form>

  <?php
    // 성별과 결혼을 받으면 결과는 표시한다
    $isSubmited = $isSex && $isMarriage;
    if ($isSubmited) {
      echo "<HR>";
      echo "당신은 {$sex}, {$marriage}입니다. ";
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
