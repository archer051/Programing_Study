<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열로부터 문자열을 만든다</title>
</head>
<body>
<pre>
<?php
$data = ["로사", "쥬쥬", "아이린"];
$glue = "씨, ";
$nameList = implode($glue, $data);
$nameList .= "씨";
print_r($nameList);
?>
</pre>
</body>
</html>
