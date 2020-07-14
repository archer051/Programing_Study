<?php
  include "dbconn.php";
  $id=$_POST["id"];
  $pw=$_POST["pw"];
  $query="select * from member where id='$id' and pw='$pw'";
  $rs=mysqli_query($conn,$query);
  if(mysqli_num_rows($rs)){
    $_SESSION["id"]=$id;
    ?>
    <script>
      opener.document.location.reload();
      this.close();
    </script>
  <?php
  }else{
    ?>
    <script>
      alert("ID와PW가 일치하지 않습니다.")
      this.close();
    </script>
<?php } ?>