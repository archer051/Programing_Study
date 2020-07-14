<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열의 요소에서 함수를 반복 실행한다</title>
</head>
<body>

<?php
// 통화 환산해 목록 표시하는 콜백함수
function exchangeList($value, $key, $rateData){
  // 환율을 환산한다
  $rate = $rateData["rate"];
  if ($rate == 0) {
    return;
  }
  $price = $value/$rate;
  // 소수점 아래 2자리까지 표시하는 서식으로 변환한다
  $exPrice = sprintf('%.02f', $price);
  // <li>태그와 통화 마크를 붙여서 목록표시한다
  echo "<li>", $rateData["symbol"], $exPrice, "</li>";
}

// 한화 가격
$priceList = [23000, 12000, 40000];
// 원／달러 환율
$dollarwon = ["symbol"=>'$', "rate"=>1141.00];
// 통화 환산해 목록 표시한다
echo "<ul>";
array_walk($priceList, "exchangeList", $dollarwon);
echo "</ul>";
?>

</body>
</html>
