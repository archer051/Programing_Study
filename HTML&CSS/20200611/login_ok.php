<?php
  session_start();
  include "dbconn.php";
  $ID = $_POST["loginId"];
  $PW = $_POST["loginPw"];
  $query = "select count(*) as cnt from member where id = '$ID' and pw = '$PW'";
  $rs = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($rs);
  $count = $row["cnt"];
  if($count == 1) {
    $_SESSION["id"]=$ID;
    // echo $ID;
?>
  <script>
    opener.document.location.reload();
    this.close();
  </script>
  <?php } else { ?>
  <script>
    alert("아이디 또는 패스워드가 일치하지 않습니다.");
    history.back();
  </script>
  <?php } ?>