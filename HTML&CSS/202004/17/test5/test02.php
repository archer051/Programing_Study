<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<script src="script.js"></script>
	<!-- 
	style 태그 내 에서는 주석이 사용되어 지지 않음
	*태그
		marin 0 = 왼쪽제일위로 옮김
		padding 0 = 칸사이 간격을 줄임 
		list-style: none = .이 나옴
		font-family: "맑은 고딕"; = 맑은 고딕체로 
	a태그
		text-decoration: none; = 
		color: inherit; = 하이텍스트링크 들어가기전/들어간후 파란색,빨간색 표출 되는것을 없앰
	. 함수만들때
		color: #00ff00;
		font-size:  =em(디폴트:1em 배수만큼 사이즈 조정,pixel 단위 두단위로 쓸수 잇음)
		padding: 5px = 픽셀단위 
		cursor: default; = 기본 , pointer; =화살표
		border-radius: 10px; = 높을 수록 모서리 깎이는 부분이 늘어남
	. 함수의 이벤트 사용할 때 : 콜론을 사용 
		hover 마우스 포인터를 가져다 다 되었을때
		background-color: red;
		font-size: 1.2em;
	-->
	<style>
		*{
			margin: 0 auto;/**/
			padding: 0;
			list-style: none;
			font-family: "맑은 고딕";
		}
		a{
			text-decoration: none;
			color: inherit; 
		}
		.p_color{
			color: #00ff00;
			font-size: 0.5em;
			background-color: black;
			padding: 5px;
			width: 250px;
			margin-top: 20px;
			text-align: center;
			cursor: pointer;
			border-radius: 10px;
	}
	.p_color:hover{
		background-color: red;
		font-size: 1.2em;
	}
	</style>
</head>
<body>
	<p class="p_color">내부스타일 시트 사용법</p>


</body>
</html>