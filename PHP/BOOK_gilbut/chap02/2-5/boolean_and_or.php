<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>and,or 논리 연산자를 사용한 코드</title>
</head>
<body>
<pre>
<?php
$test1 = TRUE;
$test2 = FALSE;
$result1 = ($test1 and $test2);
$result2 = ($test1 or $test2);
var_dump($result1);
var_dump($result2);
?>
</pre>
</body>
</html>
