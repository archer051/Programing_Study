<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>지정문자보다 뒤의 문자를 꺼낸다</title>
</head>
<body>
<pre>
<?php
function pickout($target, $str){
  $result = mb_stristr($target, $str);
  if($result === false){
    echo "(not found)\n";
  } else {
    echo "{$result}\n";
  }
}
// 확인
pickout("서울시강남구대치동2-3-4", "대치");
pickout("서울시마포구합정동1-1-1", "마포구");
pickout("서울시마포구연남동5-5-5", "강남");
?>
</pre>
</body>
</html>
