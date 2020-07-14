<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>단어의 맨 앞 문자만 대문자로 한다</title>
</head>
<body>
<?php
$msg = "THE QUICK BROWN FOX";
echo ucwords(strtolower($msg));
?>
</body>
</html>
