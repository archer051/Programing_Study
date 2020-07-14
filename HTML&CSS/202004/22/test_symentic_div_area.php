<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			list-style: none;
			font-family: "맑은 고딕";
		}
		a{
			text-decoration: none;
			color: inherit;
		}
		header{
			width: 100%;
			height: 10%;
			background-color: black;
			color: white;
			position: absolute;
		}
			.logo{
				width: 30%;
				height: 10%;
				position: absolute;
				left: 0px;
			}
			nav{
				width: 70%;
				height: 10%;
				position: absolute;
				right: 0px;
			}
		aside-left{
			width: 10%;
			min-height: 80%;
			background-color: yellow;
			position: absolute;
			left: 0px;
			top: 10%;
		}
		section{
			width: 80%;
			min-height: 80%;
			background-color: green;
			position: absolute;
			left: 10%;
			top: 10%;
		}
			article-1{
				width: 30%;
				min-height: 30%;
				background-color: purple;
				left: 10%;
				top: 10%;
				position: absolute;
			}
			article-2{
				width: 30%;
				min-height: 30%;
				background-color: purple;
				right: 10%;
				top: 10%;
				position: absolute;	
						
			}
			article-3{
				width: 30%;
				min-height: 30%;
				background-color: purple;
				left: 10%;
				bottom: 10%;
				position: absolute;	
			}
			article-4{
				width: 30%;
				min-height: 30%;
				background-color: purple;
				right: 10%;
				bottom: 10%;		
				position: absolute;
			}
		aside-right{
			width: 10%;
			min-height: 80%;
			background-color: yellow;
			position: absolute;
			right: 0px;
			top: 10%;
		}
		footer{
			width: 100%;
			height: 10%;
			background-color: red;
			position: absolute;
			bottom: 0px;
		}
		
	</style>
</head>
<body>
	<header>
		<div class="logo">로고</div>
		<nav>네비게이션바</nav>	
	</header>
	<aside-left>왼쪽 어사이드</aside-left>
	<section>
		<article-1>첫번째 아티클</article-1>
		<article-2>두번째 아티클</article-2>
		<article-3>세번째 아티클</article-3>
		<article-4>네번째 아티클</article-4>
	</section>
	<aside-right>오른쪽 어사이드</aside-right>
	<footer>바닥글</footer>
</body>
</html>