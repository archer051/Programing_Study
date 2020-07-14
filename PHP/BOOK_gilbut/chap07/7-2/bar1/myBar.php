<?php
  // Staff 클래스 파일을 읽는다
  require_once("Staff.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Staff 클래스를 읽어 이용한다</title>
</head>
<body>
<pre>
<?php
  // Staff 클래스의 인스턴스를 만든다
  $hana = new Staff("하나", 21);
  $hobi = new Staff("호비", 35);
  // 메서드를 실행한다
  $hana->hello();
  $hobi->hello();
?>
</pre>
</body>
</html>
