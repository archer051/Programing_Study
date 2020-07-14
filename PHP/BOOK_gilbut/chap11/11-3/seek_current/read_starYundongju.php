<?php
require_once("../../lib/util.php");
?>

<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>별을 헤는 밤을 읽는다</title>
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
  <?php
  $filename = "star_yundounju.txt";
  $fileObj = new SplFileObject($filename, "rb");
  foreach ($fileObj as $key => $value) {
    echo sprintf("%02d:　%s\n", $key, es($value)), "<br>";
  }
  ?>
</div>
</body>
</html>
