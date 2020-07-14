<?php
  session_start();
  $id=$_POST["id"];
  $pw=$_POST["pw"];
  $conn=mysqli_connect("localhost","root","autoset","testdb");
  $query="select * from member1 where id='$id' and pw='$pw'";
  $rs=mysqli_query($conn,$query);
  if(mysqli_num_rows($rs)==0){

 ?>
 <script>
  alert("아이디와 패스워드가 일치하지 않습니다.");
  history.back();

 </script>
 <?php
}else{
  $_SESSION["id"]=$id;
  ?>
<script>
  opener.document.location.reload();
  this.close();
</script>
<?php } ?>
