<?php
  $no = $_GET["no"];
  $fname = $_GET["fname"];
  // echo $no; echo $fname; 
  $file_dir=$_SERVER["DOCUMENT_ROOT"]."/fileServer/".$fname;

  //파일서버의 파일삭제
  if(file_exists($file_dir))
    unlink($file_dir);
  
  $conn = mysqli_connect("localhost", "root", "autoset", "testdb");
  $query = "delete from inc where no = $no";
  mysqli_query($conn, $query);
?>
<meta http-equiv="refresh" content="0;inc.php"> 