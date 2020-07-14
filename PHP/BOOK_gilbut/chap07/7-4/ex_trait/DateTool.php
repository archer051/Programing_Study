<?php
// DateTool 트레이트를 정의한다
trait DateTool {
  // DateTime을 연월일 서식으로 반환한다
  public function ymdString($date) {
    $dateString = $date->format('Y년 m월 d일');
    return $dateString;
  }

  // 지정 일수 후의 연월일로 반환한다
  public function addYmdString($date, $days) {
    $date->add(new DateInterval("P{$days}D"));
    return $this->ymdString($date);
  }
}
// ?>
