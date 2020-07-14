<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>MyClass 클래스를 읽어 이용한다</title>
</head>
<body>
<pre>
<?php
  // MyClass 클래스 파일을 읽는다
  require_once("MyClass.php");
  // MyClass 클래스의 인스턴스를 만든다
  $myObj = new MyClass();
  $myObj->hello();
  echo "\n";
  $myObj->weekday();
?>
</pre>
</body>
</html>
