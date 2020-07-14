<?php
  $name=$_POST["name"];
  $year=$_POST["birthYear"];
  $title=$_POST["title"];
  $height=$_POST["key"];
  $weight=$_POST["weight"];
  $content=$_POST["content"];
  $fname=basename($_FILES["imgfile"]["name"]);
  $uploaddir=$_SERVER["DOCUMENT_ROOT"]."/fileServer/";
  $uploadfile=$uploaddir.$fname;
  move_uploaded_file($_FILES["imgfile"]["tmp_name"],$uploadfile);
  $conn=mysqli_connect("localhost","root","autoset","testdb");
  $query="insert into inc_write_exam
    (name
    ,year
    ,title
    ,height
    ,weight
    ,imgfile
    ,content)
  values
    ('$name'
    ,'$year'
    ,'$title'
    ,$height
    ,$weight
    ,'$fname'
    ,'$content')
  ";
  mysqli_query($conn,$query);
  echo $query;
?>
<meta http-equiv="refresh" content="0;inc_write_exam.php">
