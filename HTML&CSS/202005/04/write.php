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
	<title></title>
</head>
<body>
	<form name="frm1" method="post" action="write_ok.php">
		<table class="table1" style="width: 600px;">
			<tr>
				<td colspan="3" align="center">
					사원추가폼
				</td>
			</tr>
			<tr>
				<td>사원번호</td>
				<td>
					<input type="text" name="enum">
				</td>
			</tr>
			<tr>
				<td>이름</td>
				<td>
					<input type="text" name="name" size="10">
				</td>
			</tr>
			<tr>
				<td>부서명</td>
				<td>
					<input type="text" name="partname" size="30">
				</td>
			</tr>
			<tr>
				<td>직급</td>
				<td>
					<input type="text" name="position" size="30">
				</td>
			</tr>
			<tr>
				<td>전화번호</td>
				<td>
					<input type="text" name="hp" size="30">
				</td>
			</tr>
			<tr>
         <td>주소</td>
         <td><input type="text" name="addr" size="55"></td>
      </tr>
      <tr>
         <td>이메일</td>
         <td>
	         	<input type="text" name="email" size="30">
	         	<select name="emiail_etc">
	       		<option value="">직접입력</option>
						<option value="@google.com">@google.com</option>
						<option value="@naver.com">@naver.com</option>
						<option value="@daum.net">@daum.net</option>
						<option value="@kakao.com">@kakao.com</option>
					</select>
         </td>
      </tr>
      <tr>
				<td>혼인여부</td>
				<td>
					<select name="marriage_yn">
						<option value="N">미혼</option>
						<option value="Y">기혼</option>
					</select>
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
         <td>연봉</td>
         <td><input type="text" name="cash" size="30"></td>
      </tr>
       <tr>
         <td>생년월일</td>
         <td><input type="text" name="birthday" size="30"></td>
      </tr>
    	<tr>
				<td>경력여부</td>
				<td>
					<select name="career_yn">
						<option value="N">없음</option>
						<option value="Y">있음</option>
					</select>
				</td>
			</tr>
      <tr>
         <td>최종학력</td>
         <td>
         	<select name="laststudy">
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
         <td>
         	<input type="text" name="major">
         </td>
      </tr>
      <tr>
         <td colspan="3" align="center">
            <input type="button" value="작성완료" class="bt" onclick="send()">
         </td>
      </tr>
		</table>
	</form>
	<footer></footer>
</body>
</html>