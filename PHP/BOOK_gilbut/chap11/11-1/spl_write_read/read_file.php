<?php
require_once("../../../lib/util.php");
?>

<!DOCTYPE html>
<html lang="kr">

<head>
  <meta charset="utf-8">
  <title>SplFileObject로 파일을 읽는다</title>
  <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
  <div>
    <?php
    $filename = "mytext.txt";
    try {
      // 파일 객체를 만든다(rb 읽기 전용)
      $fileObj = new SplFileObject($filename, "rb");
    } catch (Exception $e) {
      echo '<span class="error">오류가 발생했습니다. </span><br>';
      echo $e->getMessage();
      exit();
    }
    // 문자열을 읽는다
    $readdata = $fileObj->fread($fileObj->getSize());
    if (!($readdata === FALSE)) {
      // HTML 이스케이프（<br>을 삽입하기 전에 실행한다）
      $readdata = es($readdata);
      // 개행 코드 전에 <br>을 삽입한다
      $readdata_br = nl2br($readdata, false);
      echo "{$filename}을 읽었습니다. ", "<br>";
      // 파일의 내용을 표시한다
      echo $readdata_br, "<hr>";
      echo '<a href="write_file.php">파일에 쓰기</a>';
    } else {
      // 파일 오류
      echo '<span class="error">파일을 읽을 수 없습니다.</span>';
    }
    ?>
  </div>
</body>

</html>