<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>URL 디코딩한다</title>
</head>
<body>
<?php
$encoded = "PHP7%EC%83%98%ED%94%8C.html";
$decoded = rawurldecode($encoded);
echo $decoded;
?>
</body>
</html>
