<?php
require_once("../../lib/util.php");
$gobackURL = "insertform.html";

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
  // 예외가 쓰로우되도록 설정한다
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // 브랜드 테이블에서 브랜드 ID과 브랜드명을 조회한다
  $sql = "SELECT id, name FROM brand";
  // PDO에 쿼리 문장을 등록한다(프리페어 스테이트먼트를 만든다)
  $stm = $pdo->prepare($sql);
  // SQL 쿼리를 실행한다
  $stm->execute();
  // 결과 얻기(연관 배열로 받는다)
  $brand = $stm->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
  $err =  '<span class="error">오류가 있습니다. </span><br>';
  $err .= $e->getMessage();
  exit($err);
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
  <!-- 입력 폼을 만든다 -->
  <form method="POST" action="insert_goods.php">
    <ul>
      <li>
        <label>상품ID：
        <input type="text" name="id" placeholder="상품ID">
        </label>
      </li>
      <li>
        <label>상품명：
        <input type="text" name="name" placeholder="상품명">
        </label>
      </li>
      <li>
        <label>크기：
        <input type="text" name="size" placeholder="（입력하지 않아도 OK）">
        </label>
      </li>
      <li>브랜드：
        <select name="brand">
          <?php
          // 브랜드는 브랜드 테이블에 등록되어 있는 것에서 선택
          foreach ($brand as $row){
            echo '<option value="', $row["id"], '">', $row["name"], "</option>";
          }
          ?>
        </select>
      </li>
      <li>
        <label>개수：
        <input type="number" name="quantity" placeholder="숫자">
      </li>
      <li><input type="submit" value="추가"></li>
    </ul>
  </form>
</div>
</body>
</html>
