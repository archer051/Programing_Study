<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<title>국내 유일의 50년전통 여행사</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="script.js" defer="defer"></script>
	<!-- <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script> -->
	<!-- 
	<script src="script.js" defer="defer"></script> 
	defer 사용 이유 : 
	<script async src="myAsyncScript.js" onload="myInit()"></script>
	<script defer src="myDeferScript.js" onload="myInit()"></script>
위와 같이 async 혹은 defer 된 스크립트는 문서 parsing 작업의 중단 없이 동시에 내려받게 되며, 선택적으로 onload handler를 지정해서 일반적인 초기화 작업도 진행할 수 있다.
둘의 차이를 결정짓는 중요한 것은 바로 스크립트가 실행되는 시점이 서로 다르다는 것인데, async script는 window의 load event 전 내려받는 즉시 바로 실행되는 데 반해 defer script는 문서의 parsing 작업이 끝난 후 DOMContentLoaded event 전에 문서에 삽입된 순서에 따라 실행된다.
참조주소:https://appletree.or.kr/blog/web-development/javascript/script-%ED%83%9C%EA%B7%B8%EC%9D%98-async%EC%99%80-defer-%EC%86%8D%EC%84%B1/
	-->
	<!-- <script src="script.js" defer="defer"></script> -->
</head>
<body>
	<header>
		<div class="adminlogin">관리자로그인</div>
		<div class="logo">
			<a href="index.php">
				<img src="logo/logo.png"> <!-- 522px*248px -->
			</a>
		</div>
	</header>
	<nav>
		<ul class="menu">
			<li>
				<a href="#">여행가이드 소개</a>
			</li>
			<li>
				<a href="#">국내여행지</a>
				<ul class="submenu">
		            <li><a href="#">경기/강원도</a></li>
		            <li><a href="#">경상도</a></li>
		            <li><a href="#">충청도</a></li>
		            <li><a href="#">전라도</a></li>
		            <li><a href="#">제주도</a></li>
         		</ul>
			</li>
			<li>
				<a href="#">해외여행지</a>
				<ul class="submenu">
					<li><a href="#">동남아시아</a></li>
					<li><a href="#">유럽</a></li>
					<li><a href="#">남태평양</a></li>
					<li><a href="#">오세아니아</a></li>
					<li><a href="#">북중미</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	<div id="wrap">
		<div id="imgslide">
			<div class="welcome">
				여행가이드에 오신것을 환영합니다.
			</div>
			<div class="imgs">
				<img src="images/slide/images(1).jpg">
				<img src="images/slide/images(2).jpg">
				<img src="images/slide/images(3).jpg">
				<img src="images/slide/images(4).jpg">
				<img src="images/slide/images(5).jpg">
			</div>
		</div>
		<div id="content"></div>
	</div>
	<footer></footer>
</body>
</html>