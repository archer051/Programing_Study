<?php
require_once("../../lib/util.php");
// 쿠키 값을 읽는다
if (isset($_COOKIE["visitedLog"])){
  // 방문 로그 값을 읽는다
  $logdata = $_COOKIE["visitedLog"];
  $counter = $logdata["counter"];
  $time = $logdata["time"];
  $lasttime = date("Y년n월j일 A g시i분", $time);
} else {
  // 쿠키가 없으므로 방문 로그에 초기값을 설정한다
  $counter = 0;
  $lasttime = "이번이 첫 방문";
}
// 방문 로그를 쿠키에 저장한다(24시간 유효)
$result1 = setcookie('visitedLog[counter]', ++$counter, time()+60*60*24);
$result2 = setcookie('visitedLog[time]', time(), time()+60*60*24);
$result = ($result1 && $result2);
?>

<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>Page 1</title>
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
  <?php
  if ($result) {
    echo "이 페이지의 방문은 ", es($counter), " 번째입니다. ", "<br>";
    echo "이전 방문：", es($lasttime), "<hr>";
    echo '<a href="page2.php">페이지를 이동한다</a>', "<br>";
    echo '（<a href="reset_log.php">초기화한다</a>）';
  } else {
    echo '<span class="error">쿠키를 사용할 수 없습니다. </span>';
  }
  ?>
</div>
</body>
</html>
