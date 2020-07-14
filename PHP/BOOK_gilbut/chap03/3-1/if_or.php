<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>눈리곱을 이용한 조건식 or</title>
</head>
<body>
<?php
$math = 42;
$eng = 67;
// 어느 한쪽만 60점 이상이면 합격
if (($math>=60) || ($eng>=60)) {
  echo "축하해요! 합격입니다!";
} else {
  echo "유감이지만 불합격입니다.";
}
?>
</body>
</html>
