<?php
  include "dbconn.php";
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>20200616</title>
  <link rel="stylesheet" href="style.css">
   <link href="https://fonts.googleapis.com/css2?family=Gamja+Flower&display=swap" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
  <script src="script.js" defer="defer"></script>
  <script>
    function winOpen(){
      window.open("login.php","frmLOGIN","width=700,height=200");
    }
    function winOpen1(){
      window.open("adminlogin.php","frmADMIN","width=700,height=200");
    }
    function idcheck(){
      if(frm1.id.value==""){
        alert("ID를 입력하세요");
        frm1.id.focus();
        return false;
      }
      window.open("idcheck.php?id="+frm1.id.value,"frmid","wudth=300,height=200");
    }
    function send(){
      if(frm1.id.value==""){
        alert("아이디를 입력하세요");
        frm1.id.focus();
        return false;
      }
      if(frm1.pw.value==""){
        alert("비밀번호를 입력하세요");
        frm1.pw.focus();
        return false;
      }
      if(frm1.pw2.value==""){
        alert("비밀번호확인 입력하세요");
        frm1.pw2.focus();
        return false;
      }
      if(frm1.pw.value != frm1.pw2.value){
        alert("비밀번호가 일치하지 않습니다.");
        frm1.pw2.select();
        return false;
      }
      if(frm1.name.value==""){
        alert("이름을 입력하세요");
        frm1.name.focus();
        return false;
      }
      if(frm1.hp1.value==""){
        alert("전화번호를 입력하세요");
        frm1.hp1.focus();
        return false;
      }
      if(frm1.hp2.value==""){
        alert("전화번호를 입력하세요");
        frm1.hp2.focus();
        return false;
      }
      if(frm1.email1.value==""){
        alert("이메일을 입력하세요");
        frm1.email1.focus();
        return false;
      }
      if(frm1.email2.value==""){
        alert("이메일을 입력하세요");
        frm1.email2.focus();
        return false;
      }
      document.frm1.submit();
    }
  </script>
</head>
<body>
   <div class="login">
      <?php if(isset($_SESSION["id"])){
        ?>
        <a href="logout.php">LOGOUT</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="member_edit.php">EDIT</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="mycart.php">MY CART</a>
        &nbsp;&nbsp;|&nbsp;&nbsp;<a href="Order_details.php">ORDER</a>
        <?php
          if(isset($_SESSION["id"])) { ?> 
          <?php
            $queryAdmin="select level from member where id='$_SESSION[id]'";
            $rsAdmin=mysqli_query($conn,$queryAdmin);
            $rowAdmin=mysqli_fetch_array($rsAdmin);
            if($rowAdmin["level"]=="admin"){
          ?>
             &nbsp;&nbsp;|&nbsp;&nbsp;<a href="admin_page.php">ADMINPAGE</a>
          <?php } ?>
        <?php } ?>
      <?php }else
        { ?> 
          <a href="javascript:winOpen()">LOGIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;
          <a href="join.php">JOIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;
          <a href="idpw.php">Search ID/PW</a>
      <?php } ?>   
    </div>
  <div id="wrap">
  <header>
    <div class="gnb_menu"></div>
    <div class="logo">
      <a href="index.php">
      <img src="logo/LOGO.jpg">
      </a>
    </div>
    <nav>
    <?php 
      $query="select * from menu";
      $rs=mysqli_query($conn, $query);
    ?>
      <ul class="menu">
      <?php
      while($row=mysqli_fetch_array($rs)) {
      ?>
        <li>
          <a href="store.php?code=<?php echo $row["code"]; ?>">
            <?php echo $row["name"]; ?>
          </a>
          <ul class="submenu">
          <?php
            $pcode=$row["code"];
            $query2="select * from submenu where pcode = '$pcode'";
            $rs2=mysqli_query($conn,$query2);
            while($row2=mysqli_fetch_array($rs2)) {
              $code=$row2["code"];
          ?>
            <li>
              <a href="store.php?code=<?php echo $code; ?>">
                <?php echo $row2["name"]; ?>
              </a>
            </li>
            <?php
            }
            ?>
          </ul>
        </li>
      <?php
      }
      ?>

    </nav>
  </header>
  <div>
      <form name="frm1" method="post" action="join_ok.php">
        <table class="table2" width="400">
          <tr>
            <th colspan="2" align="center "><b>회원가입</b></th>
          </tr>
          <tr>
            <td>아이디</td>
            <td>
              <input type="text" name="id">
              <input type="button" value="중복확인" class="bt1" onclick="idcheck()">
            </td>
          </tr>
          <tr>
            <td>비밀번호</td>
            <td><input type="password" name="pw"></td>
          </tr>
          <tr>
            <td>비밀번호 확인</td>
            <td><input type="password" name="pw2"></td>
          </tr>
          <tr>
            <td>이름</td>
            <td><input type="text" name="name"></td>
          </tr>
           <tr>
            <td>성별</td>
             <td>
              &nbsp;&nbsp;남성<input type="radio" name="gender" value="m" checked style="width:70px;">
              &nbsp;&nbsp;여성<input type="radio" name="gender" value="f" style="width:70px;">
            </td>
          </tr>
          <tr>
            <td>전화번호</td>
            <td>
              <select name="hp">
                <option value="010">010</option>
                <option value="011">011</option>
                <option value="019">019</option>
              </select>&nbsp;-
              <input type="text" name="hp1" maxlength="4"style="width:70px;">&nbsp;-
              <input type="text" name="hp2" maxlength="4"style="width:70px;"> 
            </td>
          </tr>
          <tr>
            <td>이메일</td>
            <td>
              <input type="text" name="email1">&nbsp;@&nbsp;<input type="text" name="email2">
            </td>
          </tr>
          <tr>
            <td>하고싶은 말</td>
            <td><textarea cols="50" rows="4" name="comment"></textarea></td>
          </tr>
          <tr>
            <td colspan="2" align="center">
              <input type="button" value="회원가입" onclick="send()" class="bt1">
              <input type="reset" value="새로고침" class="bt1">
            </td>
          </tr>
        </table>
      </form>
    </div>
    <footer>  
    <div class="leftfooter">
      <p>
        (주) 한마음<br>
        건물명: 부산 광역시 사직동 금광빌딩 3층<br>
        사업자번호: 110-25-6684  <a href="#">(사업자 정보확인)</a>
      </p>
    </div>
    <div class="rightfooter">
      <P>
         대표전화:051-224-5588<br>
         대표이메일:dldlsghks@naver.com
      </P>
    </div>
  </footer>
</body>
</html>