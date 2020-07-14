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
    echo "{$a}, {$b}순 \n";
  } else if($a == $b){
    echo "{$a}과 {$b}은 같다.\n";
  } else if($a > $b){
    echo "{$b}, {$a}순 \n";
  }
}
// 확인
compare("apple", "apple");
compare("apple", "beatles");
compare("apple", "android");
compare("apple", "APPLE");
?>
</pre>
</body>
</html>
