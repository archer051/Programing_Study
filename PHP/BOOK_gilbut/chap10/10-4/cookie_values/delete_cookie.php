<?php
// 쿠키를 삭제한다
$result = setcookie("message", "", time()-3600);
?>

<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>쿠키 삭제 페이지</title>
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
  <?php
  if ($result){
    echo "쿠키를 삭제했습니다. ", "<hr>";
    echo '<a href="check_cookie.php">쿠키를 확인하는 페이지로</a>';
  } else {
    echo '<span class="error">쿠키 삭제에 오류가 발생했습니다. </span>', "<br>";
  }
  ?>
</div>
</body>
</html>
