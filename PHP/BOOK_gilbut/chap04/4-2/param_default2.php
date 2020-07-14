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

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>사용자 정의 함수를 사용해 계산한다</title>
</head>
<body>
<?php
// 등급, 숙박수 모두 생략한 경우
$price3 = charge();
echo "금액3은 {$price3}원";
?>
</body>
</html>
