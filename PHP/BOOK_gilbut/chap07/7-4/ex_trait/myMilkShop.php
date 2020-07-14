<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Milk 클래스를 읽어 이용한다</title>
</head>
<body>
<pre>
<?php
  // Milk 클래스 파일을 읽는다
  require_once("Milk.php");
  // Milk 클래스의 인스턴스를 만든다
  $myMilk = new Milk();
  echo "작성일: ", $myMilk->theDate;
  echo "\n";
  echo "기한일: ", $myMilk->limitDate;
?>
</pre>
</body>
</html>
