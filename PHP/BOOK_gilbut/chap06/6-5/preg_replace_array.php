<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열을 정규 표현으로 검색 치환해 표시한다</title>
</head>
<body>
<pre>
<?php
$data = [];
$data[] =["name"=>"신데렐라", "age"=>37, "phone"=>"010-4321-9999"];
$data[] =["name"=>"백설공주", "age"=>32, "phone"=>"02-3434-7788"];
$data[] =["name"=>"엘사공주", "age"=>29, "phone"=>"0467-89-9191"];
$data[] =["name"=>"안나공주", "age"=>35, "phone"=>"59-1212"];
$pattern = "/(-)\d{4}$/";
$replacement = "$1****";
// 배열에서 값을 꺼낸다
foreach ($data as $user) {
  // 번화번호 끝 4자리를 별문자로 바꾼다
  $result = preg_replace($pattern, $replacement, $user);
  // 배열의 키와 값을 표시한다
  foreach ($result as $key => $value) {
    echo "{$key}：", $value, "\n";
  }
}
?>
</pre>
</body>
</html>
