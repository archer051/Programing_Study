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
		
		.div1{
			/*
			실체는 0,0 에있음
			
			*/
			position: absolute;
			width: 150px;
			height: 150px;
			background-color: red;
			top: 50px;
			left: 50px;
		}
		.div2{
			/**/
			width: 150px;
			height: 150px;
			background-color: green;
			
		}
		.div3{
			/**/
			position: relative;
			width: 150px;
			height: 150px;
			background-color: yellow;
			left: 100px;
			
		}
	</style>
</head>
<body>
	<div class="div1"></div>
	<div class="div2"></div>
	<div class="div3"></div>

</body>
</html>