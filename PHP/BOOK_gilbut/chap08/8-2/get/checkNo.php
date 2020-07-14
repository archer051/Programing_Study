
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
  $no = $_GET["no"];
  // 번호 목록
  $nolist = [3, 5, 7, 8, 9];
  // 검색한다
  if (in_array($no, $nolist)){
    echo "{$no}은 있습니다. ";
  } else {
    echo "{$no}은 찾을 수 없습니다. ";
  }
?>
</div>
</body>
</html>
