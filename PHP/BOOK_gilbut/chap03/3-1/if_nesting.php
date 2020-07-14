<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>if문의 중첩</title>
</head>
<body>
<?php
$math = 85;
$eng = 67;
if ($math>=60) {
  if ($eng>=60) {
    echo "축하해요! 합격입니다!";
  } else {
    echo "유감이지만 불합격입니다.";
  }
} else {
  echo "유감이지만 불합격입니다.";
}
?>
</body>
</html>
