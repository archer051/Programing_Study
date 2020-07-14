<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>URL 인코드(GET)</title>
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
<?php

// URL 인코드한다
$data = "서울";
$data = rawurlencode($data);
// 쿼리 문자열의 링크를 만든다
$url = "checkData.php";
echo "<a href={$url}?data={$data}>", "송신한다", "</a>";
?>
</div>
</body>
</html>
