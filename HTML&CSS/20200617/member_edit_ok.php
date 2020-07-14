<?php
   include "dbconn.php";
   $id=$_SESSION["id"];
   $pw=$_POST["pw"];
   $name=$_POST["name"];
   $gender=$_POST["gender"];
   $hp=$_POST["hp"]."-".$_POST["hp1"]."-".$_POST["hp2"];
   $email=$_POST["email1"]."@".$_POST["email2"];
   $comment=$_POST["comment"];
   $query="update member 
   set 
      pw='$pw'
      ,name='$name'
      ,gender='$gender'
      ,hp='$hp'
      ,email='$email'
      ,comment='$comment'
   where 
      id='$id'";
   mysqli_query($conn,$query);
   // echo $query; exit;
?>
<script>
   alert("회원정보수정이 완료되었습니다.");
</script>
<meta http-equiv="refresh" content="0;url=index.php">