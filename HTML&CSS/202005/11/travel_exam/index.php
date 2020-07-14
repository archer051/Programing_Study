<html>
<head>
	<meta charset="utf-8">
	<title>국내 유일의 50년전통 여행사</title>
	<link rel="stylesheet" href="style.css">
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<script src="script.js" defer="defer"></script>
</head>
<body>
<header>
	<div class="admin">
		<a href="admin.php">Login</a>&nbsp;|&nbsp;
		<a href="member.php">Signup</a>&nbsp;|&nbsp;
		<a href="idpw.php">Search Id/Pw</a>
	</div>
	<div class="logo">
		<a href="index.php">
		<img src="logo/logo.png">
		</a>
	</div>
</header>
<nav>
	<ul class="menu">
		<li><a href="intro.php">여행가이드 소개</a></li>
		<li><a href="#">국내여행지</a>
			<ul class="submenu">
			<li><a href="kk.php">경기/강원도</a></li>
			<li><a href="ks.php">경상도</a></li>
			<li><a href="cc.php">충청도</a></li>
			<li><a href="jr.php">전라도</a></li>
			<li><a href="jj.php">제주도</a></li>
			</ul>
		</li>
		<li><a href="#">해외여행지</a>
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
			<img src="images/flight.png" width="20" height="20">공지사항
			</div>
			<table class="table1">
				<tr>
					<th>제목</th>
					<th>작성일</th>
				</tr>
				<tr>
<td><a href="notice.php">다대포 해안을 한바퀴 돌고나니 속이 뻥 뚫리는구나...</a></td>
<td>2020.4.24</td>
				</tr>
				<tr>
<td><a href="notice.php">해운대 해안을 한바퀴 돌고나니 속이 뻥 뚫리는구나...</a></td>
<td>2020.4.23</td>
				</tr>
				<tr>
<td><a href="notice.php">광안리 해안을 한바퀴 돌고나니 속이 뻥 뚫리는구나...</a></td>
<td>2020.4.22</td>
				</tr>
				<tr>
<td><a href="notice.php">이기대 해안을 한바퀴 돌고나니 속이 뻥 뚫리는구나...</a></td>
<td>2020.4.21</td>
				</tr>
				<tr>
<td><a href="notice.php">송정 해안을 한바퀴 돌고나니 속이 뻥 뚫리는구나...</a></td>
<td>2020.4.20</td>
				</tr>
			</table>
		</div>
		<div class="partner">
			<div class="title">
			<img src="images/flight.png" width="20" height="20">정보나눔
			</div>
			<img src="images/partner/info.png">
		</div><!--partner요소의 마지막-->
		<div class="clear"></div>
		<div class="bg">
			<img src="images/bg.png">
		</div>
		<div class="icons">
			<div class="imgbtn">
			<img src="images/icons/새소식.png">
<input type="button" class="bt" value="새소식" onclick="location.href='news.php'">
			</div>
			<div class="imgbtn">
			<img src="images/icons/여행음악.png">
<input type="button" class="bt" value="여행음악" onclick="location.href='music.php'">
			</div>
			<div class="imgbtn">
		<img src="images/icons/여행매뉴얼.png">
<input type="button" class="bt" value="여행매뉴얼" onclick="location.href='manual.php'">
			</div><!--세번째 imgbtn의 마지막-->
			<div class="clear"></div>
			<br><br>
			<p style="width:450px;text-align:right;color:#999;font-size:0.9em;">
			Copyright admin@test.com all rights reserved since 2020.04.24
			</p>
		</div><!--icons요소의 마지막-->
		<div class="clear"></div>
	</div><!--content요소의 마지막-->
</div><!--wrap요소의 마지막-->
<footer>
	<div style="width:1000px">
		<div class="foot_left">
		<a href="email.php">이메일 무단수집거부</a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="policy.php">개인정보 처리방침</a>
		</div>
		<div class="foot_right">
		<p style="margin-top:10px;margin-left:70px;line-height:25px;">
		상호명:여행을 사랑하는 사람들(주)<br>
		대표자:홍길동<br>
		개인정보책임자:유관순<br>
		상담전화:1588-9000<br>
		주소:부산광역시 해운대구 우동 정릉빌딩 503호
		</p>
		</div>
	</div>
</footer>
</body>
</html>
