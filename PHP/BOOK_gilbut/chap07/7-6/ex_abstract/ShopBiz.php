<?php
abstract class ShopBiz {
  // 추상 메서드
  abstract function thanks();
  // 인스턴스 멤버
  protected $sales = 0;
  protected function sell($price){
    if (is_numeric($price)){
      echo "{$price}원입니다. ";
      $this->sales += $price;
    }
    // 자식 클래스에서 구현되는 메서드를 호출한다
    $this->thanks();
  }
}
// ?>
