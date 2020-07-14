<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열의 연결 array_merge_recursive</title>
</head>
<body>
<pre>
<?php
$a = ["a"=>1, "b"=>2, "c"=>3];
$b = ["b"=>40, "d"=>50];
// 연관 배열을 연결한다
$result = array_merge_recursive($a, $b);
print_r($result);
?>
</pre>
</body>
</html>
