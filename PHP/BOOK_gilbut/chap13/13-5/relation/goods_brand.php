<?php
require_once("../../lib/util.php");
// 데이터베이스 사용자
$user = 'inventoryuser';
$password = 'pw4inventoryuser';
// 이용할 데이터베이스
$dbName = 'inventory';
// MySQL 서버
$host = 'localhost:8889';
// MySQL의 DSN 문자열
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
?>

<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>레코드를 조회하기</title>
<link href="../css/style.css" rel="stylesheet">
<!-- 테이블용의 스타일시트 -->
<link href="../../css/tablestyle2.css" rel="stylesheet">
</head>
<body>
<div>
  <?php
  // MySQL 데이터베이스에 접속한다
  try {
    $pdo = new PDO($dsn, $user, $password);
    // 프리페어 스테이트먼트의 에뮬레이션을 무효로 한다
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // 예외가 쓰로우되도록 설정한다
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // SQL 문을 만든다
    $sql = "SELECT goods.id as goods_id, goods.name as goods_name,
           goods.size, brand.name as brand_name
           FROM goods, brand
           WHERE goods.brand = brand.id
           ORDER BY goods_id";
    // PDO에 쿼리 문장을 등록한다
    $prepare = $pdo->prepare($sql);
    // SQL문을 실행한다
    $prepare->execute();
    // 결과 얻기(연관 배열로 받는다)
    $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
    // 테이블의 타이틀 행
    echo "<table>";
    echo "<thead><tr>";
    echo "<th>", "ID", "</th>";
    echo "<th>", "상품", "</th>";
    echo "<th>", "크기", "</th>";
    echo "<th>", "브랜드", "</th>";
    echo "</tr></thead>";
    // 값을 읽어 행에 표시한다
    echo "<tbody>";
    foreach ($result as $row){
      // １행씩 테이블에 넣는다
      echo "<tr>";
      echo "<td>", es($row['goods_id']), "</td>";
      echo "<td>", es($row['goods_name']), "</td>";
      echo "<td>", es($row['size']), "</td>";
      echo "<td>", es($row['brand_name']), "</td>";
      echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
  } catch (Exception $e) {
    echo '<span class="error">오류가 있습니다. </span><br>';
    echo $e->getMessage();
    exit();
  }
  ?>
</div>
</body>
</html>
