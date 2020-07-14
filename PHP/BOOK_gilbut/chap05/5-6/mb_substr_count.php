<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>문자열이 포함되어 있는 개수를 알아본다</title>
</head>
<body>
<pre>
<?php
function check($target){
  $result = mb_substr_count($target, "불합격");
  if($result >= 3){
    echo "불합격이 {$result}개 있으므로 다시 검사합니다. \n";
  } else {
    echo "합격입니다. \n";
  }
}
// 확인
check("우수,불합격,좋음,합격,우수,합격");
check("可,우수,불합격,불합격,좋음,불합격");
check("불합격,합격,불합격,불합격,좋음,불합격");
check("합격,좋음,좋음,불합격,좋음,불합격");
?>
</pre>
</body>
</html>
