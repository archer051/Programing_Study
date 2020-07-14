<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>수치를 ３자릿수 단락으로 한다</title>
</head>
<body>
<?php
$price = 1980 * 2;
$cost = number_format($price);
echo $cost, "원";
?>
</body>
</html>
