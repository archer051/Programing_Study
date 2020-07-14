<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>preg_quote()로 이스케이프한다</title>
</head>
<body>
<pre>
<?php
// URL에 포함되어 있는 메타 문자를 이스케이프한다
$escaped = preg_quote("http://sample.com/php/", "/");
$pattern = "/{$escaped}/u";
echo $pattern, "\n";
var_dump(preg_match($pattern, "URL은 http://sample.com/php/입니다"));
var_dump(preg_match($pattern, "URL은 http://sample.com/swift/입니다"));
?>
</pre>
</body>
</html>
