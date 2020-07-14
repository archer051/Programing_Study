<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>strcmp()을 사용해 비교한다</title>
</head>
<body>
<pre>
<?php
function compareStr($a, $b){
  // 문자열로 캐스트해 비교한다
  $result = strcmp($a, $b);
  if($result < 0){
    echo "{$a}, {$b}순 \n";
  } else if($result === 0){
    echo "{$a}과 {$b}은 같다 \n";
  } else if($result > 0){
    echo "{$b}, {$a}순 \n";
  }
}
// 확인
compareStr("123", 99);
compareStr("A123", 99);
compareStr("009", 99);
?>
</pre>
</body>
</html>
