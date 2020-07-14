<?php
  include "dbconn.php";
  $loginId = $_SESSION["id"];
  $CurDate=date("%Y-%m-%d");
  $BeforeDate = date("Y-m-d", strtotime($CurDate." -2 week"));
  $queryOrder=
  "SELECT order_no
		,store_no
		,id
		,content
		,total
		,addr
		,hp
		,DATE_FORMAT(STR_TO_DATE(order_time, '%Y-%m-%d %H:%i:%s'),'%Y%m%d%h%i%s') AS order_time 
  FROM store_orders
  WHERE id='$loginId'
  AND order_time <= '$CurDate'
  AND order_time >= '$BeforeDate'
  order by order_time desc";
  echo $queryOrder;exit;
  $rsOrder = mysqli_query($conn, $queryCart1);
  if(!isset($_SESSION["id"])) {
  ?>  
  <script>
    alert("LOGIN후 사용가능합니다.");
    history.back();
  </script>
  <?php
  }
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Gamja+Flower&display=swap" rel="stylesheet">
<script src="script.js" defer="defer"></script>
<title>공지사항</title>
<script>
  function send(){
	
   }
</script>
<script>
  function winOpen(){
    window.open("login.php","frmLOGIN","width=700,height=200");
  }
  function winOpen1(){
    window.open("adminlogin.php","frmADMIN","width=700,height=200");
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
             &nbsp;&nbsp;|&nbsp;&nbsp;<a href="admin_page.php">ADMINPAGE</a>
          <?php } ?>
        <?php } ?>
      <?php }else
        { ?> 
          <a href="javascript:winOpen()">LOGIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;
          <a href="join.php">JOIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;
          <a href="idpw.php">Search ID/PW</a>
          <a href="Order_details.php">ORDER</a>
      <?php } ?>   
    </div>
    <div class="gnb_menu"></div>
    <div class="logo">
      <a href="index.php"><img src="logo/LOGO.jpg"></a>
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
	<br><br>

<form name="details1" method="POST" action="Order_details_ok.php">
<table class="Order">
<tr>
  <th colspan="2" align="center">주문내역</th>
</tr>
<?php 
  while ($rowCart1 = mysqli_fetch_array($rsCart1)) {
    $content=$rowCart1["content"];
    $total=$rowCart1["total"];
    $addr=$rowCart1["addr"];
    $hp=$rowCart1["hp"];
    $order_time=$rowCart1["order_time"];
    // $menuNo=$rowOrder["store_no"];
    // $queryMenuName="select * from store_orders where id= '$loginId'";
    // $rsMenuName=mysqli_query($conn,$queryMenuName);
    // $rowMenuName=mysqli_fetch_array($rsMenuName);
    // $contnet=$rowMenuName["content"];
    // $total=$rowMenuName["total"];
    // $addr=$rowMenuName["addr"];
    // $hp=$rowMenuName["hp"];
    // $order_time=$rowMenuName["order_time"];

?>
<!-- <tr>
  <td>
    <input type="text" name="contnet" value="<?php echo $content; ?>" readonly>
  </td>
<tr>
<tr>
  <td>
    <input type="text" name="total" value="<?php echo $total; ?>" readonly>
  </td>
<tr>
<tr>
  <td>
    <input type="text" name="addr" value="<?php echo $addr; ?>" readonly>
  </td>
<tr>
<tr>
  <td>
    <input type="text" name="hp" value="<?php echo $hp; ?>" readonly>
  </td>
<tr>
<tr>
  <td>
   <input type="text" name="order_time" value="<?php echo $order_time; ?>" readonly>
  </td>
<tr>
<tr>
  <td colspan="2" align="center">
    <input type="button" class="bt1" value="삭제">
  </td>
</tr> -->
</table>
</form>
<?php } ?>
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