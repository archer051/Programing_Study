 <?php
  include "dbconn.php";
  $content=$_POST["content"];
  // echo $content;
  $total=$_POST["total"];
  // echo $total; 
  $addr=$_POST["addr"];
  // echo $addr;
  $hp=$_POST["hp"];
  // echo $hp;
  $order_time=$_POST["order_time"];
  // echo $order_time; echo exit;


  // DB서버 삭제
  $query="delete from store_orders";
  mysqli_query($conn,$query);
?>
