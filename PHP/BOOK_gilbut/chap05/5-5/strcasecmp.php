<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>strcasecmp()을 사용해 비교한다</title>
</head>
<body>
<?php
$id1 = "AB12R";
$id2 = "ab12r";
// 대문자 소문자를 구분하지 않고 비교한다
$result = strcasecmp($id1, $id2);
echo "{$id1}과 {$id2}을 비교한 결과. ";
if ($result == 0){
  echo "일치합니다.";
} else {
  echo "일치하지 않습니다.";
}
?>
</body>
</html>
