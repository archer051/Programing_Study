<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열에서 순서대로 값을 꺼낸다</title>
</head>
<body>
<?php
$namelist = ["공유", "박보검", "송중기"];
echo "<ol>", "\n";
// 배열에서 순서대로 값을 꺼낸다
foreach($namelist as $value){
  echo "<li>", $value, "씨</li>\n";
}
echo "</ol>\n";
?>
</body>
</html>
