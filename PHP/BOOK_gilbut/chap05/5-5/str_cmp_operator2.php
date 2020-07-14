<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>비교연산자로 문자열 크기를 비교한다</title>
</head>
<body>
<pre>
<?php
function compare($a, $b){
  if($a < $b){
    echo "{$a},{$b}순 \n";
  } else if($a == $b){
    echo "{$a}와 {$b}은 같다 \n";
  } else if($a > $b){
    echo "{$b}, {$a}순 \n";
  }
}
// 문자열과 수치를 비교한다
compare("120", 99);
compare("A5", 0);
// $num을 String형으로 캐스트해 비교한다
$num = 99;
compare("A5", (string)$num);
?>
</pre>
</body>
</html>
