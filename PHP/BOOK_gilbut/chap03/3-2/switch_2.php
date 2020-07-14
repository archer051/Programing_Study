<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>default를 지정하지 않는다</title>
</head>
<body>
<?php
$color = "yellow";
$price = 100;
switch ($color) {
  case "green":
    $price = 120;
    break;
  case "red":
    $price = 140;
    break;
}
echo "{$color}는 {$price}원";
?>
</body>
</html>
