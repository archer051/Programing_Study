<?php
$date = date("Y/n/j G:i:s", time());
$writedata = <<< "EOD"
히어 도큐먼트는
중간에 개행하거나
변수를 사용한 문장이 만들어지네요.
갱신일：$date
EOD;
?>

<!DOCTYPE html>
<html lang="kr">

<head>
  <meta charset="utf-8">
  <title>SplFileObject로 파일에 저장</title>
  <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
  <div>
    <?php
    $filename = "mytext.txt";
    try {
      // 파일 객체를 만든다(wb 신규 작성. 파일이 없으면 만든다)
      $fileObj = new SplFileObject($filename, "wb");
    } catch (Exception $e) {
      echo '<span class="error">오류가 발생했습니다. </span><br>';
      echo $e->getMessage();
      exit();
    }
    // 파일에 작성하기
    $written = $fileObj->fwrite($writedata);
    if ($written === FALSE) {
      echo '<span class="error">파일에 저장할 수 없습니다. </span>';
    } else {
      echo "SplFileObject의 fwrite를 사용해 <br>{$filename}에 {$written}바이트를 썼습니다. ", "<hr>";
      echo '<a href="read_file.php">파일을 읽는다</a>';
    }
    ?>
  </div>
</body>

</html>