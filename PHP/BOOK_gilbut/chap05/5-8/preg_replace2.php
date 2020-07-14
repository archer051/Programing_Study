<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>패턴과 치환 문자를 배열로 지정한다</title>
</head>
<body>
<pre>
<?php
// 개최일과 시작 시간을 배열로 치환한다
$pattern = ["/개최일/u", "/시작시간/u"];
$replacement = ["금요일", "오후 2:30"];
$subject = "다음은 개최일 시작시간부터입니다.";
$result = preg_replace($pattern,$replacement, $subject);
echo $result;
?>
</pre>
</body>
</html>
