<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
		/* */
		*{
			margin: 0;
			padding: 0;
		}
		/* ㄱ */
		#square1{
			width: 150px;
			height: 150px;
			border:1px solid #000;
			display: inline-block;
		}
		.bar1_1{
			position: absolute;
			width: 150px;
			height: 20px;
			background-color: green;
		}
		.bar1_2{
			position: relative;
			width: 20px;
			height: 150px;
			background-color: green;
			left: 130px;
		}
		/* ㄴ */
		#square2{
			width: 150px;
			height: 150px;
			border:1px solid #000;
			display: inline-block;
		}
		.bar2_1{
			position: absolute;
			width: 20px;
			height: 150px;
			background-color: green;
		}
		.bar2_2{
			position: relative;
			width: 150px;
			height: 20px;
			background-color: green;
			top:130px;
		}
		/* ㄷ */
		#square3{
			width: 150px;
			height: 150px;
			border:1px solid #000;
			display: inline-block;
		}
		.bar3_1{
			position: absolute;
			width: 150px;
			height: 20px;
			background-color: green;
		}
		.bar3_2{
			position: absolute;
			width: 20px;
			height: 150px;
			background-color: green;
		}
		/* ㄹ */
		#square4{
			width: 150px;
			height: 150px;
			border:1px solid #000;
			display: inline-block;
		}
		.bar4_1{
			position: relative;
			width: 150px;
			height: 20px;
			background-color: green;
		}
		.bar4_2{
			position: relative;
			width: 20px;
			height: 45px;
			background-color: green;
		}
		/* ㅁ */
		#square5{
			width: 150px;
			height: 150px;
			border:1px solid #000;
			display: inline-block;
			position: relative;
		}
		.bar5_1{
			width: 150px;
			height: 20px;
			background-color: green;
			position: absolute;
		}
		.bar5_2{
			width: 20px;
			height: 150px;
			background-color: green;
			position: absolute;
		}
		/* ㅂ */
		#square6{
			width: 150px;
			height: 150px;
			border:1px solid #000;
			display: inline-block;
			position: relative;
		}
		.bar6_1{
			width: 150px;
			height: 20px;
			background-color: green;
			position: absolute;
		}
		.bar6_2{
			width: 20px;
			height: 150px;
			background-color: green;
			position: absolute;
		}
	</style>
</head>
<body>
	<div id="square1"> <!-- ㄱ -->
		<div class="bar1_1"></div>
		<div class="bar1_2"></div>
	</div>
	<div id="square2"> <!-- ㄴ -->
		<div class="bar2_1"></div>
		<div class="bar2_2"></div>
	</div>
	<div id="square3"> <!-- ㄷ -->
		<div class="bar3_1"></div>
		<div class="bar3_2"></div>
		<div class="bar3_1" style="top: 132px;"></div>
	</div>
	<!-- ㄹ -->
	<div id="square4"> 
		<div class="bar4_1"></div>
		<div class="bar4_2" style="left: 130px;">
		</div>
		<div class="bar4_1"></div>
		<div class="bar4_2"></div>
		<div class="bar4_1" style=""></div>
	</div> 
	<!-- ㅁ -->
	<div id="square5"> 
		<div class="bar5_1"></div>
		<div class="bar5_2"></div>
		<div class="bar5_2" style="left: 130px;"></div>
		<div class="bar5_1" style="top: 130px;"></div>
	</div>
	<!-- ㅂ -->
	<div id="square5"> 
		<div class="bar6_2"></div>
		<div class="bar6_2" style="left: 130px;"></div>
		<div class="bar6_1" style="top: 50px;"></div>
		<div class="bar6_1" style="top: 130px;"></div>
		
	</div>

</body>
</html>