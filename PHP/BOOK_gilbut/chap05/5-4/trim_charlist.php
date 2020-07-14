<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>앞 뒤에 있는 공백과 개행을 제거한다</title>
</head>
<body>
<pre>
<?php
$msg = " 서울시강남구서초동 \n\n";
$result = trim($msg, "\x20\t\n\r\0\v ");
echo "처리 전:\n";
echo "[", $msg, "]\n";
echo "처리 후:\n";
echo "[", $result, "]\n";
?>
</pre>
</body>
</html>
