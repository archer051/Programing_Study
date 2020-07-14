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
			position: relative;
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
		.bar3_1{
			width: 150px;
			height: 20px;
			background-color: green;
			position: absolute;
		}
		.bar3_2{
			width: 20px;
			height: 150px;
			background-color: green;
			position: absolute;
		}
		/* ㄹ */
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
		/* ㅅ */
		.bar7_1{
			width: 20px;
			height: 75px;
			background-color: green;
			position: absolute;
		}
		/* ㅇ */
		.bar8_1{
			width: 150px;
			height: 150px;
			background-color: green;
			position: absolute;
			border-radius: 100%;
		}
		.bar8_2{
			width: 130px;
			height: 130px;
			background-color: white;
			position: absolute;
			border-radius: 100%;
			left: 10px;
			top: 10px;
		}
		/* ㅈ */
		.bar9_1{
			width: 125px;
			height: 20px;
			background-color: green;
			position: absolute;
		}
		/* ㅎ */
		.bar10_1{
			width: 75px;
			height: 20px;	
			background-color: green;
			position: absolute;
		}
		.bar10_2{
			width: 100px;
			height: 100px;
			background-color: green;
			position: absolute;
			border-radius: 100%;
		}
		.bar10_3{
			width: 80px;
			height: 80px;
			background-color: white;
			position: absolute;
			border-radius: 100%;
		}
	</style>
</head>
<body>
	<div id="square1"> <!-- ㄱ -->
		<div class="bar1_1"></div>
		<div class="bar1_2"></div>
	</div>
	<div id="square1"> <!-- ㄴ -->
		<div class="bar2_1"></div>
		<div class="bar2_2"></div>
	</div>
	<div id="square1"> <!-- ㄷ -->
		<div class="bar3_1"></div>
		<div class="bar3_2"></div>
		<div class="bar3_1" style="top: 132px;"></div>
	</div>
	<!-- ㄹ -->
	<div id="square1"> 
		<div class="bar4_1"></div>
		<div class="bar4_2" style="left: 130px;">
		</div>
		<div class="bar4_1"></div>
		<div class="bar4_2"></div>
		<div class="bar4_1" style=""></div>
	</div> 
	<!-- ㅁ -->
	<div id="square1"> 
		<div class="bar5_1"></div>
		<div class="bar5_2"></div>
		<div class="bar5_2" style="left: 130px;"></div>
		<div class="bar5_1" style="top: 130px;"></div>
	</div>
	<!-- ㅂ -->
	<div id="square1"> 
		<div class="bar6_2"></div>
		<div class="bar6_2" style="left: 130px;"></div>
		<div class="bar6_1" style="top: 50px;"></div>
		<div class="bar6_1" style="top: 130px;"></div>
	</div>
	<!-- ㅅ -->
	<div id="square1"> 
		<div class="bar7_1" style="top: 10px; left: 65px;"></div>
		<div class="bar7_1" style="top: 80px; left: 35px; transform: rotate(45deg);"></div>
		<div class="bar7_1" style="top: 80px; right: 35px; transform: rotate(-45deg);"></div>
	</div>
		
	<!-- ㅇ -->
	<div id="square1"> 
		<div class="bar8_1"></div>
		<div class="bar8_2"></div>
	</div>
	<!-- ㅈ -->
	<div id="square1">
		<div class="bar9_1" style="left: 12px;"></div>
		<div class="bar7_1" style="top: 10px; left: 65px;"></div>
		<div class="bar7_1" style="top: 80px; left: 35px; transform: rotate(45deg);"></div>
		<div class="bar7_1" style="top: 80px; right: 35px; transform: rotate(-45deg);"></div>
	</div>
	<!-- ㅊ -->
	<div id="square1">
		<div class="bar9_1" style="left: 12px; top: 30px;"></div>
		<div class="bar7_1" style="top: 10px; left: 65px;"></div>
		<div class="bar7_1" style="top: 80px; left: 35px; transform: rotate(45deg);"></div>
		<div class="bar7_1" style="top: 80px; right: 35px; transform: rotate(-45deg);"></div>
	</div>
	<!-- ㅋ -->
	<div id="square1">
		<div class="bar1_1"></div>
		<div class="bar1_1" style="top: 50px;"></div>
		<div class="bar1_2"></div>
	</div>
	<!-- ㅌ -->
	<div id="square1">
		<div class="bar3_1"></div>
		<div class="bar3_2"></div>
		<div class="bar3_1" style="top: 132px;"></div>
		<div class="bar3_1" style="top: 60px;"></div>
	</div>
	<!-- ㅍ -->
	<div id="square1">
		<div class="bar5_1"></div>
		<div class="bar5_2" style="left: 30px;"></div>
		<div class="bar5_2" style="right: 30px;"></div>
		<div class="bar5_1" style="top: 130px;"></div>
	</div>
	<!-- ㅎ -->
	<div id="square1">
		<div class="bar10_1" style="left: 38px;"></div>
		<div class="bar5_1" style="top: 25px;"></div>
		<div class="bar10_2" style="left: 25px; top: 50px;"></div>
		<div class="bar10_3" style="left: 35px; top: 60px;"></div>
	</div>

</body>
</html>