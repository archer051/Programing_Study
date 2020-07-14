<?php
  include "dbconn.php";
  $storeNo=$_GET["storeNo"];
  $queryStoreInfo="select * from store where no=$storeNo";
  $rsStoreInfo=mysqli_query($conn,$queryStoreInfo);
  $rowStoreInfo=mysqli_fetch_array($rsStoreInfo);
  $smallType=$rowStoreInfo["pcode"];
  $querySmallType="select * from submenu where code='$smallType'";
  $rsSmallType=mysqli_query($conn,$querySmallType);
  $rowSmallType=mysqli_fetch_array($rsSmallType);
  $smallTypeName=$rowSmallType["name"];//소분류이름
  $bigTypeNo=$rowSmallType["pcode"];
  $queryBigType="select * from menu where code = '$bigTypeNo'";
  $rsBigType=mysqli_query($conn,$queryBigType);
  $rowBigType=mysqli_fetch_array($rsBigType);
  $bigTypeName=$rowBigType["name"];//대분류이름
  $storeName=$rowStoreInfo["store_name"];//가게명
  $storeManager=$rowStoreInfo["manager"];//담당자
  $storeTel=$rowStoreInfo["tel"];//가게전화번호
  $storePic=$rowStoreInfo["pic"];//가게사진파일명
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>20200617</title>
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
  </script>
  <script>
  function send(){
  document.frm1.submit();
  }
  function del(no,fname){
  if(confirm("정말로 삭제 하시겠습니까?")){
    //js는 변수를 기준으로 분리를 해준다.
    location.href="store_re_del.php?no="+no+"&fname="+fname;
    }
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
        <a href="mycart.php">MY CART</a>
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
  <!-- store_content.php시작영역 -->
  <table class="table_content" style="width:800px;">
  <table class="food">
  <tr>
    <td colspan="2" align="center">
      <img src="images/store/<?php echo $storePic; ?>" width="300" height="300">
    </td>
  </tr>
    </table>
    <table class="table_food">
    <tr>
      <td>
      <img src="<?php echo "images/".$bigTypeNo."/".$smallType."/".$storeNo."/".$rowStoreMenu["pic"]; ?>"></a></td>
    </tr>
  <?php
  $query3="select * from store_cart where id=$_SESSION[id]";
  $rs3=mysqli_query($conn,$query);
  $row3=mysqli_fetch_array($rs3);
  ?>
  <tr>
    <td>주문할 음식</td>
    <td><?php echo $row["id"]?></td>
  </tr>
  <tr>
    <td>총 가격</td>
    <td><?php echo $storeName; ?></td>
  </tr>
  <tr>
    <td><input type="button" value="주문하기" onclick="location.href='myorders.php'"></td>
  </tr>
    </table>
  <div class="clear"></div>
  </section>
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
