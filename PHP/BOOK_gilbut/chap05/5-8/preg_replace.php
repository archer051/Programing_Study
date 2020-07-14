<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>マッチした値を置換する</title>
</head>
<body>
<pre>
<?php
function numbermask($subject){
  // 신용카드 번호 패턴
  $pattern = "/^\d{4}\s?\d{4}\s?\d{4}\s?\d{2}(\d{2})$/";
  $replacement = "**** **** **** **$1";
  $result = preg_replace($pattern, $replacement, $subject);
  // 실행 결과를 확인한다
  if (is_null($result)) {
    return "오류：" . preg_last_error();
  } else if ($result == $subject) {
    return "번호 오류";
  } else {
    return $result;
  }
}
// 번호를 확인해 별표로 한다
$number1 = "1234 5678 9012 3456";
$number2 = "6543210987654321";
$num1 = numbermask($number1);
$num2 = numbermask($number2);
echo "{$number1}은 다음과 같습니다. \n";
echo $num1, "\n";
echo "{$number2}은 다음과 같습니다. \n";
echo $num2, "\n";
?>
</pre>
</body>
</html>
