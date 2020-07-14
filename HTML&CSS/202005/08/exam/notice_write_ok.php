<?php
  $writer = $_POST["writer"];
  $title = $_POST["title"];
  $content = $_POST["content"];
  $writeday = date("Y-m-d");
  // $writeday = date("y-m-d"); ->2020-05-08
  // $writeday = date("Y-m-d[h:i:s]"); ->2020-05-08[04:27:39]
  // $writeday = date("Y/m/d"); ->2020/05/08
  $query =
  "insert into notice
    (writer,title,content,writeday)
  values
    ('$writer','$title','$content','$writeday');
  ";
  $conn = mysqli_connect("127.0.0.1","root","autoset","testdb");
  mysqli_query($conn,$query);
 ?>
 <meta http-equiv="refresh" content="0;url=index.php">
