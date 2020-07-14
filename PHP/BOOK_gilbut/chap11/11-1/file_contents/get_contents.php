<?php
require_once("../../lib/util.php");
?>

<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>파일을 읽기</title>
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
  <?php
  $filename = "mytext.txt";
  // 파일이 있는지 확인한다
  $result = file_exists($filename);
  if ($result){
    // 파일을 읽는다
    $readdata = file_get_contents($filename);
    // HTML 이스케이프(<br>을 삽입하기 전에 한다)
    $readdata = es($readdata);
    // 개행 코드 전에 <br>을 삽입한다
    $readdata_br = nl2br($readdata, false);
    echo "{$filename}을 읽었습니다. ", "<br>";
    echo $readdata_br, "<hr>";
    echo '<a href="put_contents.php">파일에 쓰기</a>';
  } else {
    // 파일 오류
    echo '<span class="error">파일을 읽을 수 없습니다. </span>';
  }
  ?>
</div>
</body>
</html>
