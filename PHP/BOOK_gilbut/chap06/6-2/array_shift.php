<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열의 맨 앞 요소를 꺼낸다</title>
</head>
<body>
<pre>
<?php
// 원래 배열
$myArray = ["a", "b", "c", "d"];
// 맨 앞의 요소를 꺼낸다
$removed = array_shift($myArray);
echo '실행 후：$myArray', "\n";
print_r($myArray);
echo '반환：$removed', "\n";
print_r($removed);
?>
</pre>
</body>
</html>
