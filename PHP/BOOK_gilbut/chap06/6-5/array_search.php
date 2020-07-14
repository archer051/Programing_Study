<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열을 검색해 발견한 값의 키를 반환한다</title>
</head>
<body>
<pre>
<?php
// 이름 배열
$nameList = ["m01"=>"홍길동", "m02"=>"춘향이", "w01"=>"콩쥐", "w02"=>"이몽룡"];
// 나이 배열
$ageList = ["m01"=>34, "m02"=>42, "w01"=>28, "w02"=>41];
// 이름으로 나이를 알아본다
function getAge($name){
  global $nameList;
  global $ageList;
  // 발견한 이름의 키를 꺼낸다
  $key = array_search($name, $nameList);
  if ($key !== false){
    // $ageList의 같은 키의 나이를 꺼낸다
    $age = $ageList[$key];
    echo "{$name}씨는 {$age}세입니다. ";
  } else {
    echo "[{$name}]는 멤버가 아닙니다. ";
  }
}
echo getAge("콩쥐"), "\n";
echo getAge("홍길동"), "\n";
echo getAge("팥쥐"), "\n";
echo getAge("춘향이"), "\n";
?>
</pre>
</body>
</html>
