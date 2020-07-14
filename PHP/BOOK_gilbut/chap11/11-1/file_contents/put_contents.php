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
<title>파일에 저장</title>
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
  <?php
  $filename = "mytext.txt";
  // 파일이 없으면 작성한다(있으면 파일 갱신일을 갱신한다)
  $result = touch($filename);
  if ($result){
    // 파일에 쓴다
    file_put_contents($filename, $writedata, LOCK_EX);
    echo "{$filename}에 데이터를 썼습니다. ", "<hr>";
    echo '<a href="get_contents.php">파일을 읽는다</a>';
  } else {
    // 파일 오류
    echo '<span class="error">파일에 저장할 수 없습니다.</span>';
  }
  ?>
</div>
</body>
</html>
