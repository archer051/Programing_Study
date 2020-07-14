
<script type="text/javascript">
	function idcheck(){
		if(frm1.id.value == ""){
			alert("ID를 입력하세요");
			frm1.id.focus();
			return false;
		}
		window.open("idcheck.php?id="+frm1.id.value,"frmid","width=500,height=250");
	}

	function send() {
		if(frm1.pw1.value == ""){
			alert("비밀번호를 입력하세요");
			frm1.pw1.focus();
			return false;
		}

		if(frm1.pw2.value == ""){
			alert("비밀번호 확인을 입력하세요");
			frm1.pw2.focus();
			return false;
		}

		if(frm1.name.value == ""){
			alert("이름를 입력하세요");
			frm1.name.focus();
			return false;
		}

		if(frm1.pw1.value != frm1.pw2.value){
			alert("비밀번호 불일치!");
			frm1.pw2.focus();
			return false;
		}
		document.frm1.submit();
	}

	function login() {
		window.open("login.php","login","width=500,height=150");
	}
</script>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
	<header>
		<div class="topmenu">
			<a href="javascript:login()">Login</a>&nbsp;|&nbsp;
			<a href="join.php">SignUp</a>&nbsp;|&nbsp;
			<a href="#">SearchID/PW</a>
		</div>
	</header>
	<section>
		<br>
		<br>
		<form name="frm1" method="post" action="join_ok.php">
			<table class="table1">
				<tr>
					<td colspan="2" align="center" style="font-size: 1.4em;">
						<b>회원가입 양식</b>
					</td>
				</tr>
				<tr>
					<td>아이디</td>
					<td>
						<input type="text" name="id">
						<input type="button" value="중복체크" onclick="idcheck()" class="bt1">
					</td>
				</tr>
				<tr>
					<td>비밀번호</td>
					<td>
						<input type="text" name="pw1">
					</td>
				</tr>
				<tr>
					<td>비밀번호확인</td>
					<td>
						<input type="text" name="pw2">
					</td>
				</tr>
				<tr>
					<td>이름</td>
					<td>
						<input type="text" name="name">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="button" value="가입완료" class="bt1" onclick="send()">
						&nbsp;&nbsp;
						<input type="reset" value="새로작성" class="bt1">
					</td>
				</tr>
			</table>
		</form>
	</section>
</body>
</html>