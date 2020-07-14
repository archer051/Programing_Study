<!DOCTYPE html>
<script>
	function send(){
		document.frm1.submit();
	}
</script>
<link rel="stylesheet" href="style.css">
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>LOGIN</title>
</head>
<body>
	<form name="frm1" method="post" action="login_ok.php">
		<table class="login_table" width="250">
			<tr>
				<td colspan="2" align="center"><font color="gray"><b>일반회원 로그인</b></font></td>
			</tr>
			<tr>
				<th>ID:</th>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<th>PW:</th>
				<td><input type="password" name="pw"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" class="bt1" value="LOGIN"></td>
			</tr>
		</table>
	</form>
</body>

</html>