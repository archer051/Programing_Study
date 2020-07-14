<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>NULL인 경우 초기값으로 계산하기</title>
</head>
<body>
<pre>
<?php
$price = 250 * ($unitprice ?? 2);
var_dump($unitprice);
echo $price;
?>
</pre>
</body>
</html>
