<!DOCTYPE html>
<html lang="ko">
<head>
	<link rel="stylesheet" href="style.css">
	<meta charset="UTF-8">
	<title></title>
	<script>
		function send(){
			document.frm1.submit();
		}
	</script>
</head>
<body>
	<form enctype="multipart/form-data" name="frm1" method="post" action="write_ok.php">
		<table class="table2" width="700">
			<tr>
				<td colspan="2">
					신규배우 입력.
				</td>
			</tr>
			<tr>
				<td>이름</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>출생년도</td>
				<td>
					<select name="birth">
						<?php 
							for($i=2020;$i>=1990;$i--){
								echo "<option value=$i>$i</option>";
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>신장</td>
				<td><input type="text" name="height"></td>
			</tr>
			<tr>
				<td>몸무게</td>
				<td><input type="text" name="weight"></td>
			</tr>
			<tr>
				<td>이미지:</td>
				<td><input type="file" name="pic"></td>
			</tr>
			<tr>
				<td>특징</td>
				<td><textarea name="memo" cols="70" rows="10"></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="button" class="bt1" value="전송하기" onclick="send()">&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="reset" class="bt1" value="새로작성">
				</td>
			</tr>
		</table>
	</form>
	
</body>
</html>