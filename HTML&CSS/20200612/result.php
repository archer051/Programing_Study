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
		.clear{
			clear:both;
		}
		.divimg{
			width:100px;height:110px;
			float:left;margin:10px;
		}
		.divimg img{
			width:100%;height:100%;
		}
		.divGraph{
			width:530px;height:30px;
			float:left;margin:10px;
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
	<?php
		$conn=mysqli_connect("localhost","root","autoset","testdb");
		$query1="select count(*) as total from vote2";
		$rs1=mysqli_query($conn,$query1);
		$row1=mysqli_fetch_array($rs1);
		$totalCount=$row1["total"];
		//이낙연 데이터
		$query2="select count(*) as lny from vote2 where people='이낙연'";
		$rs2=mysqli_query($conn,$query2);
		$row2=mysqli_fetch_array($rs2);
		$lnyCount=$row2["lny"];
		$lnyPer=round(($lnyCount/$totalCount)*100);
		//이재명 데이터
		$query3="select count(*) as ljm from vote2 where people='이재명'";
		$rs3=mysqli_query($conn,$query3);
		$row3=mysqli_fetch_array($rs3);
		$ljmCount=$row3["ljm"];
		$ljmPer=round(($ljmCount/$totalCount)*100);
		//유승민 데이터
		$query4="select count(*) as ysm from vote2 where people='유승민'";
		$rs4=mysqli_query($conn,$query4);
		$row4=mysqli_fetch_array($rs4);
		$ysmCount=$row4["ysm"];
		$ysmPer=round(($ysmCount/$totalCount)*100);
		//안철수 데이터
		$query5="select count(*) as acs from vote2 where people='안철수'";
		$rs5=mysqli_query($conn,$query5);
		$row5=mysqli_fetch_array($rs5);
		$acsCount=$row5["acs"];
		$acsPer=round(($acsCount/$totalCount)*100);
		//오세훈 데이터
		$query6="select count(*) as osh from vote2 where people='오세훈'";
		$rs6=mysqli_query($conn,$query6);
		$row6=mysqli_fetch_array($rs6);
		$oshCount=$row6["osh"];
		$oshPer=round(($oshCount/$totalCount)*100);
	?>
	<div id="box">
		<p style="font-size:1.7em"><b>차기대선, 당신의 선택은?</b></p>
		<div class="divimg">
			<img src="1.jpg">
		</div>
		<div class="divGraph">
			<div style="background-color:red;color:white;width:<?php echo $lnyPer ?>%;height:100%;float:left;">
				<?php echo "$lnyCount/$totalCount($lnyPer%)"; ?>
			</div>
		</div>
		<div class="clear"></div>
		<div class="divimg">
			<img src="2.jpg">
		</div>
		<div class="divGraph">
			<div style="background-color:blue;color:white;width:<?php echo $ljmPer ?>%;height:100%;float:left;">
				<?php echo "$ljmCount/$totalCount($ljmPer%)"; ?>
			</div>
		</div>
		<div class="clear"></div>
		<div class="divimg">
			<img src="3.jpg">
		</div>
		<div class="divGraph">
			<div style="background-color:pink;color:white;width:<?php echo $ysmPer ?>%;height:100%;float:left;">
				<?php echo "$ysmCount/$totalCount($ysmPer%)"; ?>
			</div>
		</div>
		<div class="clear"></div>
		<div class="divimg">
			<img src="4.jpg">
		</div>
		<div class="divGraph">
			<div style="background-color:gray;color:white;width:<?php echo $acsPer ?>%;height:100%;float:left;">
				<?php echo "$acsCount/$totalCount($acsPer%)"; ?>
			</div>
		</div>
		<div class="clear"></div>
		<div class="divimg">
			<img src="5.jpg">
		</div>
		<div class="divGraph">
			<div style="background-color:black;color:white;width:<?php echo $oshPer ?>%;height:100%;float:left;">
				<?php echo "$oshCount/$totalCount($oshPer%)"; ?>
			</div>
		</div>
	</div>
</form>
</body>
</html>