<script>
	function send() {
		// body...
		document.frm1.submit();
	}
</script>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form name="frm1" method="post" action="write_ok.php">
	<table border="1" width="500" align="center" cellspacing="0.5">
		<tr>
			<td align="center">글제목</td>
			<td >
<input type="text" name="title" size="50">
			</td>
		</tr>
		<tr>
			<td align="center">글내용</td>
			<td >
<textarea name="content" rows="5" cols="51"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
<input type="button" value="글쓰기" onclick="send()">
			</td>
		</tr>
	</table>
</form>
</body>
</html>