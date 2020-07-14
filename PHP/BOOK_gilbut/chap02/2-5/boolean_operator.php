<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>논리곱, 논리합, 부정의 연산</title>
</head>
<body>
<pre>
<?php
$test1 = TRUE;
$test2 = FALSE;
$result1 = $test1 && $test2;
$result2 = $test1 || $test2;
$result3 = !$test1;
var_dump($result1);
var_dump($result2);
var_dump($result3);
?>
</pre>
</body>
</html>
