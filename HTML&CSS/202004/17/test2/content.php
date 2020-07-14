<?php
	$var1=$_GET["var1"];
	$var2=$_GET["var2"];
	$var3=$_GET["var3"];
	$var4=$_GET["var4"];
	$var5=$_GET["var5"];
	$var6=$_GET["var6"];
	$var7=$_GET["var7"];
	//echo "GET응답값$var";//GET으로받은응답값 표출
	echo "GET응답값";
	echo "<br>"; //줄바꿈
	echo "$var1";//GET으로받은응답값 표출
	echo "<br>"; //줄바꿈
	echo "$var2";//GET으로받은응답값 표출
	echo "<br>"; //줄바꿈
	echo "$var3";//GET으로받은응답값 표출
	echo "<br>"; //줄바꿈
	echo "$var4";//GET으로받은응답값 표출
	echo "<br>"; //줄바꿈
	echo "$var5";//GET으로받은응답값 표출
	echo "<br>"; //줄바꿈
	echo "$var6";//GET으로받은응답값 표출
	echo "<br>"; //줄바꿈
	echo "$var7";//GET으로받은응답값 표출
	echo "<br>"; //줄바꿈
	echo "넘어왔다^^";
	echo "<br>";
//html태그에서 Get으로 받은 것은 현재는 사용 못함 ㅜㅜ
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>성적조회</title>
</head>
<body>
	<table border="0" width="640" align="center">
		<tr><!-- 학번 -->
			<td align="right">학번:</td>
			<td align="left">1</td>
		</tr>
		<tr><!-- 이름 -->
			<td align="right">이름:</td>
			<td align="left">홍길동</td>
		</tr>
		<tr><!-- 국어 -->
			<td align="right">국어:</td>
			<td align="left">90</td>
		</tr>
		<tr><!-- 영어 -->
			<td align="right">영어:</td>
			<td align="left">90</td>
		</tr>
		<tr><!-- 수학 -->
			<td align="right">수학:</td>
			<td align="left">90</td>
		</tr>
		<tr><!-- 총점 -->
			<td align="right">총점:</td>
			<td align="left">270</td>
		</tr>
		<tr><!-- 평균 -->
			<td align="right">평균:</td>
			<td align="left">90</td>
		</tr>
		<tr>
			<td>
				<input type="button" value="수정" onclick="">
			</td>
		</tr>
	</table>

</body>
</html>