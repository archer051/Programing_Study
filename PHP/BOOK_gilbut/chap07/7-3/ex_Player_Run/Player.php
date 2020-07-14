<?php
// Player 클래스를 정의한다
class Player {
  // 인스턴스 프로퍼티
  public $name;

  // 생성자
  function __construct($name = '이름 없음'){
    // 프로퍼티에 초기값을 설정한다
    $this->name = $name;
  }

  // 문자열로 형변환되었을 때 반환하는 문자열
  public function __toString() {
    return $this->name;
  }

  // 인스턴스 메서드
  public function who() {
    echo "{$this->name}입니다. ", "\n";
  }
}
// ?>
