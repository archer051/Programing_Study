<?php
// HobiTool 트레이트를 정의한다
trait HobiTool {
  public function hello() {
    echo "헬로! ";
  }

  // 오늘의 요일
  public function weekday() {
    $week = ["일", "월", "화", "수", "목", "금", "토"];
    $now = new DateTime();
    $w = (int)$now->format('w');
    $weekday = $week[$w];
    echo "오늘은 ", $weekday, "요일입니다. ";
  }
}
// ?>
