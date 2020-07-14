<?php
  $no = $_GET["no"];
  $conn = mysqli_connect("localhost", "root", "autoset", "testdb");
  $query = "select * from inc_write_exam where no = $no";
  $rs = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($rs);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <script srd="http://code.jquery.com/jquery-1.12.3.min.js"></script>
  <title>Document</title>
</head>
<body>
  <section id=sectionArea>
    <article id="imgArea"></article>
    <article id="detailArea">
      <article id="nameArea"></article>
      <article id="heightArea"></article>
      <article id="weightArea"></article>
      <article id="yearArea"></article>
    </article>
    
    <article id="titleArea"></article>
    <article id="charArea"></article>
  </section>
</body>
</html>