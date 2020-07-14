<?php
	session_start();
	$conn = mysqli_connect("127.0.0.1","root","autoset","testdb");
	// $query = "select * from salary;";
	$query = "select * from r_pay;";
	$rs = mysqli_query($conn,$query);
	$cnt = mysqli_num_rows($rs);
?>
<script type="text/javascript">
	function login() {
		// window.open("홈페이지파일","프로세스아이디개념(login.php파일열때는 login이라는 파라미터는 가능 하나 다른 test2.php 파일열때 두번째 파라미터 login을 하면 메모리 오류가 발생함","크기")
	window.open("login.php","login","width=300,height=150");
	}
</script>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>급여관리</title>
</head>
<body>
	<header>
	<?php if(isset($_SESSION["id"])) { ?>
		<div class="toplogin">
			<a href="javascript:logout()">Logout</a>&nbsp;|&nbsp;
			<a href="user_edit.php">Member edit</a>&nbsp;|&nbsp;
			<a href="#">Member Out</a>
		</div>
	<?php }else { ?>
		<div class="toplogin">
			<a href="javascript:login()">Login</a>&nbsp;|&nbsp;
			<a href="user_add.php">Sign up</a>&nbsp;|&nbsp;
			<a href="#">SearchID/PW</a>
		</div>
	<?php } ?>
	</header>
	<section>
		<table class="table_main">
			<tr>
				<td>사번</td>
				<td>이름</td>
				<td>직급</td>
				<td>추가수당</td>
				<td>총급여</td>
			</tr>
			<?php	while($row=mysqli_fetch_array($rs)) {	?>
			<tr>
				<td>
					<?php	echo $row["sawon_num"] ?>
				</td>
				<td>
					<?php	echo $row["sawon_name"] ?>
				</td>
				<td>
					<?php	echo $row["position"] ?>
				</td>
				<td>
					<?php	echo ($row["addcash"]/10000) ?>만원
				</td>
				<td>
					<?php	echo ($row["totalcash"]/10000) ?>만원
				</td>
			</tr>
			<?php } ?>
			<?php if(isset($_SESSION["id"])) { ?>
			<tr>
				<td colspan="5" align="center">
					<input type="button" value="추가" onclick="location.href='write.php'"  class="bt_main">
				</td>
			</tr>
			<?php } ?>
		</table>
	</section>
</body>
</html>
