<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>배열을 검색 치환해 표시한다</title>
</head>
<body>
<pre>
<?php
$data= ["NV15", "ST", "MD500GB"];
$search = ["NV", "ST", "MD"];
$replacement = ["New Vision", "슬림타워","멀티 드라이브 "];
$result = str_replace($search, $replacement, $data);
echo "상품 데이터：\n";
echo $result[0], ", ", $result[1], ", ", $result[2];
?>
</pre>
</body>
</html>
