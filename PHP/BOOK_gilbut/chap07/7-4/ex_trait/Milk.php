<?php
require_once("DateTool.php");
// Milk 클래스를 정의한다
class Milk {
  // DateTool 트레이트를 사용한다
  use DateTool;
  // 프로퍼티 선언
  public $theDate;
  public $limitDate;

  function __construct(){
    // 오늘 날짜
    $now = new DateTime();
    // 연월일에 다시 설정한다
    $this->theDate = $this->ymdString($now);
    // 10일 후의 날짜
    $this->limitDate = $this->addYmdString($now, 10);
  }
}
// ?>
