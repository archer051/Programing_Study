<?php
require_once("WorldRule.php");

class MyClass implements WorldRule {

  // WorldRule 인터페이스에서 지정되어 있는 메서드
  public function hello(){
    echo "안녕하세요！", "\n";
  }
  // MyClass 자체 메서드
  public function thanks(){
    echo "고맙습니다", "\n";
  }
}
// ?>
