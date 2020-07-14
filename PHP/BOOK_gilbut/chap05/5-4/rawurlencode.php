<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>문자열을 URL 인코드한다</title>
</head>
<body>
<?php
$page = "PHP7샘플.html";
$path = rawurlencode($page);
$url = "http://sample.com/{$path}";
echo $url;
?>
</body>
</html>
