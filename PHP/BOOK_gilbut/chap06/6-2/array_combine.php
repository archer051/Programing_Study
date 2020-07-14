<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>2개의 배열로 연관 배열을 만든다</title>
</head>
<body>
<pre>
<?php
// 통과 지점
$point = ["10km", "20km", "30km", "40km", "Goal"];
// 스플릿
$split = ["00:50:37", "01:39:15", "02:28:25", "03:21:37", "03:34:44"];
// 통과 지점을 키, 스플릿을 연관 배열로 한다
$result = array_combine($point, $split);
print_r($result);
?>
</pre>
</body>
</html>
