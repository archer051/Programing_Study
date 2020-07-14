<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>인수의 개수를 고정하지 않는 함수</title>
</head>
<body>
<pre>
<?php
function myFunc(){
  // 모든 인수
  $allArgs = func_get_args();
  // 인수 값의 합계
  $total = array_sum($allArgs);
  // 인수의 개수
  $numArgs = func_num_args();
  if ($numArgs>0){
    $average = $total/$numArgs;
    // 마지막 값을 꺼낸다
    $lastValue = func_get_arg($numArgs-1);
  } else {
    $lastValue = $average = $total = "（데이터없음）";
  }
  echo "합계점 ", $total, "\n";
  echo "평균점 ", $average, "\n";
  echo "마지막 점수 ", $lastValue, "\n";
}

// 실행한다
myFunc(43, 67, 55, 75);
?>
</pre>
</body>
</html>
