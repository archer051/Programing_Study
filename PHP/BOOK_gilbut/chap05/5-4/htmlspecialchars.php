<?php
$msg = "서울<->제주도 'Eat & Run' 투어";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>엔터티 변환</title>
</head>
<body>
<?php
// 엔터티 변환을 해 표시한다
echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8');
?>
</body>
</html>
