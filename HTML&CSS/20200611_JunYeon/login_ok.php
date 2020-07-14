<?php
  session_start();
  $id = $_POST["id"];
  $pw = $_POST["pw"];
  $conn = mysqli_connect("localhost", "root", "autoset", "testdb");
  $query = "select * from member where id='$id' and pw = '$pw'";
  $rs = mysqli_query($conn, $query);

  if(mysqli_num_rows($rs)) {
    $_SESSION["id"] = $id;
    ?>
    <script>
      opener.document.location.reload();
      this.close();
    </script>
    <?php
  } else {
    ?>
    <script>
      alert("아이디와 비밀번호를 확인해주세요");
      this.close();
    </script>
    <?php
  }
?>