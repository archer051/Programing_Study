<?php
	include "dbconn.php";
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>20200615</title>
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<link rel="stylesheet" href="responsive.css">
  <script src="script.js" defer="defer"></script>
	<style>
		#id_subject,
		#pw_subject {
			padding: 5px;
			font-size: 0.9em;
			background-color: #FFD8D8;
			cursor: pointer;
		}

		#id_content,
		#pw_content {
			width: 400px;
			display: none;
}
	</style>
	<script>
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
	 <div class="admin">
			<?php if(isset($_SESSION["id"])) { ?>
			<a href="logout.php">Logout</a>&nbsp;|&nbsp;
			<a href="member_edit.php">Edit</a>&nbsp;|&nbsp;
			<a href="withdrawal.php">withdrawal</a>
			<?php }else {?>
			<a href="javascript:login()">Login</a>&nbsp;|&nbsp;
			<a href="join.php">Join</a>&nbsp;|&nbsp;
			<a href="idpw.php">Id/Pw</a>
     <?php } ?>
     </div>
      <a href="responsive.php" class="logo">
        <h1>LOGO</h1>
      </a>
      <a href="#" class="gnb_menu">menu</a>
			<nav>
        <a href="#">MENU1</a>
        <a href="#">MENU2</a>
        <a href="#">MENU3</a>
        <a href="#">MENU4</a>
        <a href="#">MENU5</a>
        <a href="#">MENU6</a>
        <a href="#">MENU7</a>
        <a href="#">MENU8</a>
      </nav>
</header>

<div id="wrap" style="min-height: 200px;">
	<br><br><br>
	<table class="table1" width="400">
		<tr>
			<th><div id="id_subject">ID 찾기</div></th>
			<th><div id="pw_subject">PW 찾기</div></th>
		</tr>
		<tr>
			<td colspan="2">
				<form name="frm1" method="post" action="id_ok.php">
			<div id="id_content">
			<table style="font-size:1.0em; color:#666; width:100%; border-collapse:collapse">
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
					<td colspan="2" align="center">
						<input type="button" class="bt" value="ID 찾기" onclick="send1()">
					</td>
				</tr>
			</table>
			</div>
		</form>
		<form name="frm2" method="post" action="pw_ok.php">
			<div id="pw_content">
			<table style="font-size:1.0em; color:#666; width:100%; border-collapse:collapse">
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
					<td colspan="2" align="center">
						<input type="button" class="bt" value="PW 찾기" onclick="send2()">
					</td>
				</tr>
			</table>
		</div>
	</form>
	</table>
	<br><br><br>
</div><!--wrap요소의 마지막-->
<footer>
	 Copyright &#169;shoppingmall.com All right reserved since 2020 by webeditor
</footer>
</body>
</html>

