<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>매치한 값을 모두 꺼낸다</title>
</head>
<body>
<pre>
<?php
// 2012~2015의 AX형 또는 FX형을 찾는다. 소문자도 찾는다
$pattern = "/201[2-5](AX|FX)/i";
$subject = "2011AX, 2012Fx, 2012AF, 2013FX, 2015ax, 2016Fx";
$result = preg_match_all($pattern, $subject, $matches);
// 실행 결과를 확인한다
if ($result === false) {
  echo "오류：", preg_last_error();
} else if ($result == 0){
  echo "일치한 형식은 없습니다. ";
} else {
  echo "{$result}개 일치했습니다. \n";
  // 배열 값을 추출해 문자열에 연결한다
  echo implode(", ", $matches[0]);
}
?>
</pre>
</body>
</html>
