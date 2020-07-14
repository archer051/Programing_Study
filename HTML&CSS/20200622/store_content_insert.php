<?php
  include "dbconn.php";
  $storeNo=$_GET["storeNo"];
  $smallTypeNo=$_GET["smallType"];
  $bigTypeNo=$_GET["bigTypeNo"];
?>
<html>
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css2?family=Gamja+Flower&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>20200622</title>
  <link rel="stylesheet" href="style.css">
  <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
  <script src="script.js" defer="defer"></script>
  <script>
    function winOpen(){
      window.open("login.php","frmLOGIN","width=700,height=200");
    }
    function winOpen1(){
      window.open("adminlogin.php","frmADMIN","width=700,height=200");
    }
    function send() {
         if (frmStoreContentInsert.foodtitle.value == "") {
            alert("메뉴명을 입력하세요");
            frmStoreContentInsert.writer.focus();
            return false;
         }
         if (frmStoreContentInsert.price.value == "") {
            alert("가격을 입력하세요");
            frmStoreContentInsert.title.focus();
            return false;
         }
         if (frmStoreContentInsert.content.value == "") {
            alert("내용을 입력하세요");
            frmStoreContentInsert.content.focus();
            return false;
         }
         if (frmStoreContentInsert.foodimgfile.value == "") {
            alert("음식사진파일을 첨부하세요");
            frmStoreContentInsert.userflie.focus();
            return false;
         }
         document.frmStoreContentInsert.submit();
      }
  </script>
</head>
<body>
  <div class="login">
      <?php if(isset($_SESSION["id"])){
        ?>
        <a href="logout.php">LOGOUT</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="member_edit.php">EDIT</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="mycart">MY CART</a>
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
          <a href="idpw.php">Id/Pw</a>
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
  <section>
  <form enctype="multipart/form-data" name="frmStoreContentInsert" action="store_content_insert_ok.php" method="post">
  <table class="table2">
  <tr>
    <th colspan="2" align="center">메뉴 작성</th>
  </tr>
  <tr>
    <td>메뉴명</td>
    <td><input type="text" name="foodtitle"></td>
  </tr>
  <tr>
    <td>가격</td>
    <td><input type="text" name="price"></td>
  </tr>
  <tr>
    <td>내용</td>
    <td>
    <textarea name="content" cols="60" rows="5"></textarea>
    </td>
  </tr>
  <tr>
    <td>이미지파일</td>
    <td><input type="file" name="foodimgfile" style="width:300px; height:50px;"></td>
    <input type="hidden" name="storeNo" value="<?php echo $storeNo; ?>">
    <input type="hidden" name="smallTypeNo" value="<?php echo $smallTypeNo; ?>">
    <input type="hidden" name="bigTypeNo" value="<?php echo $bigTypeNo; ?>">
  </tr>
  <tr>
  <th colspan="2" align="center">
    <br>
    <input type="button" class="bt1" value="작성완료" onclick="send()">
    <input type="reset" class="bt1" value="새로작성">
    <input type="button" class="bt1" value="리스트로" onclick="location.href='store_content.php?storeNo=<?php echo $storeNo; ?>'">
  </th>
  </tr>
  </table>
  </form>
  </section>
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