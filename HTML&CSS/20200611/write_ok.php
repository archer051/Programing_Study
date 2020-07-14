<?php
  include "dbconn.php";
  $dogTypeName = $_POST["dogTypeName"];
  $dogYear = $_POST["dogYear"];
  $dogMonth = $_POST["dogMonth"];
  $dogYearMonth = $dogYear.",".$dogMonth;
  $price = $_POST["price"];
  $fname = basename($_FILES["imgfile"]["name"]);
  $gender = $_POST["gender"];
  $memo = $_POST["memo"];
  $uploaddir = $_SERVER["DOCUMENT_ROOT"]."/fileServer/";
  $uploadfile = $uploaddir.$fname;
  move_uploaded_file($_FILES["imgfile"]["tmp_name"],$uploadfile);
  $query="insert into dog
    (dogTypeName
    ,bMonth
    ,price
    ,picFName
    ,gender
    ,memo)
  values
    ('$dogTypeName'
    ,'$dogYearMonth'
    ,$price
    ,'$fname'
    ,'$gender'
    ,'$memo')
  ";
  mysqli_query($conn, $query);
?>
<meta http-equiv="refresh" content="0;index.php">