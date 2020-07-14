<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>PDO로 데이터베이스에 접속한다</title>
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
  <?php
  // 데이터베이스 사용자
  $user = 'testuser';
  $password = 'pw4testuser';
  // 이용할 데이터베이스
  $dbName = 'testdb';
  // MySQL 서버
  $host = 'localhost:8889';
  // MySQL의 DSN 문자열
  $dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";

  //MySQL 데이터베이스에 접속한다
  try {
    $pdo = new PDO($dsn, $user, $password);
    // 프리페어 스테이트먼트의 에뮬레이터를 무효로 한다
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // 예외가 쓰로우되는 설정으로 한다
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "데이터베이스 {$dbName}에 접속했습니다.";
    // 접속을 삭제한다
    $pdo = NULL;
  } catch (Exception $e) {
    echo '<span class="error">오류가 있습니다. </span><br>';
    echo $e->getMessage();
    exit();
  }
  ?>
</div>
</body>
</html>
