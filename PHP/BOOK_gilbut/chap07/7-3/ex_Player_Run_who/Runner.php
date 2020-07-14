<?php
// Player 클래스 정의 파일을 읽는다
require_once("Player.php");
// Runner 클래스를 정의한다
class Runner extends Player {
  // 프로퍼티
  public $age;

  // 생성자
  function __construct($name, $age){
    // 부모 클래스의 생성자를 호출한다
    parent::__construct($name);
    // 프로퍼티에 초깃값을 설정한다
    $this->age = $age;
  }

  // 오버라이드한다
  public function who() {
    echo "{$this->name}, {$this->age}세입니다. ", "\n";
  }

  // 인스턴스 메서드
  public function play() {
    echo "{$this->name}가 달린다! ", "\n";
  }
}
// ?>
