<?php
  $p_no = $_POST["p_no"];
  $memo = $_POST["memo"];
  $writer = $_POST["writer"];
  $conn = mysqli_connect("localhost", "root", "autoset", "testdb");
  $query = "insert into inc_re (memo, writer, p_no) values ('$memo', '$writer', $p_no)";
  mysqli_query($conn, $query);
  echo ("<meta http-equiv='refresh' content='0;url=inc_content.php?no=$p_no'>");
?>