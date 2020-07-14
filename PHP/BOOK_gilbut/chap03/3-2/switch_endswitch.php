<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>콜론으로 구분한 switch 문</title>
</head>
<body>
<?php
$color = "pink"; // 색이 pink
switch ($color):
  case "pink":
    $price = 120;
    break;
  case "red":
    $price = 140;
    break;
  default:
      $price = 100;
      break;
endswitch;
echo "{$color}는 {$price}원";
?>
</body>
</html>
