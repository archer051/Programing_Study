<?php
require_once("GameBook.php");

class MyGame implements GameBook {
  public $hitPoint;

  function __construct($point = 50){
    $this->newGame($point);
  }

/* GameBook 인터페이스에서 지정되어 있는 메서드 */
  // 새 게임
  public function newGame($point = 50){
    $this->hitPoint = $point;
  }
  // 게임 시작
  public function play(){
    $num = random_int(0,50);
    if ($num%2 == 0){
      echo "{$num} 포인트가 증가했습니다! ", "\n";
      $this->hitPoint += $num;
    } else {
      echo "{$num} 포인트가 감소했습니다! ", "\n";
      $this->hitPoint -= $num;
    }
    echo "현재 {$this->hitPoint} 점", "\n";
  }
  // 승패 확인
  public function isAlive():bool{
    return ($this->hitPoint > 0);
  }
}
// ?>
