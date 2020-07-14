<?php
require_once("ShopBiz.php");

class MyShop extends ShopBiz {
  // ShopBiz 추상 클래스에서 정의되어 있는 메서드
  public function thanks(){
    echo "감사합니다. ", "\n";
  }

  // 판매한다
  public function Selling($unitPrice, $quantity){
    $price = $unitPrice * $quantity;
    // ShopBiz 추상 클래스에서 상속하는 메서드를 구현한다
    $this->sell($price);
  }
  // 매상 합계를 확인한다
  public function getSell(){
    echo "매상합계는 {$this->sales}원입니다. ";
  }
}
// ?>
