<?php
  include "dbconn.php";
  $loginId=$_SESSION["id"];
  $queryCart=
  "SELECT pno
      ,id
      ,SUM(ea) AS ea
      ,SUM(tPrice) AS tPrice 
  FROM store_cart
  WHERE id=$loginId 
  GROUP BY pno,id";
  $rsCart=mysqli_query($conn,$queryCart);
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Gamja+Flower&display=swap" rel="stylesheet">
  <title>20200619</title>
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
    location.href="store_re_del.php?no="+no+"&fname="+fname;
    // `store_re_del.php?no=${no}&fname=${fname}`
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
        <a href="mycart.php">MY CART</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="Order_details.php">ORDER</a>
        <?php
          if(isset($_SESSION["id"])) { ?> 
          <?php
            $queryAdmin="select level from member where id='$_SESSION[id]'";
            $rsAdmin=mysqli_query($conn,$queryAdmin);
            $rowAdmin=mysqli_fetch_array($rsAdmin);
            if($rowAdmin["level"]=="admin"){
          ?>
          <?php } ?>
        <?php } ?>
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
  </header>
  </nav>
  <section>
  <form name=frmMyCart method="POST" action="myorders.php">
  <table class="table3">
      <tr>
        <th colspan="6" align="center">My Cart</th>
      </tr>
  <?php 
  while ($rowCart=mysqli_fetch_array($rsCart)){
    $menuNo=$rowCart["pno"];
    $queryMenuName="select name from store_menu where no=$menuNo";
    $rsMenuName=mysqli_query($conn,$queryMenuName);
    $rowMenuName=mysqli_fetch_array($rsMenuName);
    $menuName=$rowMenuName["name"];
    $ea=$rowCart["ea"];
    $tPriceNo=$rowCart["tPrice"];
  ?>
  <tr>
    <td align="right">주문할 음식 &nbsp;</td> 
    <td>
      <input type="text" name="menuName" value="<?php echo $menuName; ?>"  style="text-overflow: ellipsis; overflow: hidden; white-space: nowrap" readonly>
    </td>
  </tr>
  <tr>
    <td align="right">갯수 &nbsp;</td>
    <td>
      <input type="text" name="ea" value="<?php echo $ea; ?>" readonly>
    </td>
  </tr>
  <tr>
    <td align="right">가격 &nbsp;</td>
    <td>
      <input type="text" name="tPriceNo" value="<?php echo $tPriceNo; ?>" readonly>
    </td>
  </tr>
  <?php
  }
  ?>
  <tr>
    <td colspan="2" align="center">
      <input type="submit" value="주문하기" class="bt1">
  </td>
  </tr>
  </table>
  </form>
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
