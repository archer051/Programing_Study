<?php
require_once("HobiTool.php");
require_once("HanaTool.php");
// MyClass 클래스를 정의한다
class MyClass {
  // ２개의 트레이트를 사용한다
  use HobiTool, HanaTool {
    HanaTool::hello insteadof HobiTool;
  }
}
// ?>
