<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열에 신규 값만 추가한다</title>
</head>
<body>
<pre>
<?php
// 배열에 신규 값만을 추가한다
function array_addUnique(&$array, $value){
  if (in_array($value, $array)){
    return false;
  } else {
    // 값을 추가한다
    $array[] = $value;
    return true;
  }
}
// 확인한다
$myList = ["blue", "green"];
array_addUnique($myList, "white");
array_addUnique($myList, "blue");
array_addUnique($myList, "red");
array_addUnique($myList, "green");
print_r($myList);
?>
</pre>
</body>
</html>
