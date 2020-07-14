<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>변수를 { }로 감싸 넣는다</title>
</head>
<body>
<?php
$theSize = "M";
$thePrice = 12000;
$msg = "{$theSize}사이즈, {$thePrice}원";
echo $msg;
?>
</body>
</html>
