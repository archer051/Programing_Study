<?php
require_once("../../lib/util.php");
// 저장할 배열
$fruits = ["사과", "귤", "레몬", "바나나"];
// 값을 연결한 문자열로 한다
$valueString = implode("&", $fruits);
// 쿠키에 저장한다
$result = setcookie("fruits", $valueString);
?>

<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>쿠키를 저장한다</title>
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
  <?php
  if ($result) {
    echo "좋아하는 과일을 저장했습니다. ", "<hr>";
    echo '<a href="check_cookie.php">쿠키를 확인한다</a>';
  } else {
    echo '<span class="error">쿠키를 사용할 수 없습니다. </span>';
  }
  ?>
</div>
</body>
</html>
