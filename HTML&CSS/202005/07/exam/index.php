<?php
	session_start();
?>
<script type="text/javascript">
	function login() {
		// window.open("홈페이지파일","프로세스아이디개념(login.php파일열때는 login이라는 파라미터는 가능 하나 다른 test2.php 파일열때 두번째 파라미터 login을 하면 메모리 오류가 발생함","크기")
		window.open("login.php","login","width=500,height=150");
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
	<header>
		<div class="topmenu">
			<?php if(isset($_SESSION["id"])) { ?>
				<a href="logout.php">Logout</a>&nbsp;|&nbsp;
				<a href="join_edit.php">MemberEdit</a>&nbsp;|&nbsp;
				<a href="#">Member out</a>
			<?php }else { ?>
				<a href="javascript:login()">Login</a>&nbsp;|&nbsp;
				<a href="join.php">SignUp</a>&nbsp;|&nbsp;
				<a href="#">SearchID/PW</a>
			<?php } ?>
		</div>
	</header>
	<section>
			<?php if(isset($_SESSION["id"])) { ?>
				<input type="button" class="bt1" value="추가하기" onclick="">
			<?php }else { ?>

			<?php } ?>
			<?php if(isset($_SESSION["id"])) { ?>
				<input type="button" class="bt1" value="추가하기" onclick="">
			<?php }else { ?>

			<?php } ?>
	</section>
</body>
</html>
