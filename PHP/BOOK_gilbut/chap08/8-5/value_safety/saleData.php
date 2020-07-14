<?php
  // 판매 데이터
  $couponList = ["nf23qw"=>0.75, "ha45as"=>0.8, "hf56zx"=>8.5];
  $priceList = ["ax101"=>2300, "ax102"=>2900];

  // 쿠폰 코드에서 할인율을 알아보고 반환한다
  function getCouponRate($code){
    global $couponList;
    // 해당하는 쿠폰 코드가 있는지 없는지 확인한다
    $isCouponCode = array_key_exists($code, $couponList);
    if ($isCouponCode){
      return $couponList[$code];
    } else {
      // 발견되지 않으면 NULL을 반환한다
      return NULL;
    }
  }

  // 상품 ID로 가격을 알아보고 반환한다
  function getPrice($id){
    global $priceList;
    // 해당하는 상품 ID가 있는지 없는지 확인한다
    $isGoodsID = array_key_exists($id, $priceList);
    if ($isGoodsID){
      return $priceList[$id];
    } else {
      // 발견되지 않으면 NULL을 반환한다
      return NULL;
    }
  }

// ?>
