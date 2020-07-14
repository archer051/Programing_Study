<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열에서 순서대로 키와 값을 꺼낸다</title>
</head>
<body>
<?php
$data = ["ID"=>"TR123", "상품명"=>"핑크팬터", "가격"=>14500];
echo "<ul>", "\n";
// 배열에서 순서대로 키와 값을 꺼낸다
foreach($data as $key => $value){
  echo "<li>", $key, ": ", $value, "</li>\n";
}
echo "</ul>\n";
?>
</body>
</html>
