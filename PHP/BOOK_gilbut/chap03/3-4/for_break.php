<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>음수가 있다면 즉시 반복을 중단한다</title>
</head>
<body>
<?php
$list = array(20, -32, 50, -5, 40);
$count = count($list); // 배열 값의 개수
$sum = 0;
for ($i=0; $i<$count; $i++){
  // 배열 $list에서 값을 1개씩 꺼낸다
  $value = $list[$i];
  if ($value<0){
    $sum = "음수 {$value}가 포함되어 있어 중단했습니다.";
    break;
  } else {
    $sum += $value;
  }
}
echo "합계: $sum";
?>
</body>
</html>
