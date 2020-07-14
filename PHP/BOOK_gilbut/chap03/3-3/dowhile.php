<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>합계가 21이 되는 3개 변수가 정해질 때까지 반복</title>
</head>
<body>
<?php
do {
  // 변수에 1〜13의 난수를 넣는다
  $a = mt_rand(1, 13);
  $b = mt_rand(1, 13);
  $c = mt_rand(1, 13);
  $abc = $a + $b + $c;
  // 합계가 21이 되면 do~while 문을 빠져나간다
  if ($abc == 21) {
  	break;
  }
} while (TRUE);
echo "합계가 21이 되는 ３개의 숫자. {$a}, {$b}, {$c}";
?>
</body>
</html>
