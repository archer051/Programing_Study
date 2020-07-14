<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>SplFileObject로 CSV 파일로 작성한다</title>
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
  <?php
  $filename = "mydata.csv";
  // CSV의 헤더 행
  $csv_header = ["id", "이름", "나이", "취미"];
  // CSV 데이터
  $csv_data = [];
  $csv_data[] = ["a10", "홍길동", "36", "등산"];
  $csv_data[] = ["a11", "김철수", "31", "트래킹"];
  $csv_data[] = ["a12", "이영희", "18", "요리"];
  $csv_data[] = ["a13", "박민수", "23", "볼더링"];
  $csv_data[] = ["a14", "김유정", "26", "서핑"];

  try {
    // 파일 객체를 만든다(wb 신규 작성. 파일이 없으면 만든다)
    $fileObj = new SplFileObject($filename, "wb");
  } catch (Exception $e) {
    echo '<span class="error">오류가 있었습니다. </span><br>';
    echo $e->getMessage();
    exit();
  }

  //print_r($fileObj->getCsvControl());
  // 헤더 행을 CSV로 쓴다
  $fileObj->fwrite("\xEF\xBB\xBF");  // UTF-8을 의미하는 BOM
  $fileObj->fputcsv($csv_header);
  // 데이터를 CSV에 추가한다
  foreach ($csv_data as $value) {
    $fileObj->fputcsv($value);
  }
  echo "{$filename} 작성이 끝났습니다. ";
  ?>
</div>
</body>
</html>
