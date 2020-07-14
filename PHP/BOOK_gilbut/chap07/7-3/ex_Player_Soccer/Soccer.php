<?php
// Player 클래스 정의 파일을 읽기
require_once("Player.php");
// Soccer 클래스를 정의한다
class Soccer extends Player {

  // 인스턴스 메서드
  public function play() {
    echo "{$this->name}가 슛! ", "\n";
  }
}
// ?>
