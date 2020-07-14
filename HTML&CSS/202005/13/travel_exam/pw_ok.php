<?php
	include "dbconn.php";
	$name=$_POST["name2"];
	$email=$_POST["email2"];
	$id=$_POST["id"];
	$query=	"
	select
		*
	from
		member
	where
		name = '$name'
	and
		email = '$email'
	and
		id = '$id';
	";
	$rs=mysqli_query($conn,$query);
	if(!mysqli_num_rows($rs)) {
		?>
		<script>
			alert("이름 또는 이메일 또는 아이디가 올바르지 않습니다.");
			// 뒤로가기
			history.back();
		</script>
<?php
	}else {
		$row=mysqli_fetch_array($rs);
		$pw="패스워드는 ".$row["pw"]."입니다";
		?>
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
	<br><br><br>
	<div style="
	width:300px;
	height:150px;
	border-top:3px solid #4298cc;
	border-bottom:3px solid #4298cc;
	background-color:#dde7dd;
	padding:30px;
	font-size:0.9em;
	color:#666;">
		<?php echo $pw ?><br>
	</div>
	<div style="
	margin-top: 10px;
	width:150px;
	text-align: center;
	height:50px;
	line-height: 50px;
	border:3px solid #4298cc;
	background-color:#dde7dd;
	/* padding: 30px; */
	font-size:1.6em;
	color:#666;
	font-weight: bold;
	">
	<a href="login.php">로그인 가기</a>
	</div>
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
<?php } ?>
