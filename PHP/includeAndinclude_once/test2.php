<!-- 인클루드 차이 -->
<?php
include_once "include1.php";
echo $a;
$a += 1;
echo "<br>";

include_once "include1.php";
echo $a;
?>