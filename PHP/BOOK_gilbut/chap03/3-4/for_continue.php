<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>양의 값만을 더한다</title>
</head>
<body>
<?php
$list = array(20, -32, 50, -5, 40);
$count = count($list); // 배열 값의 개수
$sum = 0;
for ($i=0; $i<$count; $i++){
  // 배열 $list에서 값을 １개씩 꺼낸다
  $value = $list[$i];
  if ($value<0){
    // 값이 음수면 이 반복 처리를 건너뛰고 카운터 갱신이 실행된다
    continue;
  }
  $sum += $value;
}
echo "합계: $sum";
?>
</body>
</html>
