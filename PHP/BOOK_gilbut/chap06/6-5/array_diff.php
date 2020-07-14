<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열의 차를 확인한다</title>
</head>
<body>
<pre>
<?php
// 확인할 배열
$checkID = ["a21", "d21", "d33", "e53"];
// 기준이 되는 배열
$aList = ["a12", "b15", "d21"];
$bList = ["d13", "e53", "f10", "k12"];

// ID를 확인한다
$diffID = array_diff($checkID, $aList, $bList);
foreach ($diffID as $value) {
  echo "{$value}은 신규입니다. \n";
}
?>
</pre>
</body>
</html>
