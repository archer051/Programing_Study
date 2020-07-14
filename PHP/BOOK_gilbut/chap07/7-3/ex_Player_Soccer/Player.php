<?php
// Player 클래스를 정의한다
class Player {
  // 인스턴스 프로퍼티
  public $name;

  // 생성자
  function __construct($name = '이름없음'){
    // 프로퍼티에 초깃값을 설정한다
    $this->name = $name;
  }

  // 문자열로 형변환되었을 때 반환되는 문자열
  public function __toString() {
    return $this->name;
  }

  // 인스턴스 메서드
  public function who() {
    echo "{$this->name}입니다. ", "\n";
  }
}
// ?>
