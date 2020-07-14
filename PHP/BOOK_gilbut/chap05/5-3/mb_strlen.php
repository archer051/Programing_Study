<?php
// 문자 수에 따라 요금을 계산한다
function price($str){
  $price = 3000;
  // 문자 수를 알아본다
  $length = mb_strlen($str);
  // 11번째 문자부터 1문자 100원 증가
  if ($length>10){
    $price += ($length - 10)*100;
  }
  // ３자리 자릿수
  $price = number_format($price);
  $result = "{$length}문자 {$price}원";
  return $result;
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>문자 수에 따라 요금을 계산한다</title>
</head>
<body>
<pre>
<?php
// 확인
$msg1 = "Hello World!";
$msg2= "헬로월드";
echo price($msg1);
echo "\n";
echo price($msg2);
?>
</pre>
</body>
</html>
