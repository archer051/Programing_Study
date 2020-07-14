
<!DOCTYPE html>
<html lang="kr">
<head>
  <meta charset="utf-8">
  <title>악성 인코딩에 의한 공격 대응 cken()</title>
  <link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>

<?php
// util.php를 읽는다
require_once("lib/util.php");
// UTF-8 데이터를 준비한다
$utf8_string = "안녕하세요. ";
$utf8_string = mb_convert_encoding($utf8_string, 'UTF-8');
// 내부 인코딩을 검사한다
$encoding = mb_internal_encoding( "UTF-8" );
// cken()에서 검사한다
if (cken([$utf8_string])) {
  echo '배열 값은 ', $encoding, '입니다. ';
} else {
  echo '배열 값은 ', $encoding, '이 아닙니다. ';
}
?>

</div>
</body>
</html>
