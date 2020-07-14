<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열에 키가 없으면 추가한다</title>
</head>
<body>
<pre>
<?php
// point 키가 없으면 추가한다
function newUser($user){
  if (!array_key_exists("point", $user)){
    $user["point"]=0;
  }
  return $user;
}
// 멤버 데이터
$user1 =["name"=>"홍길동", "point"=>37];
$user2 =["name"=>"춘향이"];
$user3 =["name"=>"변사또"];
// 멤버 목록에 추가하기
$memberList = [];
$memberList[] = newUser($user1);
$memberList[] = newUser($user2);
$memberList[] = newUser($user3);
// 목록을 확인하기
print_r($memberList);
?>
</pre>
</body>
</html>
