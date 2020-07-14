<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열의 연결 array_merge</title>
</head>
<body>
<pre>
<?php
$a = ["a", "b", "c"];
$b = ["d", "e", "f"];
$c = ["g", "h"];
// 인덱스 배열을 연결한다
$result = array_merge($a, $b, $c);
print_r($result);
?>
</pre>
</body>
</html>
