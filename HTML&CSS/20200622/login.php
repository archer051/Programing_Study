<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>배달의 만족 로그인</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Gamja+Flower&display=swap" rel="stylesheet">
</head>
<body>
<br>
<p align="center"><font size="5" color="gray"><b>로그인</b></font></p>
	<form name="frmLogin" method="post" action="login_ok.php">
		<table class="login_table" width="100">
			<tr>
				<th style="font-size:1.2em;">ID</th>
				<td><input type="text" name="id" style="border:3px solid #8c8c8c; font-size:1.2em;"></td>
			</tr>
			<tr>
				<th style="font-size:1.2em;">PW</th>
				<td><input type="password" name="pw" style="border:3px solid #8c8c8c; font-size:1.2em;"></td>
			</tr>
		</table>
		<br>
		<p align="center"><input type="button" name="LoginOk" class="bt1" value="확인" onclick=Login()></p>
	</form>
<script>
	frmLogin.LoginOk.focus();
	function Login() {
		if(frmLogin.id.value == "") {
			alert("아이디를 입력해주시기 바랍니다.");
			frmLogin.id.focus();
			return false;
		}
		if(frmLogin.pw.value == "") {
			alert("패스워드를 입력해주시기 바랍니다.");
			frmLogin.pw.focus();
			return false;
		}
		document.frmLogin.submit();
	}	
</script>
</body>
</html>