<?php
require_once("../../lib/util.php");
$gobackURL = "insertform.php";

// 문자 인코드 검증
if (!cken($_POST)){
  header("Location:{$gobackURL}");
  exit();
}
?>

<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>레코드 추가</title>
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
  <?php
  // 간단한 오류 처리
  $errors = [];
  if (!isset($_POST["id"])||($_POST["id"]==="")){
    $errors[] = "상품ID가 비었습니다. ";
  }
  if (!isset($_POST["name"])||($_POST["name"]==="")){
    $errors[] = "상품명이 비었습니다. ";
  }
  if (!isset($_POST["brand"])||($_POST["brand"]==="")) {
    $errors[] = "브랜드가 비었습니다. ";
  }
  if (!isset($_POST["quantity"])||(!ctype_digit($_POST["quantity"]))) {
    $errors[] = "개수가 정수값이 아닙니다. ";
  }
  // 오류가 있었을 때
  if (count($errors)>0){
    echo '<ol class="error">';
    foreach ($errors as $value) {
      echo "<li>", $value , "</li>";
    }
    echo "</ol>";
    echo "<hr>";
    echo "<a href=", $gobackURL, ">돌아가기</a>";
    exit();
  }

  // 데이터베이스 사용자
  $user = 'inventoryuser';
  $password = 'pw4inventoryuser';
  // 이용할 데이터베이스
  $dbName = 'inventory';
  // MySQL 서버
  $host = 'localhost:8889';
  // MySQL의 DSN 문자열
  $dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";

  // MySQL 데이터베이스에 접속한다
  try {
    $pdo = new PDO($dsn, $user, $password);
    // 프리페어 스테이트먼트의 에뮬레이션을 무효로 한다
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // 예외가 쓰로우되는 설정으로 한다
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (Exception $e) {
    $err =  '<span class="error">오류가 있습니다. </span><br>';
    $err .= $e->getMessage();
    exit($err);
  }

  try {
    // 트랜잭션을 시작한다
    $pdo->beginTransaction();
    // SQL문을 만든다
    $sql1 = "INSERT INTO goods (id, name, size, brand)
    VALUES (:id, :name, :size, :brand)";
    $sql2 = "INSERT INTO stock (goods_id, quantity) VALUES (:goods_id, :quantity)";
    // 프리페어 스테이트먼트를 만든다
    $insertGoods = $pdo->prepare($sql1);
    $insertStock = $pdo->prepare($sql2);
    // 플레이스 홀더에 값을 바인드한다
    $insertGoods->bindValue(':id', $_POST["id"], PDO::PARAM_STR);
    $insertGoods->bindValue(':name', $_POST["name"], PDO::PARAM_STR);
    $insertGoods->bindValue(':size', $_POST["size"], PDO::PARAM_STR);
    $insertGoods->bindValue(':brand', $_POST["brand"], PDO::PARAM_STR);
    $insertStock->bindValue(':goods_id', $_POST["id"], PDO::PARAM_STR);
    $insertStock->bindValue(':quantity', $_POST["quantity"], PDO::PARAM_INT);
    // SQL문을 실행한다
    $insertGoods->execute();
    $insertStock->execute();
    // 트랜잭션 처리를 종료한다
    $pdo->commit();
    // 결과보고
    echo "상품데이터／재고 데이터를 추가했습니다. ";
  } catch (Exception $e) {
    // 오류가 있다면 원래 상태로 되돌린다
    $pdo->rollBack();
    echo '<span class="error">등록 오류가 있습니다. </span><br>';
    echo $e->getMessage();
  }
  ?>
  <hr>
  <p><a href="<?php echo $gobackURL ?>">돌아가기</a></p>
</div>
</body>
</html>
