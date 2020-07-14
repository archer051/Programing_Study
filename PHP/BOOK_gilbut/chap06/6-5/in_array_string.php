<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열을 검색한다</title>
</head>
<body>
<pre>
<?php
$nameList = ["유시진", "Sam Jones", "강모연"];
function nameCheck($name){
  global $nameList;
  if (in_array($name, $nameList)){
    echo "멤버입니다. ";
  } else {
    echo "멤버가 아닙니다. ";
  }
}
// 확인한다
echo nameCheck("유시진"), "\n";
echo nameCheck("강"), "\n";
echo nameCheck("Sam Jones"), "\n";
echo nameCheck("SAM JONES"), "\n";
?>
</pre>
</body>
</html>
