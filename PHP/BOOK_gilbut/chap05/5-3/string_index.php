<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>１문자씩 순서대로 꺼낸다</title>
</head>
<body>
<pre>
<?php
$id = "Peace";
$length = strlen($id);
for ($i=0; $i<$length; $i++){
  $chr = $id{$i};
  echo "{$i}-", $chr, "\n";
}
?>
</pre>
</body>
</html>
