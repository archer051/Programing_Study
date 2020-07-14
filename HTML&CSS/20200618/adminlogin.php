<!DOCTYPE html>
<script>
	function send(){
		document.frm1.submit();
	}
</script>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>ADMIN LOGIN</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form name="frm1" method="post" action="login_ok.php">
		<table class="login_table" width="250">
			<tr>
				<td colspan="2" align="center"><font color="gray"><b>관리자 로그인</b></font></td>
			</tr>
			<tr>
				<th>ID:</th>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<th>PW:</th>
				<td><input type="password" name="pw"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" class="bt1" value="LOGIN"></td>
			</tr>
		</table>
	</form>
	<footer>  
    <div class="leftfooter">
      <p>
        (주) 한마음<br>
        건물명: 부산 광역시 사직동 금광빌딩 3층<br>
        사업자번호: 110-25-6684  <a href="#">(사업자 정보확인)</a>
      </p>
    </div>
    <div class="rightfooter">
      <P>
        대표전화:051-224-5588<br>
        대표이메일:dldlsghks@naver.com
      </P>
    </div>
  </footer>
</body>
</html>