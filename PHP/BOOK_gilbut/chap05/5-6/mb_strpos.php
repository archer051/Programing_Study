<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>문자열을 검색한다</title>
</head>
<body>
<pre>
<?php
function check($target, $str){
  $result = mb_strpos($target, $str);
  if($result === false){
    echo "[{$str}]은(는) [{$target}]에 포함되어 있지 않습니다. \n";
  } else {
    echo "[{$str}]은(는) [{$target}]의 {$result}번째에 문자가 있습니다. \n";
  }
}
// 확인
check("서울시마포구합정동", "마포");
check("서울시마포구합정동", "강남");
check("PHP, Swift, C++", "PHP");
check("PHP, Swift, C++", "Python");
?>
</pre>
</body>
</html>
