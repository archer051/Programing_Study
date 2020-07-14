<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>수학과 영어 모두 60점 이상일 때 합격</title>
</head>
<body>
<?php
$math = 85;
$eng = 67;
// 양쪽 모두 60점 이상일 때 합격
if (($math>=60) && ($eng>=60)) {
  echo "축하해요! 합격입니다!";
} else {
  echo "유감이지만 불합격입니다.";
}
?>
</body>
</html>
