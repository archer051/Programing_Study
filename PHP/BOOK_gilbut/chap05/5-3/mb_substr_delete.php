<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>마지막 문자를 삭제한다</title>
</head>
<body>
<pre>
<?php
$msg = "봄은 새벽.";
echo mb_substr($msg, 0, -1); // 마지막 문자를 삭제한다
?>
</pre>
</body>
</html>
