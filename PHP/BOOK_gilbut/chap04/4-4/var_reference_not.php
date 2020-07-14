<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>변수값 전달</title>
</head>
<body>
<?php
function oneUp($var){
  $var += 1;
}

// 실행한다
$num = 5;
oneUp($num);
echo $num;
?>
</body>
</html>
