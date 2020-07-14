<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>결과를 int형으로 반환한다</title>
</head>
<body>
<pre>
  <?php
  // 계산 결과를 정수로 반환한다
  function twice(float $var):int {
    $var *= 2;
    return $var;
  }

  // 실행한다
  $num = 10.8;
  $result = twice($num);
  echo "{$num}의 2배는", $result;
  ?>
</pre>
</body>
</html>
