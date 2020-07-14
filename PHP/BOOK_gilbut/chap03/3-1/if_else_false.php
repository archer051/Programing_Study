<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>45점일 때 else 블록이 실행된다</title>
</head>
<body>
<?php
$score = 45;
if ($score>=80) {
  echo "우수함! ";
} else {
  echo "조금 더 힘내세요! ";
}
echo "{$score}점입니다."
?>
</body>
</html>
