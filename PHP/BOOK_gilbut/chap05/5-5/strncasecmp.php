<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>전방일치로 비교한다</title>
</head>
<body>
<pre>
<?php
function check($str2){
  $str1 = "ABC";
  // $str2가 str1로 시작되는지를 확인
  $result = strncasecmp($str1, $str2, strlen($str1));
  echo "{$str2}는 ";
  if ($result == 0){
    echo "{$str1}로 시작한다.\n";
  } else {
    echo "그 외. \n";
  }
}
// 확인할 문자
$id1 = "ABCR70";
$id2 = "xbcM65";
$id3 = "AbcW71";
$id4 = "xABC68";
check($id1);
check($id2);
check($id3);
check($id4);
?>
</pre>
</body>
</html>
