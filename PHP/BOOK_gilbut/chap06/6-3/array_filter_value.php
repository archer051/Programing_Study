<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열에서 양의 값만을 꺼낸다</title>
</head>
<body>
<pre>
<?php
// 콜백 함수
function isPlus($value) {
  return $value>0;
}

// 원래의 배열
$valueList = ["a"=>3, "b"=>0, "c"=>5, "d"=>-2, "e"=>4];
// 배열에서 양의 값만을 꺼낸다
$filtered = array_filter($valueList, "isPlus");
print_r($filtered);
?>
</pre>
</body>
</html>
