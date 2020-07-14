<?php
	include "dbconn.php";
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>20200618</title>
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<link rel="stylesheet" href="style.css">
  <script src="script.js" defer="defer"></script>
	<style>
		#id_subject,
		#pw_subject {
			padding: 5px;
			font-size: 0.9em;
			background-color:#5D5D5D;
			cursor: pointer;
		}

		#id_content,
		#pw_content {
			width: 400px;
			display: none;
		}
	</style>
	<script>
	function winOpen(){
      window.open("login.php","frmLOGIN","width=700,height=200");
    }
    function winOpen1(){
      window.open("adminlogin.php","frmADMIN","width=700,height=200");
    }
	function send1() {
		if(frm1.name1.value==""){
			alert("이름을 입력하세요");

		frm1.name1.focus();
		return false;
	}
	if(frm1.email1.value==""){
		alert("이메일을 입력하세요");
		frm1.email1.focus();
		return false;
	}
	document.frm1.submit();
	}
	function send2() {
		if(frm2.name2.value==""){
			alert("이름을 입력하세요");

		frm2.name2.focus();
		return false;
	}
	if(frm2.email2.value==""){
		alert("이메일을 입력하세요");
		frm2.email2.focus();
		return false;
	}
	if(frm2.id.value==""){
		alert("아이디를 입력하세요");
		frm2.id.focus();
		return false;
	}
	document.frm2.submit();
	}
</script>

</head>
<body>
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

<div id="wrap" style="min-height: 200px;">
	<br><br><br>
	<table class="table_re" width="400">
		<tr>
			<th><div id="id_subject">ID 찾기</div></th>
			<th><div id="pw_subject">PW 찾기</div></th>
		</tr>
		<tr>
			<td colspan="2">
				<form name="frm1" method="post" action="id_ok.php">
			<div id="id_content">
			<table style="color:#666; width:100%; border-collapse:collapse">
				<br><br><h>아이디를 찾고자 하는 회원정보를 입력해 주세요.</h><br><br><br>
				<tr>
					<td>이름</td>
					<td>
						<input type="text" name="name1" size="20">
					</td>
				</tr>
				<tr>
					<td>이메일</td>
					<td>
						<input type="text" name="email1" size="30">
					</td>
				</tr>
				<tr>
					<th colspan="2" align="center">
						<input type="button" class="bt1" value="ID 찾기" onclick="send1()">
					</th>
				</tr>
			</table>
			</div>
		</form>
		<form name="frm2" method="post" action="pw_ok.php">
			<div id="pw_content">
			<table style="color:#666; width:100%; border-collapse:collapse">
				<br><h>찾고자 하는 비밀번호의 정보를 입력해 주세요.</h><br><br>
				<tr>
					<td>이름</td>
					<td>
						<input type="text" name="name2" size="20">
					</td>
				</tr>
				<tr>
					<td>이메일</td>
					<td>
						<input type="text" name="email2" size="30">
					</td>
				</tr>
				<tr>
					<td>아이디</td>
					<td>
						<input type="text" name="id" size="20">
					</td>
				</tr>
				<tr>
					<th colspan="2" align="center">
						<input type="button" class="bt1" value="PW 찾기" onclick="send2()">
					</th>
				</tr>
			</table>
		</div>
	</form>
	</table>
	<br><br><br>
</div><!--wrap요소의 마지막-->
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
