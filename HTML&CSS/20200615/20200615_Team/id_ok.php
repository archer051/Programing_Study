<?php
	include "dbconn.php";
	$name=$_POST["name1"];
	$email=$_POST["email1"];
	$query="select * from member where name='$name' and email='$email'";
	$rs=mysqli_query($conn,$query);
	if(!mysqli_num_rows($rs)){
		?>
		<script>
			alert("이름 혹은 이메일이 올바르지 않습니다.");
			history.back();
		</script>
		<?php
	}else{
	$row=mysqli_fetch_array($rs);
	$id="아이디는 ".$row["id"]."입니다.";
?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="responsive.css">
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<script src="script.js" defer="defer"></script>
</head>
<body>
<header>
	 <div class="admin">
			<?php if(isset($_SESSION["id"])) { ?>
			<a href="logout.php">Logout</a>&nbsp;|&nbsp;
			<a href="member_edit.php">Edit</a>&nbsp;|&nbsp;
			<a href="withdrawal.php">withdrawal</a>
			<?php }else {?>
			<a href="javascript:login()">Login</a>&nbsp;|&nbsp;
			<a href="join.php">Join</a>&nbsp;|&nbsp;
			<a href="idpw.php">Id/Pw</a>
     <?php } ?>
		</div>
      <a href="responsive.php" class="logo">
        <h1>LOGO</h1>
      </a>
      <a href="#" class="gnb_menu">menu</a>
		<nav>
			<a href="#">MENU1</a>
			<a href="#">MENU2</a>
			<a href="#">MENU3</a>
			<a href="#">MENU4</a>
			<a href="#">MENU5</a>
			<a href="#">MENU6</a>
			<a href="#">MENU7</a>
			<a href="#">MENU8</a>
     </nav>
</header>

<div id="wrap"style="min-height: 200px;">
	<br><br><br>
	<div style="width:300px; height:150px; border-top:3px solid#4298cc; border-bottom:3px solid #4298cc; background-color:#dde7dd; padding:30px; font-size:0.9em; color:#666;">
	<?php echo $id ?></div>
	<br><br><br>


</div><!--wrap요소의 마지막-->
<footer>
	Copyright &#169;shoppingmall.com All right reserved since 2020 by webeditor
</footer>
</body>
</html>
<?php } ?>
