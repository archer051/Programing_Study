<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>연관배열에서 값을 꺼낸다</title>
</head>
<body>
<pre>
<?php
$goods = [
  'id' => 'R56',
  'size' => 'M',
  'price' => 2340
];
echo "id：" . $goods['id'] . "\n";
echo "크기：" . $goods['size'] . "\n";
echo "가격: " . number_format($goods['price']) . "원\n";
?>
</pre>
</body>
</html>
