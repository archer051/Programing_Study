	<?php
		include "dbconn.php";
	?>
	<script>
		function send() {
			if (frm1.name.value == "") {
				alert("이름을 입력하세요");
				frm1.name.focus();
				return false;
			}
			if (frm1.id.value == "") {
				alert("아이디를 입력하세요");
				frm1.id.focus();
				return false;
			}
			if (frm1.pw1.value == "") {
				alert("비밀번호을 입력하세요");
				frm1.pw1.focus();
				return false;
			}
			if (frm1.pw2.value == "") {
				alert("비밀번호 확인을 입력하세요");
				frm1.pw2.focus();
				return false;
			}
			if (frm1.pw1.value != frm1.pw2.value) {
				alert("비밀번호가 일치하지 않습니다.");
				frm1.pw2.select();
				return false;
			}
			document.frm1.submit();
		}
	</script>
	<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0"> <!-- 모바일 -->
		<link rel="stylesheet" href="responsive.css">
		<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
		<script src="script.js" defer="defer"></script>
		<title></title>
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
			<form name="frm1" method="post" action="member_edit_ok.php">
				<br><br>
				<table class="table2" width="450">
					<tr>
						<td colspan="2" align="center">
							<h3>회원가입 수정</h3>
						</td>
					</tr>
					<tr>
						<td>이름</td>
						<td>
							<input type="text" name="name" size="15">
						</td>
					</tr>
					<tr>
						<td>아이디</td>
						<td>
							<input type="text" name="id" size="15" value="<?php echo $_SESSION["id"]; ?>" readonly>
						</td>
					</tr>
					<tr>
						<td>비밀번호</td>
						<td>
							<input type="password" name="pw1" size="15">
							<font color="red">(6자리이상 입렵하세요)</font>
						</td>
					</tr>
					<tr>
						<td>비밀번호확인</td>
						<td>
							<input type="password" name="pw2" size="15">
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="button" class="bt2" value="수정완료" onclick="send()">
						</td>
					</tr>
				</table>
			</form>
			<footer>
				Copyright &#169; shoppingmall.com All rights reserved since 2020 by web editor.
			</footer>
		</div>
	</body>

	</html>