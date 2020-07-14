<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		#div1{
			width: 300px;
			height: 1500px;
			border: 1px solid #000;
		}
		#div2{
			width: 100px;
			height: 100px;
			background-color: red;
		}
		#div3{
			width: 100px;
			height: 250px;
			border:1px solid #00ff00;
			position: fixed;
			right: 100px;
			top: 100px;
			transform: rotate(-20deg);
		}
		#div4{
			width: 50px;
			height: 50px;
			color: white;
			background-color: red;
			position: fixed;
			right: 100px;
			bottom: 100px;
			cursor: pointer;
			text-align: center;
			line-height: 50px;
			border-radius: 100%;
		}
	</style>
</head>
<body>
	<div id="div1">
		<div id="div2"></div>
	</div>
	<div id="div3">빠른 메뉴</div>
	<div id="div4">Top</div>

</body>
</html>