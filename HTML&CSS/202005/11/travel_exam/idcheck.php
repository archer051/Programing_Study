<?php
include "dbconn.php";
$id=$_GET["id"];
$query="select * from member where id = '$id'";
$rs=mysqli_query($conn,$query);
$row=mysqli_fetch_array($rs);
if( mysqli_num_rows($rs)) {
?>
  <!-- 기존 사용자 존재. 뒤로가기 -->
  <script>
    alert("이미 존재하는 아이디입니다!");
    opener.document.frm1.id.select();
    this.close();
  </script>
<?php }else { ?>
  <!-- 아이디 사용가능 -->
  <script>
  alert("사용가능한 아이디입니다!"); //위치 이동
  opener.document.frm1.hid.value="<?php echo $id ?>";
  opener.document.frm1.pw1.focus();
  this.close();
  </script>
<?php } ?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>

  </body>
</html>
