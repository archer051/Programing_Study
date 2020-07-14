<?php
require_once("../../lib/util.php");
// 데이터베이스 사용자
$user = 'testuser';
$password = 'pw4testuser';
// 이용할 데이터베이스
$dbName = 'testdb';
// MySQL 서버
$host = 'localhost:8889';
// MySQL의 DSN 문자열
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
?>

<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>레코드를 읽는다(플레이스 홀더를 사용한다)</title>
<link href="../../css/style.css" rel="stylesheet">
<!-- 테이블용의 스타일시트 -->
<link href="../../css/tablestyle.css" rel="stylesheet">
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
    echo "데이터베이스 {$dbName}에 접속했습니다. ", "<br>";
    // SQL 문을 만든다(플레이스 홀더를 사용한 식)
    $sql = "SELECT * FROM member
    WHERE age >= :min AND age <= :max AND sex = :sex";
    // PDO에 쿼리 문장을 등록한다
    $stm = $pdo->prepare($sql);
    // 플레이스 홀더에 값을 바인드한다
    $stm->bindValue(':min', 25, PDO::PARAM_INT);
    $stm->bindValue(':max', 40, PDO::PARAM_INT);
    $stm->bindValue(':sex', '남', PDO::PARAM_STR);
    // SQL 문을 실행한다
    $stm->execute();
    // 결과 얻기(연관 배열로 받는다)
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    // 테이블의 타이틀 행
    echo "<table>";
    echo "<thead><tr>";
    echo "<th>", "ID", "</th>";
    echo "<th>", "이름", "</th>";
    echo "<th>", "나이", "</th>";
    echo "<th>", "성별", "</th>";
    echo "</tr></thead>";
    // 값을 읽어 행에 표시한다
    echo "<tbody>";
    foreach ($result as $row){
      // １행씩 테이블에 넣는다
      echo "<tr>";
      echo "<td>", es($row['id']), "</td>";
      echo "<td>", es($row['name']), "</td>";
      echo "<td>", es($row['age']), "</td>";
      echo "<td>", es($row['sex']), "</td>";
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
