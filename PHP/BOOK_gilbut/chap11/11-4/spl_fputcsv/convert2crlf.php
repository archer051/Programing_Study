<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>CRLF 파일로 변환한다</title>
</head>
<body>
<div>
  <?php
  $filename = "mydata.csv";
  $filename_win = "mydata_win.csv";

 try{
    // 파일 객체를 만든다(rb 읽기 전용)
    $fileObj = new SplFileObject($filename, "rb");
    // 파일 객체를 만든다(wb 신규 작성. 파일이 없으면 만든다)
    $fileObj_win = new SplFileObject($filename_win, "wb");
  } catch (Exception $e) {
    echo '<span class="error">오류가 발생했습니다. </span><br>';
    echo $e->getMessage();
    exit();
  }

  // 문자열을 읽는다
  $readdata = $fileObj->fread($fileObj->getSize());
  // $fileObj = NULL;
  // 개행 코드를 LF에서 CRLF로 한다
  $outdata = str_replace("\n", "\r\n", $readdata);
  // EUC-KR로 바꾼다
  // $outdata = mb_convert_encoding($outdata,"euc-kr","auto");

  // 겹따옴표로 감싼다
  $outdata = str_replace(",", '","', $outdata);
  $outdata = str_replace("\r\n", "\"\r\n\"", $outdata);
  // 앞 부분에 추가하고 마지막의 1개를 꺼내 삭제한다
  $outdata = '"' . $outdata;
  $outdata = mb_substr($outdata, 0, -1, "utf8");

  // 파일에 작성하기
  $written = $fileObj_win->fwrite($outdata);
  if ($written===FALSE){
    echo '<span class="error">', "{$filename_win}에 저장할 수 없습니다. </span>";
  } else {
    echo "{$filename}을 UTF-8, CRLF로 변환한 {$filename_win}을 작성했습니다. ";
  }
  ?>
</div>
</body>
</html>
