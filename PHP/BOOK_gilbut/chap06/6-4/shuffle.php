<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열 값의 정렬을 섞는다</title>
</head>
<body>
<pre>
<?php
$nameList = ["김철수", "이민우", "박영배", "김소라"];
// 나열을 섞는다
shuffle($nameList);
print_r($nameList);
?>
</pre>
</body>
</html>
