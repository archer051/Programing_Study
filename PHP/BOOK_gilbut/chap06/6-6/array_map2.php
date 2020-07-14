<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>여러 개의 배열을 병렬적으로 처리한다</title>
</head>
<body>

<?php
// 2개의 배열 값을 리스트업한다
function listUp($value1, $value2){
  // <li>태그를 붙여 목록 형식으로 표시한다
  echo "<li>", $value1, " -- ", $value2, "</li>", "\n";
}

// 통과지점
$point = ["10km", "20km", "30km", "40km", "Goal"];
// 구간 기록
$split = ["00:50:37", "01:39:15", "02:28:25", "03:21:37", "03:34:44"];
echo "<ul>", "\n";
array_map("listUp", $point, $split);
echo "</ul>";
?>

</body>
</html>
