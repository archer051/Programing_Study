<?php
$name = $_GET["name"];
echo $name . "님, 홈페이지 방문을 환영합니다.";
echo "<hr>";

$change_name = htmlspecialchars($name, ENT_QUOTES, "utf-8");
echo $change_name . "님, 홈페이지 방문을 환영합니다.";