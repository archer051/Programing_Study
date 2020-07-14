<?php
require_once("../../lib/util.php");
?>

<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>메모를 읽는다</title>
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
  <?php
  $filename = "memo.txt";
  try {
    // 파일 객체를 만든다(rb 읽기만)
    $fileObj = new SplFileObject($filename, "rb");
  } catch (Exception $e) {
    echo '<span class="error">오류가 발생했습니다. </span><br>';
    echo $e->getMessage();
    exit();
  }

  // 데이터를 읽는다(앞 부분 5행)
  $fileObj->flock(LOCK_SH);
  $data = new LimitIterator($fileObj, 0, 5);
  foreach ($data as $key => $value) {
    // 01~05, 문자열, 개행
    echo sprintf("%02d:　%s\n", $key+1, es($value)), "<br>";
  }
  $fileObj->flock(LOCK_UN);

  echo "<hr>", '<a href="input_memo.php">메모 입력 페이지로</a>';
  ?>
</div>
</body>
</html>
