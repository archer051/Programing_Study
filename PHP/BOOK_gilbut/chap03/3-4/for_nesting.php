<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>for문을 중첩한다</title>
</head>
<body>
<pre>
<?php
for ($i=0; $i<=3; $i++){
  for ($j=0; $j<=5; $j++){
    echo "{$i}-{$j}" . " | ";
  }
  echo PHP_EOL;
}
?>
</pre>
</body>
</html>
