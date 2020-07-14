<?php
include "dbconn.php";
$id=$_POST["id"];
$pw=$_POST["pw"];
$query="select * from member where id='$id' and pw='$pw'";
$rs=mysqli_query($conn,$query);
$rsCount=mysqli_num_rows($rs);
if($rsCount > 0){
  $_SESSION["id"]=$id; 
  setcookie('LoginConnCount',0);
  ?>
  <script>
    opener.document.location.reload();
    this.close();
  </script>
<?php
}else{
  if(isset($_COOKIE['LoginConnCount'])) {
    $LoginConnectNum=$_COOKIE['LoginConnCount']+1;
    setcookie('LoginConnCount',$LoginConnectNum);
  }else{
    setcookie('LoginConnCount',1);
  }

  if($_COOKIE['LoginConnCount'] == 3) {
  ?>
  <script>
    alert("ID와PW가 일치하지 않습니다.");
    this.close();
  </script>
  <?php
  } else { ?>
  <script>
    alert("ID와PW가 일치하지 않습니다.");
    history.back();
  </script>
  <?php
  }
  ?>
<?php 
} ?>