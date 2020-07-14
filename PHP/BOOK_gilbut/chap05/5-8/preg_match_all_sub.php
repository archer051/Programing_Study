<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>서브패턴 값을 꺼낸다</title>
</head>
<body>
<pre>
<?php
// 2013의 A~F형을 찾는다
$pattern = "/2013([A-F])-(..)/i";
$subject = "2012A-sx, 2013F-fx, 2013G-fx, 2013A-dx, 2015a-sx";
$result = preg_match_all($pattern, $subject, $matches);
// 실행 결과를 확인한다
if ($result === false) {
  echo "오류：", preg_last_error();
} else if ($result == 0){
  echo "일치한 형식은 없습니다. ";
} else {
  // 배열 값을 추출해 문자열로 연결한다
  $all =  implode(", ", $matches[0]);
  $model =  implode(", ", $matches[1]);
  $type =  implode(", ", $matches[2]);
  echo "발견한 형식: {$all}", "\n";
  echo "모델: {$model}", "\n";
  echo "타입: {$type}", "\n";
}
?>
</pre>
</body>
</html>
