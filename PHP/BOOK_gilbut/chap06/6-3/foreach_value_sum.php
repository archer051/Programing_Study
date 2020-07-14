<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열의 값을 합한다</title>
</head>
<body>
<?php
$valuelist = [5, -3, 12, 6, 9];
$sum = 0;
// 배열에서 순서대로 값을 꺼낸다
foreach($valuelist as $value){
  // 양의 값만 더한다
  if ($value>0){
    $sum += $value;
  }
}
echo "양의 값 합계는 {$sum}입니다. ";
?>
</body>
</html>
