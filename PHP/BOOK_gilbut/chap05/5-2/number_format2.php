<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>３자릿수 단락으로 소수 2자리까지 표시한다</title>
</head>
<body>
<?php
$num = 235.365;
$length = number_format($num, 2);
echo $length, "m";
?>
</body>
</html>
