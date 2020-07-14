<?php
// POST된 텍스트 문을 읽는다
if (empty($_POST["memo"])){
  // POST된 값이 없을 때(0인 경우도 포함한다)
  // 리다이렉트(메모 입력 페이지로 돌아간다)
  $url = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
  header("Location:" . $url . "/input_memo.php");
  exit();
}

$memo = $_POST["memo"];
$date = date("Y/n/j G:i:s", time());
$writedata = "---\n" . $date . "\n" . $memo . "\n";
// 메모 파일
$filename = "memo.txt";
try {
  // 파일 객체를 만든다(읽고 쓰기, 추가 기록 모드)
  $fileObj = new SplFileObject($filename, "a+b");
} catch (Exception $e) {
  echo '<span class="error">오류가 있습니다.</span><br>';
  echo $e->getMessage();
  exit();
}

// 파일 잠금(배타 잠금)
$fileObj->flock(LOCK_EX);
// 메모를 추가 기록한다
$result = $fileObj->fwrite($writedata);
// 잠금 해제
$fileObj->flock(LOCK_UN);

// 리다이렉트(메모를 읽는 페이지로)
$url = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
header("Location:" . $url . "/read_memofile.php");
exit();

// ?>
