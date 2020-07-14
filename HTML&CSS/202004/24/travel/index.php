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
		<div class="adminlogin">
			<a href="#">
				관리자로그인		
			</a>
		</div>
		<div class="logo">
			<a href="index.php">
				<img src="logo/logo.png"> <!-- 522px*248px -->
			</a>
		</div>
	</header>
	<nav>
		<ul class="menu">
			<li>
				<a href="intro.php">여행가이드 소개</a>
			</li>
			<li>
				<a href="#">국내여행지</a>
				<ul class="submenu">
		            <li><a href="kk.php">경기/강원도</a></li>
		            <li><a href="ks.php">경상도</a></li>
		            <li><a href="cc.php">충청도</a></li>
		            <li><a href="jr.php">전라도</a></li>
		            <li><a href="jj.php">제주도</a></li>
         		</ul>
			</li>
			<li>
				<a href="#">해외여행지</a>
				<ul class="submenu">
					<li><a href="asia.php">동남아시아</a></li>
					<li><a href="europe.php">유럽</a></li>
					<li><a href="pacific.php">남태평양</a></li>
					<li><a href="oceania.php">오세아니아</a></li>
					<li><a href="america.php">북중미</a></li>
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
		<div id="content">
			<div class="notice">
				<div class="title">
					<img src="images\flight.png" width="20" height="20">공지사항
				</div>
				<table class="table1">
					<tr>
						<th>제목</th>
						<th>작성일</th>
					</tr>
					<tr>
						<td>
							<a href="notice.php">
								해운대해수욕장을 가니 비키니 입은 여자가 한명도 안보이는구나!
							</a>
						</td>
						<td>2020.04.24</td>
					</tr>
					<tr>
						<td>
							<a href="notice.php">
								다대포에도 가보니 비키니 입은 여자가 한명도 안보이는구나!
							</a>
						</td>
						<td>2020.04.25</td>
					</tr>
					<tr>
						<td>
							<a href="notice.php">
								광안리도 가보니 비키니 입은 여자가 한명도 안보이는구나!
							</a>
						</td>
						<td>2020.04.26</td>
					</tr>
					<tr>
						<td>
							<a href="notice.php">
								이기대도 가보니 비키니 입은 여자가 한명도 안보이는구나!
							</a>			
						</td>
						<td>2020.04.27</td>
					</tr>
					<tr>
						<td>
							<a href="notice.php">
								송정도 가보니 비키니 입은 여자가 한명도 안보이는구나!
							</a>
						</td>
						<td>2020.04.27</td>
					</tr>
				</table>
			</div> <!-- notice영역의 마지막 -->
			<div class="partner">
				<div class="title">
					<img src="images\flight.png" width="20" height="20">정보나눔
				</div>
				<img src="images\partner\info.png">
			</div> <!-- partner영역의마지막 -->
			<div class="clear"></div>
			<div class="bg">
				<img src="images\bg.png">
			</div>
			<div class="icons">
				<div class="imgbtn">
					<img src="images\icons\새소식.png">
					<input type="button" class="bt" value="새소식" onclick="location.href='news.php'">
				</div>
				<div class="imgbtn">
					<img src="images\icons\여행음악.png">
					<input type="button" class="bt" value="여행음악" onclick="location.href='music.php'">
				</div>
				<div class="imgbtn">
					<img src="images\icons\여행메뉴얼.png">
					<input type="button" class="bt" value="여행메뉴얼" onclick="location.href='manual.php'">
				</div><!-- 세번째 imgbtn의 마지막 -->
				<div class="clear"></div>
				<br><br><br><br><br><br> <!-- 여섯줄바꿈 -->
				<p style="font-style: italic; font-size: 12px; font-weight: bold; text-align: right; color: #999;">
					Copyright admin@test.com all rights reserved since 2020.04.24
				</p>
			</div> <!-- div icons클래스의 마지막 -->
			<div class="clear"></div>
		</div> <!-- content영역의 마지막 -->
	</div> <!-- wrap요소의 마지막 -->
	<footer>
		<div style="width: 1200px;">
			<div class="foot_left">
				<a href="email.php">
					이메일 무단수집거부
				</a>
				<!-- 6칸띄움 -->
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="policy.php">
					개인정보 처리방침
				</a>
			</div> <!-- foot_left영역 마지막 -->
			<div class="foot_right">
				<p 
				style="margin-top: 10px; 
				margin-left: 70px;
				line-height: 25px;">
					상호명:여행을 사랑하는 사람들(주)<br>
					대표자:홍길동<br>
					개인정보책임자:유관순<br>
					상담전화:1588-9000<br>
					주소:부산광역시 해운대구 우동 정릉빌딩 503호
				</p>
			</div> <!-- foot_right영역 마지막 -->
		</div>
	</footer> <!-- footer영역의 마지막 -->
</body>
</html>

<!-- 
	
 -->