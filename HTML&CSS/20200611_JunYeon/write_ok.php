<?php
  $name = $_POST["name"];
  $bMonth = $_POST["bMonth"];
  $price = $_POST["price"];
  $gendar = $_POST["gendar"];
  $memo = $_POST["memo"];
  $fname = basename($_FILES["pic"]["name"]);
  
  $uploaddir = $_SERVER["DOCUMENT_ROOT"]."/fileServer/";
  $uploadfile = $uploaddir.$fname;
  
  move_uploaded_file($_FILES["pic"]["tmp_name"], $uploadfile);
  
  
  $conn = mysqli_connect("localhost", "root", "autoset", "testdb");
  $query = "insert into dog (dog_name,bMonth,price,pic,gendar,memo) values ('$name','$bMonth','$price','$fname','$gendar','$memo')";
  mysqli_query($conn, $query);
  
?>

<meta http-equiv="refresh" content="0; url=index.php">