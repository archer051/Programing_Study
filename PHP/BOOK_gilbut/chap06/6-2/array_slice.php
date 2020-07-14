<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열을 잘라낸다</title>
</head>
<body>
<pre>
<?php
$myArray = ["a", "b", "c", "d", "e", "f"];
// 톱3
$slice1 = array_slice($myArray, 0, 3);
// ４번, 5번
$slice2 = array_slice($myArray, 3, 2);
// 마지막 ３
$slice3 = array_slice($myArray, -3);
print_r($slice1);
print_r($slice2);
print_r($slice3);
?>
</pre>
</body>
</html>
