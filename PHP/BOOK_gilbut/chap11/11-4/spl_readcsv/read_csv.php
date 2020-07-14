<?php
require_once("../../lib/util.php");
?>

<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>SplFileObject로 CSV 파일을 읽는다</title>
<link href="../../css/style.css" rel="stylesheet">
<!-- 테이블 용의 스타일 시트 -->
<link href="../../css/tablestyle.css" rel="stylesheet">
</head>
<body>
<div>
  <?php
  $filename = "mydata.csv";
  try {
    // 파일 객체를 만든다(rb 읽어 들이기만. 파일 앞 부분부터 읽는다)
    $fileObj = new SplFileObject($filename, "rb");
  } catch (Exception $e) {
    echo '<span class="error">오류가 있습니다. </span><br>';
    echo $e->getMessage();
    exit();
  }
  // CSV 파일을 읽어 들인다(완전히 빈 행은 스킵한다)
  $fileObj->setFlags(
    SplFileObject::READ_CSV
    | SplFileObject::READ_AHEAD
    | SplFileObject::SKIP_EMPTY
    | SplFileObject::DROP_NEW_LINE
  );
  // 테이블의 스타일 행
  echo "<table>";
  echo "<thead><tr>";
  echo "<th>", "ID", "</th>";
  echo "<th>", "상품명", "</th>";
  echo "<th>", "가격", "</th>";
  echo "</tr></thead>";
  // 값을 꺼내 행에 표시한다
  echo "<tbody>";
  foreach ($fileObj as $row){
    // 배열을 변수에 넣는다
    list($id, $name, $price) = $row;
    // 가격이 들어있지 않는 경우는 스킵한다
    if ($price==""){
      continue;
    }
    // １행씩 테이블에 넣는다
    echo "<tr>";
    echo "<td>", es($id), "</td>";
    echo "<td>", es($name), "</td>";
    echo "<td>", es(number_format($price)), "</td>";
    echo "</tr>";
  }
  echo "</tbody>";
  echo "</table>";
  ?>
</div>
</body>
</html>
