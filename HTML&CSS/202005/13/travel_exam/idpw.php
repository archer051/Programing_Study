<?php
	include "dbconn.php";
?>
<script>
	function send1() {
		if(frm1.name1.value=="")
		{
			alert("이름을 입력하세요");
			frm1.name1.focus();
			return false;
		}
		if(frm1.email1.value=="")
		{
			alert("이메일을 입력하세요");
			frm1.email1.focus();
			return false;
		}
		document.frm1.submit();
	}
	function send2() {
		if(frm2.name2.value=="")
		{
			alert("이름을 입력하세요");
			frm2.name2.focus();
			return false;
		}
		if(frm2.email2.value=="")
		{
			alert("이메일을 입력하세요");
			frm2.email2.focus();
			return false;
		}
		if(frm2.id.value=="")
		{
			alert("아이디를 입력하세요");
			frm2.id.focus();
			return false;
		}
		document.frm2.submit();
	}
</script>
<html>
<head>
	<meta charset="utf-8">
	<title>국내 유일의 50년전통 여행사</title>
	<style>
		#id_subject,#pw_subject
		{
			width: 200px;
			padding: 5px;
			font-size: 0.9em;
			background: #dde7dd;
			cursor: pointer;
		}
		#id_content,#pw_content
		{
			width: 400px;
			display: none;
		}
	</style>
	<link rel="stylesheet" href="style.css">
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<script src="script.js" defer="defer"></script>
</head>
<body>
<header>
	<div class="admin">
	<?php if(isset($_SESSION["id"])){ ?>
	<a href="logout.php">Logout</a>
	&nbsp;|&nbsp;
	<a href="member_edit.php">Edit</a>
	&nbsp;|&nbsp;
	<a href="withdrawal.php">Withdrawal</a>
	<?php }else{ ?>
	<a href="javascript:login()">Login</a>
	&nbsp;|&nbsp;
	<a href="member.php">Sign up</a>
	&nbsp;|&nbsp;
	<a href="idpw.php">Search Id/Pw</a>
	<?php } ?>
	</div>
	<div class="logo">
		<a href="index.php">
		<img src="logo/logo.png">
		</a>
	</div>
</header>
<nav>
	<ul class="menu">
		<li><a href="intro.php">여행가이드 소개</a></li>
		<li><a href="#">국내여행지</a>
			<ul class="submenu">
			<li><a href="kk.php">경기/강원도</a></li>
			<li><a href="ks.php">경상도</a></li>
			<li><a href="cc.php">충청도</a></li>
			<li><a href="jr.php">전라도</a></li>
			<li><a href="jj.php">제주도</a></li>
			</ul>
		</li>
		<li><a href="#">해외여행지</a>
			<ul class="submenu">
			<li><a href="asia.php">동남아시아</a></li>
			<li><a href="europe.php">유럽</a></li>
			<li><a href="pacific.php">남태평양</a></li>
			<li><a href="oceania.php">오세아니아</a></li>
			<li><a href="america.php">북중미</a></li>
			</ul>
		</li>
	</ul>
</nav>
<div id="wrap">
	<br><br><br>
	<table class="table1" width="400">
	<!-- 제이쿼리 탭
	id_subject를 눌렀을 떄
	id_content:block;
	pw_content:none;

	pwd_subject를 눌렀을 떄
	id_content:none;
	pw_content:block; -->
		<tr>
			<th>
				<div id="id_subject">
					ID 찾기
				</div>
			</th>
			<th>
				<div id="pw_subject">
					PW 찾기
				</div>
			</th>
			<tr>
				<td colspan="2">
					<form name="frm1" method="post" action="id_ok.php">
					<div id="id_content">
						<table style="font-size:1.0em;color#666;width:100%;border-collapse:collapse;">
							<tr>
								<td>이름</td>
								<td>
									<input type="text" name="name1" size="20">
								</td>
							</tr>
							<tr>
								<td>이메일</td>
								<td>
									<input type="text" name="email1" size="30">
								</td>
							</tr>
							<tr>
								<td colspan="2" align="center">
									<input type="button" class="bt" value="ID 찾기" onclick="send1()">
								</td>
							</tr>
						</table>
					</div>
					</form>
					<form name="frm2" method="post" action="pw_ok.php">
					<div id="pw_content">
						<table style="font-size:1.0em;color#666;width:100%;border-collapse:collapse;">
							<tr>
								<td>이름</td>
								<td>
									<input type="text" name="name2" size="20">
								</td>
							</tr>
							<tr>
								<td>이메일</td>
								<td>
									<input type="text" name="email2" size="30">
								</td>
							</tr>
							<tr>
								<td>아이디</td>
								<td>
									<input type="text" name="id" size="20">
								</td>
							</tr>
							<tr>
								<td colspan="2" align="center">
									<input type="button" class="bt" value="PW 찾기" onclick="send2()">
								</td>
							</tr>
						</table>
					</div>
				</form>
				</td>
			</tr>
		</tr>
	</table>
	<br><br><br>

</div><!--wrap요소의 마지막-->
<footer>
	<div style="width:1000px">
		<div class="foot_left">
		<a href="email.php">이메일 무단수집거부</a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="policy.php">개인정보 처리방침</a>
		</div>
		<div class="foot_right">
		<p style="margin-top:10px;margin-left:70px;line-height:25px;">
		상호명:여행을 사랑하는 사람들(주)<br>
		대표자:홍길동<br>
		개인정보책임자:유관순<br>
		상담전화:1588-9000<br>
		주소:부산광역시 해운대구 우동 정릉빌딩 503호
		</p>
		</div>
	</div>
</footer>
</body>
</html>
