<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>매치한 값을 꺼내기</title>
</head>
<body>
<pre>
<?php
// [광]으로 시작하고 [왕]으로 끝나는 이름
$pattern = "/광.+왕/u";
// 히어 도큐먼트
$subject = <<< "names"
광해
광개토대왕
세종대왕
동명성왕
names;
// 매치 테스트
$result = preg_match($pattern, $subject, $matches);
// 실행 결과를 확인한다
if ($result === false) {
  echo "오류：", preg_last_error();
} else if ($result == 0){
  echo "일치된 값은 없습니다.";
} else {
  echo "[", $matches[0], "]이 발견되었습니다. ";
}
?>
</pre>
</body>
</html>
