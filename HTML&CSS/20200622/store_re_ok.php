<?php
  include "dbconn.php";
  $pno=$_POST["pno"];
  // echo $pno; echo "<br>";
  $memo=$_POST["memo"];
  // echo $memo; echo "<br>";
  $writer=$_POST["writer"];
  // echo $writer; echo "<br>";
  $query="insert into store_re
  (memo,writer,pno) values('$memo','$writer',$pno)";
  // echo $query; echo "<br>";
  mysqli_query($conn,$query);
 ?>
<meta http-equiv='refresh' content='1;url=store_content.php?storeNo=<?php echo $pno ?>'>
