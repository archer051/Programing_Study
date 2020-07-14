<?php
require_once("../../lib/util.php");
?>

<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>별을 헤는 밤을 읽는다 seek</title>
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
  <?php
  $filename = "star_yundounju.txt";
  try {
    // 파일 객체를 만든다(rb 읽기만)
    $fileObj = new SplFileObject($filename, "rb");
  } catch (Exception $e) {
    echo '<span class="error">오류가 발생했습니다. </span><br>';
    echo $e->getMessage();
    exit();
  }

  // 행을 읽는다
  $fileObj->seek(3);
  echo $fileObj->key(), ": ", $fileObj->current(), "<br>";
  $fileObj->next();
  echo $fileObj->key(), ": ", $fileObj->current();
  ?>
</div>
</body>
</html>
