<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>정적 변수</title>
</head>
<body>
<?php
function countUp(){
  static $count = 0; // 초기화
  $count += 1; // 카운트 업
  return $count;
}

// 10회 실행한다
for ($i=1; $i<=10; $i++){
  $num = countUp();
  echo "{$num}번째. ";
}
?>
</body>
</html>
