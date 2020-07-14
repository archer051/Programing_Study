<?php
	include "dbconn.php";
	$name=$_POST["name2"];
	$email=$_POST["email2"];
	$id=$_POST["id"];
	$query="select * from member where name='$name' and email='$email' and id='$id'";
	$rs=mysqli_query($conn,$query);
	if(!mysqli_num_rows($rs)){
		?>
		<script>
			alert("이름 혹은 이메일 혹은 아이디가 올바르지 않습니다.");
			history.back();
		</script>
		<?php
	}else{
	$row=mysqli_fetch_array($rs);
	$pw="패스워드는 ".$row["pw"]."입니다.";
?>
<html>
<head>
	<meta charset="utf-8">
	<title>20200615</title>
	<link rel="stylesheet" href="style.css">
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<script src="script.js" defer="defer"></script>
</head>
<body>
	<header>
	 <div class="login">
			<?php if(isset($_SESSION["id"])){
				?>
			 <a href="logout.php">LOGOUT</a>&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href="member_edit.php">EDIT</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<?php }else
				{ ?>
					<a href="javascript:winOpen()">LOGIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="join.php">JOIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="idpw.php">Id/Pw</a>
			<?php } ?>
		</div>
		<div class="gnb_menu"></div>
		<div class="logo">
			<a href="index.php">
				<img src="logo/LOGO.jpg">
			</a>
		</div>
		<nav>
		<?php
			$query="select * from menu";
			$rs=mysqli_query($conn, $query);
		?>
			<ul class="menu">
			<?php
			while($row=mysqli_fetch_array($rs)) {
			?>
				<li>
					<a href="store.php?code=<?php echo $row["code"]; ?>">
						<?php echo $row["name"]; ?>
					</a>
					<ul class="submenu">
					<?php
						$pcode=$row["code"];
						$query2="select * from submenu where pcode = '$pcode'";
						$rs2=mysqli_query($conn,$query2);
						while($row2=mysqli_fetch_array($rs2)) {
							$code=$row2["code"];
					?>
						<li>
							<a href="store.php?code=<?php echo $code; ?>">
								<?php echo $row2["name"]; ?>
							</a>
						</li>
						<?php
						}
						?>
					</ul>
				</li>
			<?php
			}
			?>
		</nav>
	</header>
<div id="wrap" style="min-height: 200px;">
	<br><br><br>
	<div style="width:300px; height:150px; border-top:3px solid#4298cc; border-bottom:3px solid #4298cc; background-color:#dde7dd; padding:30px; font-size:0.9em; color:#666;">
	<?php echo $pw ?></div>
	<br><br><br>
</div>
<footer>
	Copyright &#169;shoppingmall.com All right reserved since 2020 by webeditor
</footer>
</body>
</html>
<?php } ?>
