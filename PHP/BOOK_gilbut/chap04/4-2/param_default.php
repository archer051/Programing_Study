<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>사용자 정의 함수를 사용해 계산한다</title>
</head>
<body>
<?php
function charge($grade, $days=1) {
  switch ($grade){
    case "A":
      $price = 15000 * $days;
      break;
    case "B":
      $price = 12000 * $days;
      break;
    default:
      $price = 8000 * $days;
      break;
  }
  return $price;
}
?>

<?php
// B 등급에서 2박하는 경우와 A 등급에서 숙박 수를 생략한 경우
$price1 = charge("B", 2);
$price2 = charge("A");
echo "금액1은 {$price1}원" . "<br>" . PHP_EOL;
echo "금액2는 {$price2}원";
?>
</body>
</html>
