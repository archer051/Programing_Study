<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>값이 DateTime 클래스인지 여부를 조사하기</title>
</head>
<body>
<pre>
<?php
$now = new DateTime();
$isDate = $now instanceof DateTime;
var_dump($isDate);
?>
</pre>
</body>
</html>
