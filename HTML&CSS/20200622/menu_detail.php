<?php
  include "dbconn.php";
  $storeMenuNo=$_GET["no"];
  // echo $storeMenuNo;echo "<br>";
  $storeMenuImgDir=$_GET["storeMenuImgDir"];
  // echo $storeMenuImgDir;echo "<br>";
  $FileName=$_GET["FileName"];
  // echo $FileName;echo "<br>";
  $queryStoreMenu="select * from store_menu where no=$storeMenuNo";
  // echo $queryStoreMenu;echo "<br>";
	$rsStoreMenu=mysqli_query($conn,$queryStoreMenu);
	$rowStoreMenu=mysqli_fetch_array($rsStoreMenu);
	$name=$rowStoreMenu["name"];
  $memo=$rowStoreMenu["memo"];
  $price=$rowStoreMenu["price"];

?>
<html>
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css2?family=Gamja+Flower&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>20200619</title>
  <link rel="stylesheet" href="style.css">
  <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
  <script src="script.js" defer="defer"></script>
  <script>
  	function winOpen(){
      window.open("login.php","frmLOGIN","width=700,height=200");
    }
  </script>
</head>
<body>
  <div id="wrap">
  <header>
  	 <div class="login">
     <?php 
      if(isset($_SESSION["id"])){
      ?>
        <a href="logout.php">LOGOUT</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="member_edit.php">EDIT</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="mycart.php">MY CART</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="Order_details.php">ORDER</a>
        <?php
        if(isset($_SESSION["id"])) { 
          $queryAdmin="select level from member where id='$_SESSION[id]'";
          $rsAdmin=mysqli_query($conn,$queryAdmin);
          $rowAdmin=mysqli_fetch_array($rsAdmin);
          if($rowAdmin["level"] == "admin"){ ?>
        &nbsp;&nbsp;|&nbsp;&nbsp;<a href="admin_page.php">ADMINPAGE</a>
      <?php 
          }
        } 
      } else { 
      ?> 
          <a href="javascript:winOpen()">LOGIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;
          <a href="join.php">JOIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;
          <a href="idpw.php">Id/Pw</a>&nbsp;&nbsp;|&nbsp;&nbsp;
          <a href="Order_details.php">ORDER</a>
      <?php 
      } 
      ?>   
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
  	<table class="food"style="flaot:left">
  	<tr>
	    <td colspan="2" align="center">
	      <img src="<?php echo $storeMenuImgDir.$FileName ?>" width="300" height="300">
	    </td>
  	</tr>
  </table>
  <form name="frmMenuDetail" method="POST" action="menu_detail_ok.php">
  <table class="table_food" sytle="float:left">
  <tr>
    <th>음식이름</th>
    <td><?php echo $name; ?></td>
  </tr>
  <tr>
    <th>상세설명</th>
    <td><?php echo $memo; ?></td>
  </tr>
  <tr>
    <th>기본 가격</th>
    <td>
    	<?php echo $price; ?>
    	<input type="hidden" name="storeMenuNo" value="<?php echo $storeMenuNo; ?>">
    	<input type="hidden" name="storeMenuImgDir" value="<?php echo $storeMenuImgDir; ?>">
    	<input type="hidden" name="FileName" value="<?php echo $FileName; ?>">
    	<input type="hidden" name="MenuName" value="<?php echo $name; ?>">
    	<input type="hidden" name="MenuMemo" value="<?php echo $memo; ?>">
    	<input type="hidden" name="MenuPrice" value="<?php echo $price; ?>">
    </td>
  </tr>
  <tr>
    <th>수량</th>
    <td>
    	<select name="ea">
    	 	<script>
    	 		var strTemp;
    	 		for(var i=1; i<=10; i++){
    	 			// strTemp+="<option value="+i+">"+i+"</option>";
    	 			strTemp+= `<option value=${i}>${i}</option>`;
    	 		}
    	 		document.write(strTemp);
    		</script>
    	</select>
  	</td>
  </tr>
  <?php
  if(isset($_SESSION["id"])){
  ?>
  <tr>
    <td align="center" colspan="2">
    	<input type="submit" value="내장바구기에추가" class="bt1" style="width:200px">
    </td>
  </tr>
  <?php
	}
	?>
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
