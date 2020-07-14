<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열에 키가 있는지를 조사한다</title>
</head>
<body>
<pre>
<?php
// memo키가 있는 사용자를 조사한다
function getMemo($user){
  // memo키가 있다면 추가한다
  if (array_key_exists("memo", $user)){
    $profile = $user . ":" . $user["memo"] ;
  }
  return $profile;
}
// 사용자 데이터
$user1 =["name"=>"홍길동", "age"=>27];
$user2 =["name"=>"춘향이", "age"=>38, "memo"=>"변사또"];
$user3 =["name"=>"이몽룡", "age"=>31];
$userList = [$user1, $user2, $user3];
// memo키가 있는 사용자를 조사한다
foreach ($userList as $user) {
  if (array_key_exists("memo", $user)){
    echo $user["name"], ":", $user["memo"], "\n";
  }
}
?>
</pre>
</body>
</html>
