<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>카운터를 인원수로 계산한다</title>
</head>
<body>
<?php
$price = 0;
for ($number=1; $number<=6; $number++){
  if ($number<=3){
    $price += 1000;
  } else {
    $price += 500;
  }
  echo "{$number}명, {$price}원.";
}
?>
</body>
</html>
