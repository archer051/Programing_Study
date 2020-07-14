<script type="text/javascript">
	function send() {
		document.frm1.submit();
	}
</script>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
	<form name="frm1" method="post" action="login_ok.php">
		<table class="table1">
			<tr>
				<td>ID:</td>
				<td>
					<input type="text" name="id">
				</td>
			</tr>
			<tr>
				<td>PW:</td>
				<td>
					<input type="password" name="pw">
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="button" value="로그인" class="bt1"
					onclick="send()">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
