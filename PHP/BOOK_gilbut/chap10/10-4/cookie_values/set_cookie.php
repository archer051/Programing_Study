<?php
// 쿠키에 저장할 값을 준비한다
$message = "헬로";
// 쿠키에 값을 대입한다(브라우저를 닫을 때까지 유효）
$result = setcookie("message", $message);
?>

<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>쿠키 저장 페이지</title>
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
  <?php
  if ($result){
    echo "쿠키를 저장했습니다. ", "<hr>";
    echo '<a href="check_cookie.php">쿠키를 확인하는 페이지로</a>';
  } else {
    echo '<span class="error">쿠키 저장에 오류가 발생했습니다. </span>', "<br>";
  }
  ?>
</div>
</body>
</html>
