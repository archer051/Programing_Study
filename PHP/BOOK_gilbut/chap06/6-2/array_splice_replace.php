<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열의 요소를 치환한다</title>
</head>
<body>
<pre>
<?php
// 원래 배열
$myArray = ["a", "b", "c", "d", "e"];
// 치환할 배열
$replace = ["X", "Y", "Z"];
// 배열의 요소를 치환한다
$removed = array_splice($myArray, 1, 3, $replace);
echo '실행 후：$myArray', "\n";
print_r($myArray);
echo '반환：$removed', "\n";
print_r($removed);
?>
</pre>
</body>
</html>
