<!DOCTYPE html>
<script>
	function send(){
		document.frm1.submit();
	}
</script>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>ADMIN LOGIN</title>
</head>
<body>
	<form name="frm1" method="post" action="login_ok.php">
		<table class="table1" width="250">
			<tr>
				<td colspan="2">관리자 로그인</td>
			</tr>
			<tr>
				<td>ID:</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>PW:</td>
				<td><input type="password" name="pw"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" class="bt1" value="LOGIN"></td>
			</tr>
		</table>
	</form>
</body>
</html>