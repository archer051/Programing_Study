<script language="javascript">
	function join() {
		if (frm1.name1.value == "") {
			alert("이름을 입력하세요");
			frm1.name1.focus();
			return false;
		}
		if (frm1.id.value == "") {
			alert("ID를 입력하세요");
			frm1.id.focus();
			return false;
		}
		if (frm1.pw_input.value == "") {
			alert("비밀번호를 입력하세요");
			frm1.pw_input.focus();
			return false;
		}
		if(frm1.pw_input.value != frm1.pw_output.value)
		{
			alert("비밀번호가 일치하지않습니다.");
			frm1.pw_input.value="";
			frm1.pw_output.value="";
			frm1.pw_input.focus();
			return false;	
		}
		document.frm1.submit();
	}
	function cancel() {
		frm1.name1.value="";
		frm1.id.value="";
		frm1.pw_input.value="";
		frm1.pw_output.value="";
		frm1.memo.value="";
		frm1.name1.focus();
		return false;
		document.frm1.submit();
	} 
</script>
<html>
<head>
	<meta charset="utf-8">
	<title>회원가입양식</title>
</head>
<body>
<form name="frm1" method="post" action="test02_ok.php">  
	<table border="1" align="center" cellpadding="10" cellspacing="0.5" 
	width="640" height="480">
		<tr>
			<td colspan="2" align="center" > 회원가입양식	</td>
		</tr>
		<tr>
			<td align="center" >이름</td>
			<td>
<input type="text" name="name1" size="20" maxlength="10">
			</td>
		</tr>
		<tr>
			<td align="center" >아이디</td>
			<td>
<input type="text" name="id" size="20" maxlength="16">
<input type="button" value="중복체크">
		</td>	
		</tr>
		<tr>
			<td align="center" >비밀번호</td>
			<td>
<input type="password" name="pw_input" size = 20 maxlength="16">
			</td>
		</tr>
		<tr>
			<td align="center">비밀번호확인</td>
			<td> 
<input type="password" name="pw_output" size = 20 maxlength="16">
			</td>
		</tr>
		<tr>
			<td align="center">관심지역</td>
			<td>
<input type="radio" name="rg1" value="서울/경기">서울/경기
<input type="radio" name="rg1" value="부산" checked>부산
<input type="radio" name="rg1" value="해외">해외
			</td>
		</tr>
		<tr>
			<td align="center">하고싶은말</td>
			<td>
<textarea name = "memo" rows = "5" cols = "60"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
<input type="button" value="가입" onclick="join()"> 
<input type="reset" value="취소">
			</td>
		</tr>
</form>	
</body>
</html>