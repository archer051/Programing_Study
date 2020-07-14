<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>콤마로 단락한 이름 목록으로부터 배열을 만든다</title>
</head>
<body>
<pre>
<?php
$data = "로사,쥬쥬,아이린";
$delimiter = ",";
$nameList = explode($delimiter, $data);
print_r($nameList);
?>
</pre>
</body>
</html>
