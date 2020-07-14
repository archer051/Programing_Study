<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>복제한 배열을 정렬한다</title>
</head>
<body>
<pre>
<?php
$data = [23, 16, 8, 42, 15, 4];
// 배열을 복제한다
$clone = $data;
// 오름차순으로 정렬한다
sort($clone);
// 확인한다
echo "원래：";
print_r($data);
echo "복제：";
print_r($clone);
?>
</pre>
</body>
</html>
