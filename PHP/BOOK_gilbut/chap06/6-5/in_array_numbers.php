<?php
// 확인할 번호
$numList = [1008, 1234, 1301];
// 합격 번호
$numbers = [1301, 1206, 1008, 1214];
// 합격 확인
function checkNumber($no){
  global $numbers;
  if (in_array($no, $numbers)){
    echo "{$no}번은 합격입니다. ";
  } else {
    echo "{$no}번은 없습니다. ";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열을 검색한다</title>
</head>
<body>
<?php
// 결과 목록
echo "<ol>\n";
// $numList 값을 모두 확인한다
foreach ($numList as $value) {
  echo "<li>", checkNumber($value), "</li>\n";
}
echo "</ol>\n";
?>
</body>
</html>
