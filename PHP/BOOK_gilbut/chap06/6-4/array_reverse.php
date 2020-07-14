<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열 값의 나열을 반대로 한다</title>
</head>
<body>
<pre>
<?php
$nameList = ["김철수", "이민우", "박영배", "김소라"];
// 나열을 역순으로 한다
$result = array_reverse($nameList);
print_r($result);
?>
</pre>
</body>
</html>
