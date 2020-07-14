<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>무명 함수</title>
</head>
<body>
<?php
$myFunc = function($who){
  echo "{$who}씨, 안녕하세요！";
}; // 대입문이므로 세미콜론은 필수

// 실행한다
$myFunc("유은");
?>
</body>
</html>
