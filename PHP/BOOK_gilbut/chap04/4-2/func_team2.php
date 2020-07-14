<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>사용자 정의 함수를 사용해 계산한다</title>
</head>
<body>
<?php
function team($name, ...$members){
  // 배열 $members 이름을 연결한다
  $list = implode(", ", $members);
  return "{$name}：{$list}";
}

// 팀을 만든다
$team1 = team("퍼스트팀", "루니", "포그바", "로호");
$team2 = team("리저브팀", "튀앙제브", "슈바인슈타이거");
echo $team1 . "<br>" . PHP_EOL;
echo $team2;
?>
</body>
</html>
