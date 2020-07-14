<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>큰 쪽의 값을 채용하기</title>
</head>
<body>
<?php
$a = mt_rand(0,50);
$b = mt_rand(0,50);
$bigger = ($a>$b)? $a : $b;
echo "큰 값은 {$bigger}, \$a는{$a}, \$b는 {$b}";
?>
</body>
</html>
