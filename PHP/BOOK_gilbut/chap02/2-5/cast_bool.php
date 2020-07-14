<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>값이 들어있는지 여부를 조사하기</title>
</head>
<body>
<?php
$theDate = new DateTime();
$isAccess = (bool)$theDate;
var_dump($isAccess);
?>
</body>
</html>
