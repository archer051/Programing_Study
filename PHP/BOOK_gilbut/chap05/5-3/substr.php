<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>영숫자 문자만인 문자열에서 문자를 뽑는다</title>
</head>
<pre>
<?php
$id = "ABC1X239KR";
echo substr($id, 4), "\n"; // 5번째 문자부터 마지막까지
echo substr($id, 5, 3), "\n"; // 6번째 문자부터 3문자
echo substr($id, -2); // 마지막부터 2문자
?>
</pre>
</body>
</html>
