<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>변수 참조 전달</title>
</head>
<body>
<?php
// 참조 전달
function oneUp(&$var){
  $var += 1;
}

// 실행한다
$num = 5;
oneUp($num);
echo $num;
?>
</body>
</html>
