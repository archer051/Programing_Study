<?php
// Staff 클래스를 정의한다
class Staff {
  // 클래스 프로퍼티
  public static $piggyBank = 0;
  // 클래스 메서드
  public static function deposit(int $won) {
    self::$piggyBank += $won;
  }
  // 인스턴스 프로퍼티
  public $name;
  public $age;

  // 생성자
  function __construct($name, $age){
    // 프로퍼티에 초깃값을 설정한다
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

  // 지각해서 벌금
  public function latePenalty(){
    // 정적 메서드를 실행
    self::deposit(1000);
  }
}
// ?>
