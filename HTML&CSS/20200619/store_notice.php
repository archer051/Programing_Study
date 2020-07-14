<?php
  include "dbconn.php";
  $storeNo=$_GET["storeNo"];
?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<script src="script.js" defer="defer"></script>
	<title>공지사항</title>
	<script>
		function send(){
			if(frm1.writer.value == ""){
				alert("작성자를 입력해주세요.");
				frm1.writer.focus();
				return false;
			}
			if(frm1.writeday.value == ""){
				alert("작성일을 입력해주세요.");
				frm1.writeday.focus();
				return false;
			}
			if(frm1.title.value == ""){
				alert("제목을 입력해주세요.");
				frm1.title.focus();
				return false;
			}
			
			if(frm1.memo.value == ""){
				alert("내용을 입력해주세요.");
				frm1.memo.focus();
				return false;
			}
			document.frm1.submit();
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
	<br><br>
	<form name="frm1" method="post" action="store_notice_ok.php">
		<table class="table2" width="700" height="300">
			<tr>
				<th colspan="2" align="center">공지사항 추가</th>
			</tr>
			<tr>
				<td>작성자:</td>
				<td>
					<input type="text" name="writer">
				</td>
			</tr>
			<tr>
				<td>작성일:</td>
				<td>
				</script>
				<?php 
				$date = date("Y-m-d h:i");
				?>
					<input type="text" name="writeday" value="<?php echo $date; ?>" readonly>
				</td>
			</tr>
			<tr>
				<td>제목:</td>
				<td>
					<input type="text" name="title">
					<input type="hidden" name="storeNo" value="<?php echo $storeNo; ?>">
				</td>
			</tr>
			<tr>
				<td>내용:</td>
				<td>
					<textarea name="memo" rosw="10" cols="50"></textarea>
				</td>
			</tr>
			<tr>
					<td colspan="2" align="center">
						<input type="button" value="작성완료" class="bt1" onclick="send()">
						<input type="reset" value="새로작성" class="bt1">
					</td>
			</tr>
		</table>
	</form>
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