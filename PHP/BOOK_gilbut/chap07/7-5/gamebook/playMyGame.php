<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>MyGame 클래스를 읽어 게임한다</title>
</head>
<body>
<pre>
<?php
  // MyGame 클래스 파일을 읽는다
  require_once("MyGame.php");
  // MyGame 클래스의 인스턴스를 만든다
  $myPlayer = new MyGame();
  for ($i=0; $i<10; $i++){
    $myPlayer->play();
    if (! $myPlayer->isAlive()) {
      break;
    }
  }
  echo "게임 종료", "\n";
?>
</pre>
</body>
</html>
