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
// ?>
