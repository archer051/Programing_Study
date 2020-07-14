<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>포맷된 문자열을 변수에 넣어 다룬다</title>
</head>
<body>
<?php
$year = 2016;
$seq = 539;
$type = "P7";
$id = sprintf('%04d%06d-%s', $year, $seq, $type);
echo "제품 ID는 ", $id, "입니다. ";
?>
</body>
</html>
