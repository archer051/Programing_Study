<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>변수를 이용한 계산</title>
</head>
<body>
<?php
// 3과목 점수
$kor = 67;
$eng = 72;
$math = 85;
// 총점
$total = $kor + $eng + $math;
// 평균
$ave = $total/3;
// 표시
echo "총점: ", $total, "<br>";
echo "평균: ", $ave
 ?>
</body>
</html>
