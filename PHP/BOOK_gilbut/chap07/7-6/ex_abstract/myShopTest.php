<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>MyShop 클래스를 읽어 확인한다</title>
</head>
<body>
<pre>
<?php
  // MyShop 클래스 파일을 읽는다
  require_once("MyShop.php");
  // MyShop 클래스의 인스턴스를 만들어 확인한다
  $myObj = new MyShop();
  $myObj->Selling(240, 3);
  $myObj->Selling(400, 1);
  $myObj->getSell();
?>
</pre>
</body>
</html>
