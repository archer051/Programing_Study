<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>소수점 이하 자릿 수, 값의 문자 수를 지정한다</title>
</head>
<body>
<?php
$a = 10.2582;
$b = 3.1;
$c = "Hypertext Preprocessor！";
printf('결과는 %.2f입니다. ', $a);
printf('결과는 %.02f입니다. ', $b);
printf('PHP는 %.5s ...', $c);
?>
</body>
</html>
