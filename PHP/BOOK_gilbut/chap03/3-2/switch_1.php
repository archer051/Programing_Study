<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>색에 따라 가격을 정한다</title>
</head>
<body>
<?php
$color = "blue";
switch ($color) {
  case "green":
    $price = 120;
    break;
  case "red":
    $price = 140;
    break;
  case "blue":
    $price = 160;
    break;
  default:
    $price = 100;
    break;
}
echo "{$color}는 {$price}원";
?>
</body>
</html>
