<?php
// POST된 텍스트 문을 구한다
if (empty($_POST["memo"])){
  // POST된 값이 없을 때(0인 경우도 포함한다)
  // 리다이렉트(메모 입력 페이지로 돌아간다)
  $url = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
  header("HTTP/1.1 303 See Other");
  header("Location:" . $url . "/input_memo.php");
  exit();
}
// 파일에 쓸 문자열을 만든다
$memo = $_POST["memo"];
$date = date("Y/n/j G:i:s", time());
$newdata = $date . "　　" . $memo;
try {
  // 작업 파일의 파일 객체(신규 작성)
  $workingfileObj = new SplFileObject("working.tmp", "wb");
  // 새로운 메모를 작업 파일에 작성한다
  $workingfileObj->flock(LOCK_EX);
  $workingfileObj->fwrite($newdata);
  $workingfileObj->flock(LOCK_UN);
} catch (Exception $e) {
  echo '<span class="error">오류가 발생했습니다. </span><br>';
  echo $e->getMessage();
  exit();
}

// 원래 파일
$filename = "memo.txt";
// 원래 파일이 있는지 확인한다
if (file_exists($filename)){
  // 원래 파일의 파일 객체(읽기 전용 파일)
  $fileObj = new SplFileObject($filename, "rb");
  // 원래 데이터를 읽는다
  $fileObj->flock(LOCK_SH);
  $olddata = $fileObj->fread($fileObj->getSize());
  $fileObj->flock(LOCK_UN);

  // 오래된 데이터를 작업 파일에 추가 기록한다
  $olddata = "\n". $olddata;
  $workingfileObj->flock(LOCK_EX);
  $workingfileObj->fwrite($olddata);
  $workingfileObj->flock(LOCK_UN);

  // 원래 파일을 닫는다
  $fileObj = NULL;
  // 원래 파일을 삭제한다
  unlink($filename);
}

// 작업 파일을 닫는다
$workingfileObj = NULL;
// 작업 파일을 이름 변경한다
rename("working.tmp", $filename);

// 리다이렉트(메모를 읽는 페이지로)
$url = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
header("HTTP/1.1 303 See Other");
header("Location:" . $url . "/read_memofile.php");
// ?>
