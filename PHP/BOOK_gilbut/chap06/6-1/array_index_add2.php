<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열에 값을 추가해 간다</title>
</head>
<body>
<pre>
<?php
// 빈 배열을 준비한다
$colors = [];
$colors[0] = "빨강";
$colors[1] = "파랑";
$colors[5] = "노랑";
$colors[] = "흰색";
// 확인한다
print_r($colors);
?>
</pre>
</body>
</html>
