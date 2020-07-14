<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title>이름 배열</title>
</head>
<body>
<pre>
<?php
// 연관배열을 사용해 멤버 이름과 나이를 관리한다
$member1 = ['name' => '김철수', 'age' => 29];
$member2 = ['name' => '이민우', 'age' => 32];
$member3 = ['name' => '박영배', 'age' => 37];
$member4 = ['name' => '김소라', 'age' => 26];
$member5 = ['name' => '이수지', 'age' => 32];

// 배열을 사용해 팀을 나눈다
$teamA = [$member1, $member2, $member3];
$teamB = [$member4, $member5];

// 확인한다
print_r($teamA);
?>
</pre>
</body>
</html>
