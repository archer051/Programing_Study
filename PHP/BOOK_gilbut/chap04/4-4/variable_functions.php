<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>가변변수</title>
</head>
<body>
<?php
function hello($who){
  echo "{$who}씨, 안녕하세요!";
}

function bye($who){
  echo "{$who}씨, 잘가요!";
}

// 실행할 함수명
$msg = "bye";
// 함수가 존재하면 실행한다
if (function_exists($msg)){
  $msg("승현");
}
?>
</body>
</html>
