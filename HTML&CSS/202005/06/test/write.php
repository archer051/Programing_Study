<script type="text/javascript">
	function send() {
	//무결성 체크
	// 무결성체크 후 포스트방식으로 wrtie_ok.php이동
	// && = 그리고 || =또는 != 같지않다
	if(isNaN(frm1.korean.value)==false)
	{
		if(frm1.korean.value < 0 || frm1.korean.value > 100)
		{
			alert("0부터 100까지만 가능합니다.");
			return false;
		}
	}
	else if(isNaN(frm1.english.value)==false)
	{
		
		if(frm1.english.value<0 || frm1.english.value>100)
		{
			alert("0부터 100까지만 가능합니다.");
			return false;
		}
	}
	else if(isNaN(frm1.math.value)==false)
	{
		
		if(frm1.math.value<0 || frm1.math.value>100)
		{
			alert("0부터 100까지만 가능합니다.");
			return false;
		}
	}else
	{
		alert("숫자만 입력가능");
		return false;
	}
	document.frm1.submit();
}
</script>

<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
	<form name="frm1" method="post" action="write_ok.php">
		<table class="table1" style="width: 600px;">
			<tr>
				<td colspan="2" align="center">
					시험성적추가
				</td>
			</tr>
			<tr>
				<td>학번</td>
				<td>
					<input type="text" name="num">
				</td>
			</tr>
			<tr>
				<td>이름</td>
				<td>
					<input type="text" name="name" size="10">
				</td>
			</tr>
			<tr>
				<td>국어</td>
				<td>
					<input type="text" name="korean" size="30">
				</td>
			</tr>
			<tr>
				<td>영어</td>
				<td>
					<input type="text" name="english" size="30">
				</td>
			</tr>
			<tr>
				<td>수학</td>
				<td>
					<input type="text" name="math" size="30">
				</td>
			</tr>
      <tr>
         <td colspan="2" align="center">
            <input type="button" value="작성완료" class="bt" onclick="send()">
         </td>
      </tr>
		</table>
	</form>
</body>
</html>