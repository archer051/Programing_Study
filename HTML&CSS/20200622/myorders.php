<?php
  include "dbconn.php";
  $loginID=$_SESSION["id"];
  $queryTotal="SELECT SUM(tPrice) AS tPrice FROM store_cart where id=$loginID";
  $rsTotal=mysqli_query($conn,$queryTotal);
  $rowTotal=mysqli_fetch_array($rsTotal);
  $Total=$rowTotal["tPrice"];
  $queryCart=
  "SELECT pno
      ,id
      ,SUM(ea) AS ea
      ,SUM(tPrice) AS tPrice 
  FROM store_cart
  WHERE id=$loginID 
  GROUP BY pno,id";
  // echo $queryCart; echo "<br>";
  $rsCart=mysqli_query($conn,$queryCart);
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
             &nbsp;&nbsp;|&nbsp;&nbsp;<a href="admin_page.php">ADMINPAGE</a>
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
             <a href="admin_page.php">ADMINPAGE</a>
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
    </nav>
  </header>
  <section>
  <!-- store_content.php시작영역 -->
  <form name="frmOrders" method="POST" action="myorders_ok.php">
    <table class="table3">
    	<tr>
				<th colspan="2" align="center">총 주문 내역</th>
    	</tr>
    <?php 
    while ($rowCart=mysqli_fetch_array($rsCart)){
      $menuNo=$rowCart["pno"];
      $queryMenuName="select name from store_menu where no=$menuNo";
      // echo $queryMenuName; echo "<br>";
      $rsMenuName=mysqli_query($conn,$queryMenuName);
      $rowMenuName=mysqli_fetch_array($rsMenuName);
      $menuName=$rowMenuName["name"];
      $ea=$rowCart["ea"];
      $tPriceNo=$rowCart["tPrice"];
      ?>
      <tr>
        <td>주문할 음식</td>
        <td>
          <input type="text" name="menuName" value="<?php echo $menuName; ?>" style="text-overflow: ellipsis; overflow: hidden; white-space: nowrap" readonly>
        </td>
        </tr>
      <tr>
        <td>갯수</td>
        <td>
          <input type="text" name="ea" value="<?php echo $ea; ?>" size="10" readonly>
        </td>
      </tr>
      <tr>
        <td>가격</td>
        <td>
          <input type="text" name="tPriceNo" value="<?php echo $tPriceNo; ?>" size="10" readonly>
        </td>
      </tr>
    <?php 
    }
    ?>
      <tr>
        <td>총 가격</td>
        <td>
          <input type="text" name="Total" value="<?php echo $Total; ?>" readonly>원
        </td>
      </tr>
      <tr>
				<td>주소</td>
        <td><input type="text" name="addr" class="hp" size="30"></td>
      </tr>
      <tr>
				<td>폰 번호</td>
				<td><input type="text" name="hp" class="hp"></td>
    	</tr>
    	<tr>
				<td colspan="2" align="center">
					<input type="submit" class="bt1" value="주문완료">
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
