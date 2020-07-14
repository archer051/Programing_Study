<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>무명함수에서 사용하는 함수에 값을 설정한다</title>
</head>
<body>
<?php
// 무명함수에서 사용하는 변수에 값을 설정한다
$msg = "고맙습니다.";
$myFunc = function ($who) use ($msg){
  echo "{$who}씨, " . $msg;
};

// 실행한다
$myFunc("유은");
?>
</body>
</html>
