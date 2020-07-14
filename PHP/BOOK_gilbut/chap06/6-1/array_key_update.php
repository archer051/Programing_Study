<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>연관배열에서 값을 꺼낸다</title>
</head>
<body>
<pre>
<?php
// 연관배열을 만든다
$goods = [
  'id' => 'R56',
  'size' => 'M',
  'price' => 2340
];
// price 키 값을 변경한다
$goods['price'] = 3500;
// 확인한다
echo "id：" . $goods['id'] . "\n";
echo "크기：" . $goods['size'] . "\n";
echo "가격：" . number_format($goods['price']) . "원\n";
?>
</pre>
</body>
</html>
