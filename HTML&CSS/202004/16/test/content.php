<?php
	//겟으로 읽어온 값을 no라는 변수에 넣는다
	//php는 변수명 앞에 $를 붙여야 한다
	$icontent=$_GET["icontent"];
	echo $icontent;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<table border="1" width="500" align="center">
		<tr><td>
			제니는 애교가 짱이에요 ㅎㅎ
		</td></tr>
		<tr><td align="center">
			<input type="button" value = "수정">
			<input type="button" value = "삭제">
		</td></tr>
	</table>
</body>
</html>