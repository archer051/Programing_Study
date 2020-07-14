<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>콜론으로 구분한 if 구문</title>
</head>
<body>
<?php
$age = 25; // 나이는 25세
?>
<?php if ($age<=15):?>
  15세 이하의 요금은 500원입니다.<br>
<?php elseif ($age<=18):?>
  16세부터 18세는 2,000원입니다.<br>
<?php else:?>
  19세 이상 성인은 2,500원입니다.<br>
<?php endif;?>
</body>
</html>
