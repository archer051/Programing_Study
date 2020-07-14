<script>
	function send() {
		// body...
		document.frm1.submit();
	}
</script>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form name="frm1" method="post" action="write_ok.php">
	<table border="1" width="500" align="center" cellspacing="0.5">
		<tr><td align="center">
			글제목
		</td><td>
			<input type="text" name="title" size="50">
			</td>
		</tr>
		<tr><td align="center">
		글내용</td>
		<td>
			<textarea name="content" rows="5" cols="51"></textarea>
		</td></tr>
		<tr><td colspan="2" align="center">
			<input type="button" value="글쓰기" onclick="send()">
			</td>
		</tr>
	</table>
</form>
</body>
</html>
<!--
form태그 
	name 즉 form태그를 가르키는 이름
	예)name="frm1"
	method 즉 방법 GET방식과 POST방식이 있고 POST방식은 변수를 넘길때 URL경로에 	
		값을 보여주지 않는다
	예)method="post"
	action 즉 활동 넘길 페이지에 대한 페이지이름을 넣는다.
	예)action="write_ok.php"
input태그
	type 즉 종류 버튼 또는 텍스트 등 여러가지 있지만 여기선 text형식 사용
		text을 생성
		예)type="text"
	name 즉 테이블태그 내의 텍스트창을 가르키는 이름
		예)name="title" size="50"
	size 즉 길이 기준은 한글자를 적었을때를 기준으로 한다 
		예)size="50"


-->