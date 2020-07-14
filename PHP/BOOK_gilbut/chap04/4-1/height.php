<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>거리와 각도로 높이를 구한다</title>
</head>
<body>
<?php
$distance = 20;
$angle = 32 * pi()/180;  // 도수를 라디언으로 변환
$height = $distance * tan($angle);
$height = round($height*10)/10;

echo "나무 높이는 {$height}m 입니다."
?>
</body>
</html>
