<?php
require_once("../../lib/util.php");
$gobackURL = "searchform.html";

// 문자 인코드 검증
if (!cken($_POST)){
  header("Location:{$gobackURL}");
  exit();
}

// name이 미설정. 비면 오류
if (empty($_POST)){
  header("Location:searchform.html");
  exit();
} else if(!isset($_POST["name"])||($_POST["name"]==="")){
  header("Location:{$gobackURL}");
  exit();
}

// 데이터 베이스 사용자
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
<title>이름 검색</title>
<link href="../../css/style.css" rel="stylesheet">
<!-- 테이블 용의 스타일시트 -->
<link href="../../css/tablestyle.css" rel="stylesheet">
</head>
<body>
<div>
  <?php
  $name = $_POST["name"];
  // MySQL 데이터베이스에 접속한다
  try {
    $pdo = new PDO($dsn, $user, $password);
    // 프리페어 스테이트먼트의 에뮬레이션을 무효로 한다
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // 예외가 쓰로우되도록 설정한다
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // SQL 문을 만든다
    $sql = "SELECT * FROM member WHERE name LIKE(:name)";
    // PDO에 쿼리 문장을 등록한다
    $stm = $pdo->prepare($sql);
    // 플레이스 홀더에 값을 바인드한다
    $stm->bindValue(':name', "%{$name}%", PDO::PARAM_STR);
    // SQL 문을 실행한다
    $stm->execute();
    // 결과 얻기(연관 배열로 받는다)
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    if(count($result)>0){
      echo "이름에 {$name}가 포함되어 있는 레코드";
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
    } else {
      echo "이름에서 {$name}는 찾을 수 없습니다. ";
    }
  } catch (Exception $e) {
    echo '<span class="error">오류가 있습니다. </span><br>';
    echo $e->getMessage();
  }
  ?>
  <hr>
  <p><a href="<?php echo $gobackURL ?>">돌아간다</a></p>
</div>
</body>
</html>
