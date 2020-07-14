<?php
require_once("../../lib/util.php");
// 쿠키 값을 읽는다
if (isset($_COOKIE["visitedCount"])){
  // 현재 카운터 값을 읽는다
  $visitedCount = $_COOKIE["visitedCount"];
} else {
  // 쿠키가 없으므로 카운터에 초기값을 설정한다
  $visitedCount = 0;
}
// 쿠키 값을 증가시킨다(테스트용으로 5분간 유효)
$result = setcookie("visitedCount", ++$visitedCount, time()+60*5);
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
    echo "이 페이지의 방문은 ", es($visitedCount), " 번째입니다. ", "<hr>";
    echo '<a href="page2.php">페이지를 이동한다</a>', "<br>";
    echo '（<a href="reset_counter.php">초기화한다</a>）';
  } else {
    echo '<span class="error">쿠키를 사용할 수 없습니다.</span>';
  }
  ?>
</div>
</body>
</html>
