<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>문자열과 수치를 엄격하게 비교한다</title>
</head>
<body>
<pre>
<?php
function check($a, $b){
  if($a === $b){
    echo "{$a}와(과) {$b}은(는)", " 같다\n";
  } else {
    echo "{$a}와(과) {$b}은(는)", " 다르다\n";
  }
}
// 확인
check("7cm", "7cm");
check("7km", "7cm");
check("7명", 7);
check("PHP7", 7);
check("칠", 0);
?>
</pre>
</body>
</html>
