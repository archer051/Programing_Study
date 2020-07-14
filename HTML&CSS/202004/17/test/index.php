<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<table border="1" width="640" align="center" cellpadding="10" cellspacing="0.5">
		<tr><td align="center">
			<a href="content.php?no=1">index.php페이지에서 a 태그 href명령어로 GET방식으로 변수no에1을 전달하며 content.php페이지로이동
			</a>
		</td></tr>
		<tr><td align="center">
			<input type="button" value="글쓰기" onclick="location.href='write.php'">
		</td></tr>
	</table>
</body>
</html>
<!--
meta태그
	문자설정 charset utf-8 형식으로 지정
table태그
	border	즉 국경 경계를 1을 줘야함(0.5등은 먹히지 않음)
	width 	즉 너비 사이즈 640으로 주면 640Pixel로 만들어지며 100%로 변경가능
	align 	즉 정렬은 center중앙 left왼쪽,right오른쪽으로 정렬이 가능하다
	cellpadding 셀 안의 내용과 셀 경계선 사이의 간격을 의미한다.
	cellspacing 셀 바깥테두리의 크기를 지정하는걸로 보인다.
tr태그 테이블내의 줄을 의미하는 태그
td태그 테이블내의 칸을 의미하는 태그
	align 사용가능
	a태그
		href 페이지열기 및 GET방식으로 변수임의생성해서 전달가능 
			예)href="content.php?no=1"
	input태그
		type 즉 종류 버튼 또는 텍스트 등 여러가지 있지만 여기선 button형식 사용
			button을 생성
		예)type="button"
		vlaue = 즉 값 어떤 버튼인지 다른사람이 인식 할 수 없기때문에 value를 사용하여 어떤버튼인지 기입
		예)value="글쓰기"
		onclick 즉 클릭이벤트 함수를 사용할수도 페이지를 열수도 있음
		예)onclick="send()"
		예)onclick="location.href='write.php'"
-->