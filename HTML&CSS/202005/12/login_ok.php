<?php
include "dbconn.php";
$id=$_POST["ID"];
$pw=$_POST["PW"];
$query=
"
select
  *
from
  member_20200512
where
  id = '$id';
";
// echo "$query";
$rs=mysqli_query($conn,$query);
if(mysqli_num_rows($rs))
{
  $_SESSION["id"]=$id;
  ?>
  <script>
    opener.document.location.reload();
    this.close();
  </script>
<?php }else { ?>
<script>
alert("아이디 또는 비밀번호가 틀립니다.");
this.close();
</script>
<?php } ?>
