<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>인수를 int형으로 받는다</title>
</head>
<body>
<pre>
  <?php
  // 인수는 정수
  function twice(int $var) {
    $var *= 2;
    return $var;
  }
  // 실행한다
  $num = 10.8;
  $result = twice($num);
  echo "{$num}의 2배는 ", $result;
  ?>
</pre>
</body>
</html>
