<?php
	include "dbconn.php";
	$id=$_SESSION["id"];
	$query="select * from member where id = '$id'";
	$rs = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($rs);
?>
<script>
	function send(){
		// alert("1");
		
		if(frm1.pw1.value==""){
			alert("비밀번호를 입력하세요");
			frm1.pw1.focus();
			return false;
		}
		if(frm1.pw2.value==""){
			alert("비밀번호 확인을 입력하세요");
			frm1.pw2.focus();
			return false;
		}
		if(frm1.pw1.value != frm1.pw2.value){
			alert("비밀번호가 일치하지 않습니다.");
			frm1.pw2.select();
			return false;
		}
		if(frm1.name.value==""){
			alert("이름을 입력하세요");
			frm1.name.focus();
			return false;
		}
		if(frm1.hp1.value==""){
			alert("전화번호1을 입력해주세요");
			frm1.hp1.focus();
			return false;
		}
		if(frm1.hp2.value==""){
			alert("전화번호2을 입력해주세요");
			frm1.hp2.focus();
			return false;
		}
		if(frm1.hp3.value==""){
			alert("전화번호3을 입력해주세요");
			frm1.hp3.focus();
			return false;
		}
		if(frm1.email1.value==""){
			alert("이메일을 입력해주세요");
			frm1.email1.focus();
			return false;
		}
		// alert("end");
		document.frm1.submit();
	}
	function idcheck(){
		if(frm1.id.value==""){
			alert("아이디를 입력하세요");
			frm1.id.focus();return false;
		}
		window.open("idcheck.php?id="+frm1.id.value,"zzz","width=400,height=150");
	}
</script>
<html>
<head>
	<meta charset="utf-8">
	<title>국내 유일의 50년전통 여행사</title>
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
<form name="frm1" method="post" action="member_edit_ok.php">
	<br><br><br>
	<table class="table1" width="600">
		<tr>
			<td colspan="2" align="center" style="font-size:1.0em;font-weight:bold;padding:7px;">
			회원정보 수정
			</td>
		</tr>
		<tr>
			<td align="right">아이디</td>
			<td>
			<input type="text" name="id" value="<?php echo $row["id"] ?>" readonly>
			<font color="red">[수정불가]</font>
			<!-- <input type="button" value="중복확인" class="bt" onclick="idcheck()"> -->
			</td>
		</tr>
		<tr>
			<td align="right">비밀번호</td>
			<td>
				<input type="password" name="pw1" value="<?php echo $row["pw"] ?>"><font color="red">(6자리이상 입력!)</font></td>
		</tr>
		<tr>
			<td align="right">비밀번호 확인</td>
			<td><input type="password" name="pw2"></td>
		</tr>
		<tr>
			<td align="right">이름</td>
			<td>
				<input type="text" name="name" value="<?php echo $row["name"] ?>">
			</td>
		</tr>
		<?php
		// $hp=explode("-",010-3333-333);
		// $hp[0]="010";
		// $hp[1]="3333";
		// $hp[2]="3333";
		$hp=explode("-",$row["hp"]);
		;
		 ?>
		<tr>
			<td align="right">연락처</td>
			<td>
			<input type="text" name="hp1" size="5" maxlength="3" value="<?php echo $hp[0] ?>"> -
			<input type="text" name="hp2" size="5" maxlength="4"  value="<?php echo $hp[1] ?>"> -
			<input type="text" name="hp3" size="5" maxlength="4"  value="<?php echo $hp[2] ?>">
			</td>
		</tr>
		<tr>
			<?php
			$email=explode("@",$row["email"]);
			// $email[0]="asdfasdf";
			// $email[1]="naver.com";
			 ?>
			<td align="right">이메일</td>
			<td>
			<input type="text" name="email1" size="15" value="<?php echo "$email[0]" ?>">
			@
			<select name="email2">
				<option value="naver.com"
				<?php
				if($email[1]== "naver.com") {
					?>
					selected
				<?php }
				?>
				>naver.com</option>
				<option value="daum.net"
				<?php
				if($email[1] == "daum.net") {
					?>
				selected
				<?php
				}
				 ?>
				 >daum.net</option>
				<option value="gmail.com"
				<?php
				if($email[1]=="gmail.com") {
					?>
				selected
				<?php
				}
				 ?>
				>gmail.com</option>
			</select>
			</td>
		</tr>
		<tr>
			<td align="right">성별</td>
			<td>
					<input type="radio" name="gender" value="m"
					<?php if($row["gender"] == "m") { ?>
					checked
				<?php } ?>
					>남성
					<input type="radio" name="gender" value="f"
					<?php
					if($row["gender"] == "f") {
						?>
					checked
				<?php } ?>
					>여성
			</td>
		</tr>
		<tr>
			<td align="right">취미</td>
			<td>
			<input type="checkbox" name="hobby1" value="여행"
			<?php
			if($row["hobby1"] != "")
			{
				?>
			checked
		<?php } ?>
			>여행
			<input type="checkbox" name="hobby2" value="등산"
			<?php if($row["hobby2"] != "")
			{ ?>
			checked
		<?php } ?>
			>등산
			<input type="checkbox" name="hobby3" value="낚시"
			<?php if($row["hobby3"] != "")
			{ ?>
			checked
		<?php } ?>
			>낚시
			<input type="checkbox" name="hobby4" value="영화감상"
			<?php if($row["hobby4"] != "")
			{ ?>
			checked
		<?php } ?>
			>영화감상
			<input type="checkbox" name="hobby5" value="음악감상"
			<?php if($row["hobby5"] != "")
			{ ?>
			checked
		<?php } ?>
			>음악감상
			</td>
		</tr>
		<tr>
			<td align="right">남기는 말</td>
			<td>
			<textarea name="comment" rows="5" cols="60"><?php echo $row["comment"] ?></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
			<input type="button" class="bt" value="수정 완료" onclick="send()">
			&nbsp;
			<input type="reset" class="bt" value="새로 작성">
			</td>
		</tr>
	</table><br><br><br>
</form>
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
