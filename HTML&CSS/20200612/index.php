<?php
	session_start();
?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
		*{
			margin:0 auto;
			padding:0;
			list-style:none;
			font-family:"맑은 고딕";
		}
		a{
			text-decoration:none;
			color:inherit;
		}
		#box{
			width:700px;height:700px;
			margin-top:20px;
			text-align:center;
		}
		.box1{
			width:700px;margin-top:20px;
			font-weight:bold;
			font-size:1.2em;
		}
		.imgbox{
			width:120px;height:120px;
			padding:10px;float:left;
			text-align:center;
		}
		.imgbox img{
			width:100%;height:100%;
		}
		.bt{
			border:none;
			border-radius:10px;
			background-color:#333;
			color:#fff;
			font-size:1em;
			font-weight:bold;
			padding:5px;
		}
		.bt:hover{
			opacity:0.5;
			cursor:pointer;
		}
		#login{
			width:700px;height:50px;
			text-align:right;
			margin-top:20px;
		}
	</style>
	<script>
		function login(){
			window.open("login.php","login","width=400,height=200");
		}
	</script>
</head>
<body>
	<form name="frm1" method="post" action="vote.php">
	<div id="login">
		<?php if(isset($_SESSION["id"])){ ?>
			<a href="logout.php">Logout</a>
		<?php }else{ ?>
			<a href="javascript:login()">Login</a>
		<?php } ?>
	</div>
	<div id="box">
		<p style="font-size:1.7em"><b>차기대선, 당신의 선택은?</b></p>
		<div class="box1">
			<div class="imgbox">
				<img src="1.jpg">
			</div>
			<div class="imgbox">
				<img src="2.jpg">
			</div>
			<div class="imgbox">
				<img src="3.jpg">
			</div>
			<div class="imgbox">
				<img src="4.jpg">
			</div>
			<div class="imgbox">
				<img src="5.jpg">
			</div>
		</div>
		<div class="box1">
			<input type="radio" name="people" value="이낙연">이낙연&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="people" value="이재명">이재명&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="people" value="유승민">유승민&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="people" value="안철수">안철수&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="people" value="오세훈">오세훈
		</div>
		<div class="box1">
			<?php if(isset($_SESSION["id"])){ ?>
				<input type="submit" value="투표하기" class="bt">&nbsp;&nbsp;
				<input type="button" value="결과보기" class="bt" onclick="location.href='result.php'">
			<?php }else{ ?>
				<input type="button" value="투표하기" class="bt" onclick="javascript:alert('로그인 후 투표가능합니다.')">&nbsp;&nbsp;
				<input type="button" value="결과보기" class="bt" onclick="javascript:alert('로그인 후 결과보기가 가능합니다.')">
			<?php } ?>
		</div>
	</div>
</form>
</body>
</html>