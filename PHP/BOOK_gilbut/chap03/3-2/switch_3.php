<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>green과 red를 같은 가격으로 한다</title>
</head>
<body>
<?php
$color = "green";
switch ($color) {
  // "green"과 "red"에서 같은 처리를 한다
  case "green":
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
echo "{$color}은 {$price}원";
?>
</body>
</html>
