<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>클래스로부터 인스턴스를 만든다</title>
</head>
<body>
<pre>
<?php
// 요리사를 정의한다
class Cook {
  public $age;

  public function omlete() {
    echo "오믈렛을 만듭니다. ";
  }
}

// 요리사를 만든다
$cook1 = new Cook();
$cook2 = new Cook();
$cook1->omlete();
$cook2->age = 26;
echo $cook2->age;
?>
</pre>
</body>
</html>
