<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>논리곱을 이용한 조건식 and</title>
</head>
<body>
<?php
$sex = "woman";
$age = 34;
if ($sex == "woman") {
  if (($age>=30)&&($age<40)) {
    echo "채용합니다.";
  } else {
    echo "30대만을 모집하고 있습니다.";
  }
} else {
  echo "여성만 모집합니다.";
}
?>
</body>
</html>
