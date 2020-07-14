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
			background-color: red;
			/*display: inline;*/
			display: inline-block;
			border-top-left-radius: 100px 50px;
		}
		#div2{
			width: 200px;
			height: 200px;
			background-color: green;
			/*display: inline;*/
			display: inline-block;
			border-bottom-right-radius: 50% 30%;
		}
		#div3{
			width: 200px;
			height: 200px;
			background-color: blue;
			/*display: inline;*/
			display: inline-block;
			border-top-right-radius: 50px 50px;
		}
		#block img{
			display: block;
			margin: 10px;
		}
	</style>
</head>
<body>
	<div style="width: 600px;">
		<div id="div1">1</div>
		<div id="div2">2</div>
		<div id="div3">3</div>
	</div>
	

</body>
</html>