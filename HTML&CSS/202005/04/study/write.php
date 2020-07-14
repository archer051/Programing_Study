<script type="text/javascript">
	function send() {
	//무결성 체크
	// 무결성체크 후 포스트방식으로 wrtie_ok.php이동
	document.frm1.submit();
}
</script>

<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="script.js" defer="defer"></script>
	<title></title>
</head>
<body>
	<form name="frm1" method="post" action="write_ok.php">
		<table class="table1" style="width: 600px;">
			<tr>
				<td colspan="2" align="center">
					학생추가폼
				</td>
			</tr>
			<tr>
				<td>전화번호</td>
				<td>
					<input type="text" name="hp">
				</td>
			</tr>
			<tr>
				<td>이름</td>
				<td>
					<input type="text" name="name">
				</td>
			</tr>
			<tr>
				<td>성별</td>
				<td>
					<select name="gender">
						<option value="M">남성</option>
						<option value="F">여성</option>
					</select>
				</td>
			</tr>
			<tr>
         <td>나이</td>
         <td><input type="text" name="age"></td>
      </tr>
      <tr>
         <td>주소</td>
         <td><input type="text" name="addr" size="55"></td>
      </tr>
      <tr>
         <td>이메일</td>
         <td><input type="text" name="email" size="30"></td>
      </tr>
      <tr>
         <td>학력</td>
         <td><select name="grade">
            <option value="대학원졸">대학원졸</opction>
            <option value="대졸">대졸</opction>
            <option value="초대졸">초대졸</opction>
            <option value="고졸">고졸</opction>
            <option value="중졸">중졸</opction>
         </select>
         </td>
      </tr>
      <tr>
         <td>전공</td>
         <td><input type="text" name="major"></td>
      </tr>
      <tr>
         <td>홈페이지</td>
         <td><input type="text" name="homepage"></td>
      </tr>
      <tr>
         <td colspan="2" align="center">
            <input type="button" value="작성완료" class="bt" onclick="send()">
         </td>
      </tr>
		</table>
	</form>
	<footer></footer>
</body>
</html>