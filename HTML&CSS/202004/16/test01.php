<script language="javascript">
	function send() {
		if (frm1.name1.value == "") {
			alert("이름을 입력하세요");
			frm1.name1.focus();
			return false;
		}
		if (frm1.memo.value == "") {
			alert("내용을 입력하세요");
			frm1.memo.focus();
			return false;
		}
		if (frm1.pw.value == "") {
			alert("비밀번호를 입력하세요");
			frm1.pw.focus();
			return false;
		}
		document.frm1.submit();
	} 
</script>
<html>
<head>
	<meta charset="utf-8">
	<title>HTML 폼태그 교육</title>
</head>
<body>
<form name="frm1" method="post" action="test01_ok.php">  
	<table border="1" align="center" cellpadding="10" cellspacing="0.5">
		<tr>
			<td>text태그사용법</td>
			<td>
<input type="text" name="name1" size="18" maxlength="10">
			</td>
		</tr>
		<tr>
			<td>textarea태그</td>
			<td>
<textarea name = "memo" rows = "5" cols = "60"></textarea>
			</td>
		</tr>
		<tr>
			<td>Password태그</td>
			<td>
<input type="paasword" name="pw" size = "125">
			</td>
		</tr>
		<tr>
			<td>Hidden태그</td>
			<td>
<input type="hidden" name="hid">
			</td>
		</tr>
		<tr>
			<td>radio</td>
			<td>
<input type="radio" name="gender" value="M">남성
<input type="radio" name="gender" value="F" checked>여성
			</td>
		</tr>
		<tr>
			<td>Select 개체</td>
			<td>
<select name="grade">
	<option value = "대학원졸">대학원졸</option>
	<option value = "대졸">대졸</option>
	<option value = "초대졸">초대졸</option>
	<option value = "고졸">고졸</option>
	<option value = "중졸">중졸</option>
</select>
			</td>
		</tr>
		<tr>
			<td>checkbox개체</td>>
			<td>
<input type="checkbox" name="hobby0" value="Travel">없음
<input type="checkbox" name="hobby1" value="Travel">여행
<input type="checkbox" name="hobby2" value="Hiking">등산
<input type="checkbox" name="hobby3" value="Fishing">낚시
<input type="checkbox" name="hobby4" value="Music">음악
			</td>
		</tr>
		<tr>
			<td>file 개체</td>
			<td>
<input type="file" name="fname">
			</td>
		</tr>
		<tr>
			<td>submit 개체</td>
			<td>
<input type="submit" value ="제출하기">
			</td>
		</tr>
		<tr>
			<td>button 개체</td>
			<td>
<input type="button" value="작성완료" onclick="send()">
			</td>
		</tr>
		<tr>
			<td>reset 개체</td>
			<td>
<input type="reset" value="">
			</td>
		</tr>
	
</form>
</body>
</html>