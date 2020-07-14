<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>문자 검색 바꾸기</title>
</head>
<body>
<pre>
<?php
// 같은 문자열을 사용해 다른 구문으로 문자로 치환한다
$subject = "나는 고양이입니다. ";
echo str_replace("고양이", "강아지", $subject), "\n";
echo str_replace("고양이", "말", $subject), "\n";
echo $subject;
?>
</pre>
</body>
</html>
