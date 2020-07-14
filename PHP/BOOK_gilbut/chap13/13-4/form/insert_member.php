<?php
require_once("../../lib/util.php");
$gobackURL = "insertform.html";

// 문자 인코드 검증
if (!cken($_POST)){
  header("Location:{$gobackURL}");
  exit();
}

// 간단한 오류 처리
$errors = [];
if (!isset($_POST["name"])||($_POST["name"]==="")){
  $errors[] = "이름이 비었습니다. ";
}
if (!isset($_POST["age"])||(!ctype_digit($_POST["age"]))){
  $errors[] = "나이에는 수치를 입력해주세요. ";
}
if (!isset($_POST["sex"])||!in_array($_POST["sex"], ["남","여"])) {
  $errors[] = "성별이 남자 또는 여자가 아닙니다. ";
}

// 오류가 있었을 때
if (count($errors)>0){
  echo '<ol class="error">';
  foreach ($errors as $value) {
    echo "<li>", $value , "</li>";
  }
  echo "</ol>";
  echo "<hr>";
  echo "<a href=", $gobackURL, ">돌아간다</a>";
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
<title>레코드 추가</title>
<link href="../../../css/style.css" rel="stylesheet">
<!-- 테이블 용의 스타일시트 -->
<link href="../../css/tablestyle.css" rel="stylesheet">
</head>
<body>
<div>
  <?php
  $name = $_POST["name"];
  $age = $_POST["age"];
  $sex = $_POST["sex"];
  // MySQL 데이터베이스에 접속한다
  try {
    $pdo = new PDO($dsn, $user, $password);
    // 프리페어 스테이트먼트의 에뮬레이션을 무효로 한다
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // 예외가 쓰로우되도록 설정한다
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL 문을 만든다
    $sql = "INSERT INTO member (name, age, sex) VALUES (:name, :age, :sex)";
    // PDO에 쿼리 문장을 등록한다
    $stm = $pdo->prepare($sql);
    // 플레이스 홀더에 값을 바인드한다
    $stm->bindValue(':name', $name, PDO::PARAM_STR);
    $stm->bindValue(':age', $age, PDO::PARAM_INT);
    $stm->bindValue(':sex', $sex, PDO::PARAM_STR);
    // SQL 문을 실행한다
    if ($stm->execute()){
      // 레코드 추가 후의 레코드 목록을 얻는다
      $sql = "SELECT * FROM member";
      // PDO에 쿼리 문장을 등록한다
      $stm = $pdo->prepare($sql);
      // SQL문을 실행한다
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
      foreach ($result as $row) {
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
      echo '<span class="error">추가 오류가 있습니다. </span><br>';
    };
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
