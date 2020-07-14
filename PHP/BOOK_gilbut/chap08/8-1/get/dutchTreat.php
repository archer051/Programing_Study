<!DOCTYPE html>
<html lang="kr">
<head>
  <meta charset="utf-8">
  <title>GET 요청 처리</title>
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div>
<?php
  // GET 요청의 파라미터 값을 받는다
  $sum = $_GET["sum"];
  $headcount = $_GET["headcount"];
  // 계산한다
  $rest = $sum % $headcount;
  $price = ($sum - $rest) / $headcount;
  // 표시한다
  echo "{$sum}원을 {$headcount}명이 각자 지불합니다. ", "<br>";
  echo "１명당 {$price}원을 내면 부족분은 {$rest}원입니다. "
?>
</div>
</body>
</html>
