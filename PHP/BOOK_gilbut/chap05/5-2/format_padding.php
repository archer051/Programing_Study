<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>문자 수에 부족한 부분은 0이나 *로 채운다</title>
</head>
<body>
<?php
$a = 7;
$b = 2380;
printf('번호는 %03d입니다. ', $a);
printf("청구액은 %'*6d원", $b);
?>
</body>
</html>
