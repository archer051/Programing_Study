<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>문자열의 앞 뒤에 있는 불필요한 문자를 제거한다</title>
</head>
<body>
<pre>
<?php
$msg = "\tHello World!!   \n\n";
$result = trim($msg);
echo "처리 전:\n";
echo "[", $msg, "]\n";
echo "처리 후:\n";
echo "[", $result, "]\n";
?>
</pre>
</body>
</html>
