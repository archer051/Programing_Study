<script>
	function send(){
		//무결성체크...
		document.frm1.submit();
	}
</script>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="style.css">
	<script src="script.js"></script>
</head>
<body>
<form name="frm1" method="post" action="login_ok.php">
	<br>
	<table class="table1">
		<tr>
			<td>아이디:</td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td>패스워드:</td>
			<td><input type="password" name="pw"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="button" class="bt" value="Login" onclick="send()"></td>
		</tr>
	</table>
</form>
</body>
</html>