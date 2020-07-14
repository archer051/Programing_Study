<?php
include "dbconn.php";
 ?>
 <script>
 function login() {
   window.open("login.php","Login","width=300,height=150");
 }

 </script>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>결혼정보회사</title>
  </head>
  <body>
    <header>
      <div class="login_area">
        <?php
        if(isset($_SESSION["ID"])) {
          ?>
          <a href="logout.php">Logout</a>&nbsp;|&nbsp;
          <a href="member_edit.php">Edit</a>&nbsp;|&nbsp;
          <a href="withdrawal.php">Withdrawal</a>
        <?php }else { ?>
          <a href="javascript:login()">Login</a>&nbsp;|&nbsp;
          <a href="member.php">Member</a>&nbsp;|&nbsp;
          <a href="SearchIdPw.php">Search Id/Pw</a>
        <?php } ?>
      </div>
    </header>

  </body>
</html>
