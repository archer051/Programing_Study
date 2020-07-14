<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>１~100사이의 난수를 10개 만든다</title>
</head>
<body>
<?php
for ($i=1;$i<=10;$i++){
  $num = mt_rand(1, 100);
  echo "{$num}, ";
}
?>
</body>
</html>
