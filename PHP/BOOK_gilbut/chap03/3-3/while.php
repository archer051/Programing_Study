<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열에 난수가 5개 추가될 때까지 반복</title>
</head>
<body>
<pre>
<?php
// 빈 배열을 만든다
$numArray = array();
// 배열 $numArray 값이５개가 될 때까지 반복한다
while (count($numArray) < 5){
  // 1~30에서 난수를 1개 만든다
  $num = mt_rand(1,30);
  // $numArray에 포함되어 있는지 조사한다
  if (! in_array($num, $numArray)) {
    // $numArray에 포함되어 있지 않으면 추가한다
    array_push($numArray, $num);
  }
}
// ５개의 숫자가 들어간 배열을 확인한다
print_r($numArray);
?>
</pre>
</body>
</html>
