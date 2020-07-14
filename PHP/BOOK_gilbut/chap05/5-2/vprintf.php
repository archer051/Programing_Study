<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>포맷 문자열의 %를 배열 값으로 바꾼다</title>
</head>
<body>
<?php
$max = 15.69;
$min = 11.32;
$ave = 13.218;
// 바꿀 배열
$data = array($max, $min, $ave);
// 형식 문자열
$format = '최댓값 %.1f, 최솟값 %.1f, 평균값 %.1f';
// 값을 바꿔 표시한다
vprintf($format, $data);
?>
</body>
</html>
