<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>포맷 문자열을 변수 $format으로 지정한다</title>
</head>
<body>
<?php
$format = '최댓값 %.1f, 최솟값 %.1f';
$a = 15.69;
$b = 11.32;
printf($format, $a, $b);
?>
</body>
</html>
