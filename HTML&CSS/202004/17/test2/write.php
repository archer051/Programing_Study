<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>성적표 쓰기</title>
</head>
<body>
	<table border="0">
		<tr><!--학번 -->
			<td>
				학번:
			</td>
			<td>
				<input type="text" name="ins_rnum" value="" size="4" maxlength="4">
			</td>
		</tr>
		<tr><!--이름 -->
			<td>
				이름:
			</td>
			<td>
				<input type="text" name="ins_rname" value="" size="4" maxlength="4">
			</td>
		</tr>
		<tr><!--국어 -->
			<td>
				국어:
			</td>
			<td>
				<input type="text" name="ins_rkorean" value="" size="4" maxlength="4">
			</td>
		</tr>
		<tr><!--영어 -->
			<td>
				영어:
			</td>
			<td>
				<input type="text" name="ins_renglish" value="" size="4" maxlength="4">
			</td>
		</tr>
		<tr><!--수학 -->
			<td>
				수학:
			</td>
			<td>
				<input type="text" name="ins_rmath" value="" size="4" maxlength="4">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="button" value="작성완료" onclick="location.href='index.php'">
			</td>
		</tr>
	</table>

</body>
</html>