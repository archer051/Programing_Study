<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열을 변수로 전개한다</title>
</head>
<body>
<pre>
<?php
$data = ["a987", "강모연", 23];
list($id, $name, $age) = $data;
echo "회원ID: ", $id, "\n";
echo "이름: ", $name, "\n";
echo "나이: ", $age, "\n";
?>
</pre>
</body>
</html>
