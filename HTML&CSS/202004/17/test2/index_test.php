
<!DOCTYPE html>
<html>
<head>
	<title>성적표</title>
	<meta charset="utf-8">
</head>
<body>
	<table border="0">
		<tr><!--가로제일윗줄-->
			<td>학번</td>
			<td>이름</td>
			<td>국어</td>
			<td>영어</td>
			<td>수학</td>
			<td>총점</td>
			<td>평균</td>
		</tr>
		<tr><!--학번1번-->
			<td>
				<input type="text" name="r1_num" value="1">
			</td>
			<td>
				<input type="text" name="r1_name" value="홍길동">
			</td>
			<td>
				<input type="text" name="r1_korean" value="90">
			</td>
			<td>
				<input type="text" name="r1_english" value="90">
			</td>
			<td>
				<input type="text" name="r1_math" value="90">
			</td>
			<td>
				<input type="text" name="r1_sum" value="270">
			</td>
			<td>
				<input type="text" name="r1_avg" value="90">
			</td>
		</tr>
		<tr><!--학번2번-->
			<td>
				<input type="text" name="r2_num" value="2">
			</td>
			<td>
				<input type="text" name="r2_name" value="유관순">
			</td>
			<td>
				<input type="text" name="r2_korean" value="80">
			</td>
			<td>
				<input type="text" name="r2_english" value="80">
			</td>
			<td>
				<input type="text" name="r2_math" value="80">
			</td>
			<td>
				<input type="text" name="r2_sum" value="240">
			</td>
			<td>
				<input type="text" name="r2_avg" value="80">
			</td>
		</tr>
		<tr><!--학번3번-->
			<td>
				<input type="text" name="r3_num" value="3">
			</td>
			<td>
				<input type="text" name="r3_name" value="안중근">
			</td>
			<td>
				<input type="text" name="r3_korean" value="50">
			</td>
			<td>
				<input type="text" name="r3_english" value="100">
			</td>
			<td>
				<input type="text" name="r3_math" value="100">
			</td>
			<td>
				<input type="text" name="r3_sum" value="250">
			</td>
			<td>
				<input type="text" name="r3_avg" value="83">
			</td>
		</tr>
		<tr><!--학번4번-->
			<td>
				<input type="text" name="r4_num" value="4">
			</td>
			<td>
				<input type="text" name="r4_name" value="이순신">
			</td>
			<td>
				<input type="text" name="r4_korean" value="70">
			</td>
			<td>
				<input type="text" name="r4_english" value="70">
			</td>
			<td>
				<input type="text" name="r4_math" value="70">
			</td>
			<td>
				<input type="text" name="r4_sum" value="210">
			</td>
			<td>
				<input type="text" name="r4_avg" value="70">
			</td>
		</tr>
		<tr><!--학번5번-->
			<td>
				<input type="text" name="r5_num" value="5">
			</td>
			<td>
				<input type="text" name="r5_name" value="윤봉길">
			</td>
			<td>
				<input type="text" name="r5_korean" value="100">
			</td>
			<td>
				<input type="text" name="r5_english" value="100">
			</td>
			<td>
				<input type="text" name="r5_math" value="100">
			</td>
			<td>
				<input type="text" name="r5_sum" value="300">
			</td>
			<td>
				<input type="text" name="r5_avg" value="100">
			</td>
		</tr>
		<tr><td colspan="7" align="center">
			<input type="button" value="성적추가" onclick="location.href='write.php'">
		</td></tr>

	</table>
</body>
</html>

<!--
// 
//<?php
//	$type=$_GET["type"]
//		if($type=="w")
//	{
//		$num=$_GET["num"];
//		$name=$_GET["name"];
//		$korean=$_GET["korean"];
//		$english=$_GET["english"];
//		$math=$_GET["math"];
//		echo "성적표쓰기페이지에서 작성함";
//		echo "학번:"$num;
//		echo "이름:"$name;
//		echo "국어:"$korean;
//		echo "영어:"$englsih;
//		echo "수학:"$math;
//		
//	}
//?>
-->