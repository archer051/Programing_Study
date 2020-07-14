<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>문자열을 비교한다</title>
</head>
<body>
<pre>
<?php
function holiday($day){
  if(($day == "토요일")||($day == "일요일")){
    echo $day, "은 쉽니다.\n";
  } else {
    echo $day, "은 쉬는 날이 아닙니다.\n";
  }
}
// 확인
holiday("금요일");
holiday("토요일");
holiday("일요일");
?>
</pre>
</body>
</html>
