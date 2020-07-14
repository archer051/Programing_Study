<?php
  // 클래스 파일을 읽습니다
  require_once("Runner.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Runner 클래스를 이용한다</title>
</head>
<body>
<pre>
<?php
  // Runner 클래스의 인스턴스를 만든다
  $runner1 = new Runner("우사인볼트", 30);
  // 인스턴스를 확인한다
  print_r($runner1);
?>
</pre>
</body>
</html>
