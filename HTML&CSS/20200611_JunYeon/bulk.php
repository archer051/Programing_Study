<?php
  $conn = mysqli_connect("localhost", "root", "autoset", "testdb");
  $query = "insert into dog (dogTypeName,bMonth,price,picFName,gender,memo) values ('포메','2020,2','1','KakaoTalk_20200611_120721083.jpg','수컷','활발')";
  for($i=1;$i<=150;$i++) {
    mysqli_query($conn, $query);
  }
  echo ($i-1)."건의 데이터가 입력되었습니다";
?>