<script>
	function send(){
		//무결성 체크
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
	<table border = "1" width = "500" align="center">
		<tr>
		    <td>글제목</td>
		    <td>
<input type="text" name="title">		    		    	
		    </td>>
		</tr>
		<tr>
		    <td>글내용</td>
		    <td>
<textarea name="content" rows="5" cols="55"></textarea>
 		    </td>
		</tr>
		<tr>
			<td colspan="2" align="center">
<input type="button" value="작성완료" onclick="send()">
			</td>
		</tr>
	</table>
</form >
</body>
</html>

