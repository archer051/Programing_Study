<?php
// 세션 시작
session_start();
require_once("../../lib/util.php");
// 확인 페이지에서 돌아왔을 때 세션 변수의 값을 읽는다
if (empty($_SESSION['name'])){
  $name = "";
} else {
  $name = $_SESSION['name'];
}
if (empty($_SESSION['words'])){
  $words = "";
} else {
  $words = $_SESSION['words'];
}
?>

<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>입력페이지</title>
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
  설문 조사(1 / 2)<br>
  <form method="POST" action="dogcat.php">
    <ul>
      <li><label>이름: 
        <input type="text" name="name" placeholder="별명을 써도 됩니다." value="<?php echo es($name) ?>";>
      </label></li>
      <li><label>좋아하는 단어: 
        <input type="text" name="words" value="<?php echo es($words) ?>";>
      </label></li>
      <li><input type="submit" value="다음으로"></li>
    </ul>
  </form>
</div>
</body>
</html>
