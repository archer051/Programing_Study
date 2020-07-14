<?php
  // 클래스 파일을 읽기
  require_once("Soccer.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Soccer 클래스를 이용한다</title>
</head>
<body>
<pre>
<?php
  // Soccer 클래스의 인스턴스를 만든다
  $player1 = new Soccer("meshi");
  // 부모 클래스의 메서드를 확인한다
  $player1->who();
  // 자식 클래스의 메서드를 확인한다
  $player1->play();
?>
<!-- 매직 메서드를 확인한다 -->
<?php
  // Soccer 클래스의 인스턴스를 만든다
  $player2 = new Soccer("honaldo");
  // __toString() 메서드를 확인한다
  echo "{$player2}";
?>
</pre>
</body>
</html>
