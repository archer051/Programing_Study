
<!DOCTYPE html>
<html lang="kr">
<head>
  <meta charset="utf-8">
  <title>GET 요청 처리</title>
  <link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
<?php
  // GET 요청 파라미터 값을 받는다
  $data = $_GET["data"];
  // URL 디코드한다
  $data = rawurldecode($data);
  echo "[{$data}]을 받았습니다. ";
?>
</div>
</body>
</html>
