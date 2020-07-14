<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		*{
			margin: 0 auto;
			padding: 0;
		}
		#div1{
			width: 200px;
			height: 200px;
			border:2px solid #000;
			margin-top: 20px;
			/*
			border-radius: 20px;
			*/
			/*
			box-shadow: 수평 수직 번짐 색상
			box-shadow: 수평 수직 번짐 색상 inset
			*/
			/*box-shadow: -5px -5px 10px gray inset;
			margin-top: 20px;
			*/
		}
		#div2{
			width: 100px;
			height: 100px;
			margin-top: 50px;
			border:2px solid #000;
			padding: 10px; /* width, height가 10px씩 늘어남*/
		}
	</style>
</head>
<body>
	<div id="div1">
		<div id="div2">자식새끼</div>
	</div>
	
</body>
</html>