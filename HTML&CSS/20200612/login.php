<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
		*{
			margin:0 auto;
			padding:0;
			list-style:none;
			font-family:"맑은 고딕";
		}
		a{
			text-decoration:none;
			color:inherit;
		}
		.table{
			border-collapse:collapse;
			border-top:2px solid #333;
			border-bottom:2px solid #333;
			margin-top:20px;
		}
		.table tr>td{
			padding:7px;
			border-bottom:1px solid #333;
		}
		.bt{
			border:none;
			border-radius:10px;
			background-color:#333;
			color:#fff;
			font-size:1em;
			font-weight:bold;
			padding:5px;
			cursor:pointer;
		}
	</style>
</head>
<body>
	<form name="frm1" method="post" action="login_ok.php">
		<table class="table">
			<tr>
				<td align="right">아이디:</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td align="right">비밀번호:</td>
				<td><input type="password" name="pw"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="로그인" class="bt">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>