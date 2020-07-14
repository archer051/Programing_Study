<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>メタ文字 スタートエンド</title>
</head>
<body>
<pre>
<?php
// 신으로 시작하고 당으로 끝나는 4문자 이름에 일치한다
$pattern = "/^신..당$/u";
var_dump(preg_match($pattern, "신사임당"));
var_dump(preg_match($pattern, "신초충도당"));
var_dump(preg_match($pattern, "신노연도"));
?>
</pre>
</body>
</html>
