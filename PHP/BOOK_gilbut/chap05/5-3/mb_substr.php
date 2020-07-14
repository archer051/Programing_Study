<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>문자를 꺼낸다</title>
</head>
<body>
<pre>
<?php
$msg = "입춘이 지났다. 그래도 아직 춥다.";
echo mb_strlen($msg), "\n"; // 문자 수
echo mb_substr($msg, 4), "\n"; // 5번째 문자부터 마지막까지
echo mb_substr($msg, 4, 10), "\n"; // 5번째 문자부터 10문자
echo mb_substr($msg, -6); // 마지막부터 6문자
?>
</pre>
</body>
</html>
