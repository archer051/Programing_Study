<?php
  include "dbconn.php";
  $storeNo=$_POST["storeNo"];
  // echo $storeNo;echo "<br>";
  $writer=$_POST["writer"];
  $writeday=$_POST["writeday"];
  $title=$_POST["title"];
  $memo=$_POST["memo"];
  $query=
  "insert into store_notice
  (pno
  ,writer
  ,writeday
  ,title
  ,memo
  ,use_yn)
  values
  ($storeNo
  ,'$writer'
  ,'$writeday'
  ,'$title'
  ,'$memo'
  ,'Y')";
  mysqli_query($conn,$query);
  // echo $query;exit;
?>

<meta http-equiv="refresh" content="0;store_content.php?storeNo=<?php echo $storeNo; ?>">