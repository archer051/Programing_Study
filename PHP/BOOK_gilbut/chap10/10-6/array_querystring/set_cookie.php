<?php
require_once("../../lib/util.php");
// 저장하는 배열
$gamedata = ["name"=>"제시", "age"=>19, "avatar"=>"blue_snake", "level"=>"a02wr215"];
// 배열을 쿼리 문자열로 한다
$dataQueryString = array2queryString($gamedata);
// 쿠키에 저장한다（）
$result = setcookie("gamedata", $dataQueryString, time()+60*5);
?>

<?php
// 배열의 키와 값을 쿼리 문자열로 변환한다
function array2queryString(array $variable){
  $data = [];
  foreach ($variable as $key => $value) {
    $data[] = "{$key}={$value}";
  }
  // 쿼리 문자열을 만든다
  $queryString = implode("&", $data);
  return $queryString;
}
?>

<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>쿠키를 저장한다</title>
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
  <?php
  if ($result) {
    echo "게임 데이터를 저장했습니다. ", "<hr>";
    echo '<a href="check_cookie.php">쿠키를 확인한다</a>';
  } else {
    echo '<span class="error">쿠키를 사용할 수 없습니다. </span>';
  }
  ?>
</div>
</body>
</html>
