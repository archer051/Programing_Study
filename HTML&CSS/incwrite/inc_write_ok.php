<?php
  $writer=$_POST["writer"];
  $title=$_POST["title"];
  $content=$_POST["content"];
  $fname=basename($_FILES["userfile"]["name"]);
  $writeday=date("Y-m-d(h:i)");
  $fname2=$_FILES["userfile"]["name"];
  // 1. 실제 파일서버에 물리적 파일을 올려야 한다
  // 1-1. 파일서버 경로를 읽어온다
  $uploaddir=$_SERVER["DOCUMENT_ROOT"]."/fileserver/";
  $uploadfile=$uploaddir.$fname;
  move_uploaded_file($_FILES["userfile"]["tmp_name"],$uploadfile);
  // 2. 디비서버에 파일과 관련된 경로와 정보를 저장한다
  $conn=mysqli_connect("localhost","root","autoset","testdb");
  $query="insert into inc 
    (title
    ,writer
    ,writeday
    ,content
    ,fname)
  values
    ('$title'
    ,'$writer'
    ,'$writeday'
    ,'$content'
    ,'$fname')
  ";
  mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;inc.php">
