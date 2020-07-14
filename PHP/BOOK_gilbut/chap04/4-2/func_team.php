<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>사용자 정의 함수를 사용해 계산한다</title>
</head>
<body>
<?php
function team($name, ...$members){
  print_r($name . PHP_EOL);
  print_r($members);
}

// team()을 확인한다
team("퍼스트팀", "루니", "포그바", "로호")
?>

</body>
</html>
