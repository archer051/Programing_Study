<?php
// 방문 횟수를 초기화한다(테스트용에 5분간 유효)
$result = setcookie("visitedCount", 0, time()+60*5);
?>

<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>초기화 페이지</title>
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
 <?php
  if ($result){
    echo "방문 횟수를 초기화했습니다. ", "<hr>";
    echo '<a href="page1.php">Page 1로 돌아간다</a>';
  } else {
    echo '<span class="error">방문 횟수 초기화에 오류가 있습니다. </span>';
  }
 ?>
</div>
</body>
</html>
