<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>연월일 서식을 0000-00-00로 표시한다</title>
</head>
<body>
<?php
$year = 1987;
$month = 3;
$day = 9;
printf('%04d-%02d-%02d', $year, $month, $day);
?>
</body>
</html>
