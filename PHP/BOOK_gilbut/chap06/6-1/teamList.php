<?php
// 배열을 사용해 팀을 나눈다
$teamA = ["김철수", "이민우", "박영배"];
$teamB = ["김소라", "이수지"];
// 팀 멤버 이름을 목록 표시한다
function teamList($teamname, $namelist){
  echo "{$teamname}", "\n";
  echo "<ol>", "\n";
  for($i=0; $i<count($namelist); $i++){
    echo "<li>", $namelist[$i], "</li>\n";
  }
  echo "</ol>\n";
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>이름 목록</title>
</head>
<body>
<!-- 팀 표시 -->
<?php
teamList('A팀', $teamA);
teamList('B팀', $teamB);
?>
</body>
</html>
