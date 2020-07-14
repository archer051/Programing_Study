<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열의 연결(중복을 삭제) array_unique</title>
</head>
<body>
<pre>
<?php
$a = ["green", "red", "blue"];
$b = ["blue", "pink", "yellow"];
$c = ["pink", "white"];
// 배열을 연결한다
$all = array_merge($a, $b, $c);
// 중복된 값을 삭제한다
$unique = array_unique($all);
print_r($all);
print_r($unique);
?>
</pre>
</body>
</html>
