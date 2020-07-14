<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>이름 목록</title>
</head>
<body>
<pre>
<?php
$teamA = ["김철수", "이민우", "박영배"];
for($i=0; $i<count($teamA); $i++){
  echo $teamA[$i], "씨\n";
}
?>
</pre>
</body>
</html>
