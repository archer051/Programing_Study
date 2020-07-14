<?php
  // Staff 클래스 파일을 읽는다
  require_once("Staff.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Staff 클래스 멤버를 사용한다</title>
</head>
<body>
<pre>
<?php
// 클래스 멤버를 실행한다
Staff::deposit(100);
Staff::deposit(150);
// 클래스 프로퍼티를 확인한다
echo Staff::$piggyBank, "원이 되었습니다. \n";

// 인스턴스를 만든다
$hana = new Staff("하나", 21);
// 인스턴스 메서드를 실행한다
$hana->latePenalty();
// 클래스 프로퍼티를 확인한다
echo Staff::$piggyBank, "원이 되었습니다. \n";
?>
</pre>
</body>
</html>
