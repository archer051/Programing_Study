<!DOCTYPE html>
<?php
	include "dbconn.php";
?>
<script>
	function idcheck(){
		if(frm1.id.value == ""){
			alert("ID를 입력하세요");
			frm1.id.focus();
			return false;
		}
		window.open("idcheck.php?id="+frm1.id.value,"frmid","width=400,height=250");
	}
	function send(){
		if(frm1.id.value==""){
			alert("아이디를 입력하세요");
			frm1.id.focus();
			return false;
		}
		if(frm1.pw.value==""){
			alert("비밀번호를 입력하세요");
			frm1.pw.focus();
			return false;
		}
	
		if(frm1.pw2.value==""){
			alert("비밀번호확인을 입력하세요");
			frm1.pw2.focus();
			return false;
		}
	
		if(frm1.name.value==""){
			alert("이름을 입력하세요");
			frm1.name.focus();
			return false;
		}
		if(frm1.email1.value==""){
			alert("이메일을 입력하세요");
			frm1.email1.focus();
			return false;
		}
		if(frm1.email2.value==""){
			alert("이메일을 입력하세요");
			frm1.email2.focus();
			return false;
		}
		if(frm1.pw.value!=frm1.pw2.value){
			alert("비밀번호 불일치");
			frm1.pw2.select();
			return false;
		}
		document.frm1.submit();
	}
</script>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="responsive.css">
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<script src="script.js" defer="defer"></script>
</head>
<body>
	<div id="wrap">
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
		<section>
			<form name="frm1" method="post" action="join_ok.php">
				<table class="join">
					<tr>
						<th colspan="2" align="center">회원가입</th>
					</tr>
					<tr>
						<th>ID</th>
						<td>
							<input type="text" name="id">
							<input type="button" class="join_bt" value="중복확인" onclick="idcheck()">
						</td>
					</tr>
					<tr>
						<th>PW</th>
						<td>
							<input type="password" name="pw">
						</td>
					</tr>
					<tr>
						<th>PW확인</th>
						<td>
							<input type="password" name="pw2">
						</td>
					</tr>
					<tr>
						<th>이름</th>
						<td>
							<input type="text" name="name">
						</td>
					</tr>
					<tr>
						<th>이메일</th>
						<td>
							<input type="text" name="email1"> @
							<input type="text" name="email2">
						</td>
					</tr>
					<tr>
						<th colspan="2" align="center">
							<input type="button" value="회원가입" class="join_bt" onclick="send()">
							<input type="reset" value="새로고침" class="join_bt">
						</th>
					</tr>
				</table>
			</form>
		</section>
		<footer>
			Copyright &#169; shoppingmall.com All rights reserved since 2020 by web editor.
		</footer>
	</div>
</body>
</html>