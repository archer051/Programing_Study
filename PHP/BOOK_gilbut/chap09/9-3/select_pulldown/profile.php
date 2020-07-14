<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>풀 다운 메뉴</title>
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
    // 오류 메시지를 표시하고 이하 코드를 전부 취소한다
    exit($err);
  }
  // HTML 이스케이프(XSS 대책)
  $_POST = es($_POST);
  ?>

  <?php
  // 오류를 넣는 배열
  $error = [];
  // POST된 성별을 읽는다
  if (isSet($_POST["sex"])){
    // 성별인지 아닌지 확인한다
    $sexValues = ["남성","여성"];
    $isSex = in_array($_POST["sex"], $sexValues);
    // $sexValues에 포함되어 있는 값이면 OK
    if ($isSex){
      // 성별이면 처리와 폼 표시 값으로 사용한다
      $sex = $_POST["sex"];
    } else {
      $sex = "error";
      $error[] = "성별에 입력 오류가 있습니다. ";
    }
  } else {
    // POST된 값이 아닐 때
    $isSex = false;
    $sex = "남성";
  }

  // POST된 결혼을 읽는다
  if (isSet($_POST["marriage"])){
    // 결혼인지 아닌지 확인한다
    $marriageValues = ["독신","기혼", "동거 중"];
    $isMarriage = in_array($_POST["marriage"], $marriageValues);
    // $marriageValues에 포함되어 있는 값이면 OK
    if ($isMarriage){
      // 성별이면 처리와 폼 표시 값으로 사용한다
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
  // 초기값으로 선택할지 말지
  function selected($value, $question){
    if (is_array($question)){
      // 배열일 때 값이 포함되어 있으면 true
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

  <!-- 입력 폼을 만든다(현재 페이지에 POST한다） -->
  <form method="POST" action="<?php echo es($_SERVER['PHP_SELF']); ?>">
    <ul>
      <li><span>성별:</span>
        <select name="sex">
          <option value="남성" <?php selected("남성", $sex); ?> >남성</option>
          <option value="여성" <?php selected("여성", $sex); ?> >여성</option>
        </select>
      </li>
      <li><span>결혼：</span>
        <select name="marriage">
          <option value="독신" <?php selected("독신", $marriage) ; ?> >독신</option>
          <option value="기혼" <?php selected("기혼", $marriage); ?> >기혼</option>
          <option value="동거 중" <?php selected("동거 중", $marriage); ?> >동거 중</option>
        </select>
      </li>
      <li><input type="submit" value="송신한다" ></li>
    </ul>
  </form>

  <?php
    //  성별과 결혼이 입력되면 결과를 표시한다
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
