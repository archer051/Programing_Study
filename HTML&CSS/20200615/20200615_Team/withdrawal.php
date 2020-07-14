<?php
   include "dbconn.php";
?>
<script>
   if(confirm("삭제하시겠습니까?")){
     <?php 
         session_destroy();
         $id=$_SESSION["id"];//세션변수값을 일반변수로 옮김.
         $query="delete from member where id='$id'";
         mysqli_query($conn,$query);
      ?>
   }
</script>
<script>
   alert("회원탈퇴가 완료되었습니다."+"\n"+"안녕히 가십시오")
</script>
<meta http-equiv="refresh" content="0;responsive.php">