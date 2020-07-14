<?php
// 쿠키를 파기한다
$result1 = setcookie('visitedLog[counter]', "", time()-3600);
$result2 = setcookie('visitedLog[time]', "", time()-3600);
$result = ($result1 && $result2);
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
    echo "방문 로그의 쿠키를 파기했습니다. ", "<hr>";
    echo '<a href="page1.php">Page 1로 돌아간다</a>';
  } else {
    echo '<span class="error">쿠키 파기에 오류가 발생했습니다. </span>';
  }
 ?>
</div>
</body>
</html>
