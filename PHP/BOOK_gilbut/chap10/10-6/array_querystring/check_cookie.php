<?php
require_once("../../lib/util.php");
?>

<!DOCTYPE html>
<html lang="kr">
<head>
  <meta charset="utf-8">
  <title>쿠키를 파기한다</title>
  <link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
  <?php
  // 쿠키 값을 읽는다
  if (isset($_COOKIE["gamedata"])){
    // 게임 데이터 값을 읽는다
    $dataQueryString = $_COOKIE["gamedata"];
    // 쿼리 문자열로부터 배열을 만든다
    parse_str($dataQueryString, $gamedata);
    // HTML 이스케이프
    $gamedata = es($gamedata);
    // 배열의 값을 나열한다
    foreach ($gamedata as $key => $value) {
      echo "{$key}：{$value}", "<br>";
    }
    echo "<hr>";
  } else {
    echo "쿠키는 없습니다. ", "<hr>";
  }
  ?>
  <a href="set_cookie.php">돌아가기</a>
</div>
</body>
</html>
