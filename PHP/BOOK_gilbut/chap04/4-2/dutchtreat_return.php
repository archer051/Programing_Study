<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>사용자 정의 함수를 사용해 계산한다</title>
</head>
<body>
<?php
function dutchtreat($total, $number){
  // 인원수가 음수일 때는 처리를 중단한다
  if ($number<=0){
    return; // 중단한다
  }
  // 나눗셈 결과를 표시한다
  $result = $total/$number;
  echo " {$total}원을 {$number}명으로 나누면 {$result}원. ";
  echo  "<br>" . PHP_EOL;
}
// 계산
dutchtreat(2500, 2);
dutchtreat(3000, 0);
dutchtreat(5500, 4);
?>
</body>
</html>
