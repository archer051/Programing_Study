
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>XSS 대응 es()</title>
  <link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
<pre>
<?php
// util.php를 읽는다
require_once("lib/util.php");
// HTML 태그가 들어간 데이터를 준비한다
$myCode = "<h2>테스트1</h2>";
$myArray = ["a"=>"<p>빨강</p>", "b"=>"<script>alert('hello')</script>"];
// es()에서 HTML 이스케이프해 표시한다
echo '$myCode 값：', es($myCode);
echo "\n\n";
echo '$myArray 값：';
print_r(es($myArray)) ;
?>
</pre>
</div>
</body>
</html>
