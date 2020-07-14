<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>문자열을 사용한 계산식</title>
</head>
<body>
<?php
$person = "3명" + "2명";
$price = "5000원" * $person;
$price = $price * "1.1 부가세";
echo "금액 {$price}원, {$person}명";
?>
</body>
</html>
