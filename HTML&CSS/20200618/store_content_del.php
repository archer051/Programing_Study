<?php
  include "dbconn.php";
  $storeNo=$_GET["storeNo"];
  $smallTypeNo=$_GET["smallType"];
  $bigTypeNo=$_GET["bigTypeNo"];
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>20200618</title>
  <link rel="stylesheet" href="style.css">
  <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
  <script src="script.js" defer="defer"></script>
  <script>
    function winOpen(){
      window.open("login.php","frmLOGIN","width=300,height=150");
    }
    function winOpen1(){
      window.open("adminlogin.php","frmADMIN","width=300,height=150");
    }
    function send() {
         if (frmStoreContentDel.foodtitle.value == "") {
            alert("메뉴명을 입력하세요");
            frmStoreContentInsert.writer.focus();
            return false;
         }
         document.frmStoreContentDel.submit();
      }
  </script>
</head>
<body>
  <div id="wrap">
  <header>
  <div class="login">
      <?php if(isset($_SESSION["id"])){
        ?>
        <a href="logout.php">LOGOUT</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="member_edit.php">EDIT</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <?php
          if(isset($_SESSION["id"])) { ?> 
          <?php
            $queryAdmin="select level from member where id='$_SESSION[id]'";
            $rsAdmin=mysqli_query($conn,$queryAdmin);
            $rowAdmin=mysqli_fetch_array($rsAdmin);
            if($rowAdmin["level"]=="admin"){
          ?>
             <a href="admin_page.php">ADMINPAGE</a>
          <?php } ?>
        <?php } ?>
      <?php }else
        { ?> 
          <a href="javascript:winOpen()">LOGIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;
          <a href="join.php">JOIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;
          <a href="idpw.php">Search ID/PW</a>
      <?php } ?>   
    </div>
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
  <form enctype="multipart/form-data" name="frmStoreContentDel" action="store_content_del_ok.php" method="post">
  <table>
  <tr>
    <th>메뉴명</th>
    <th>가격</th>
    <th>내용</th>
    <th>이미지파일</th>
  </tr>
  <?php
  $query="select * from store_menu where pno=$storeNo order by no";
  $rs=mysqli_query($conn,$query);
  while($row=mysqli_fetch_array($rs)){
  $no=$row["no"];
  $pic=$row["pic"];
  ?>
  <tr>
    <td><img src="images/<?php echo $bigTypeNo."/".$smallTypeNo."/".$storeNo."/".$pic;?>"></td>
    <td><?php echo $row["name"];?></td>
    <td><?php echo $row["price"];?></td>
    <td><?php echo $row["memo"];?></td>
    <td><input type="button" value="삭제" onclick="location.href='store_content_del_ok.php?no=<?php echo $no; ?>&storeNo=<?php echo $storeNo; ?>&smallTypeNo=<?php echo $smallTypeNo; ?>&bigTypeNo=<?php echo $bigTypeNo; ?>&pic=<?php echo $pic; ?>'"></td>
  </tr>
  <?php
  }
  ?>
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