<?php
// Staff 클래스를 정의한다
class Staff {
  // 인스턴스 프로퍼티
  public $name;
  public $age;

  // 생성자
  function __construct($name, $age){
    // 프로퍼티에 초기값을 설정한다
    $this->name = $name;
    $this->age = $age;
  }

  // 인스턴스 메서드
  public function hello() {
    if (is_null($this->name)) {
      echo "안녕하세요! ", "\n";
    } else {
      echo "안녕하세요, {$this->name}입니다！", "\n";
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>생성자가 있는 클래스를 이용한다</title>
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
