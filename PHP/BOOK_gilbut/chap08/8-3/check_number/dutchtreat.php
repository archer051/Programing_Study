<!DOCTYPE html>
<html lang="kr">
<head>
  <meta charset="utf-8">
  <title>더치페이 계산</title>
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
  // HTML 이스케이프(XSS 대책)
  $_POST = es($_POST);
?>

<?php
  // 오류 메시지를 넣는 배열
  $errors = [];
?>

<?php
  // 합계 금액 검사
  if (isset($_POST['sum'])){
    $sum = $_POST['sum'];
    if (!ctype_digit($sum)){
      // 0 이상 정수가 아닐 때 오류
      $errors[] = "합계 금액을 정수로 입력해주세요. ";
    }
  } else {
    // 미설정 오류
    $errors[] = "합계 금액을 설정하지 않았습니다. ";
  }
  // 인원수 확인
  if (isset($_POST['headcount'])){
    $headcount = $_POST['headcount'];
    if (!ctype_digit($headcount)){
      // 0 이상 정수가 아닐 때 오류
      $errors[] = "인원수를 정수로 입력해주세요. ";
    } else if ($headcount==0) {
      // 0일 때 오류
      $errors[] = "0명일 때는 나눌 수 없습니다. ";
    }
  } else {
    // 미설정 오류
    $errors[] = "인원수를 설정하지 않았습니다. ";
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
?>

<!-- 돌아오는 버튼의 폼 -->
  <form method="POST" action="dutchtreatForm.php">
    <ul>
      <li><input type="submit" value="돌아가기"></li>
    </ul>
  </form>

<?php
} else {
  // 오류가 없을 때
  $rest = $sum % $headcount;
  $price = ($sum - $rest) / $headcount;
  // ３자릿수
  $sum_fmt = number_format($sum);
  $price_fmt = number_format($price);
  // 표시한다
  echo "{$sum_fmt}원을 {$headcount}명이 각자 부담합니다. ", "<br>";
  echo "１명당 {$price_fmt}원을 부담하면 부족금액은 {$rest}원입니다. ";
}
?>
</div>
</body>
</html>
