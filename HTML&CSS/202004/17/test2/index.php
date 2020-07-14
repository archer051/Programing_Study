
<!DOCTYPE html>
<html>
<head>
	<title>성적표</title>
	<style>
		body{
			background-image: url("jenny.jpg");
			background-size: cover;
		}
	</style>
	<meta charset="utf-8">
</head>
<body>
	<table border="0" width="640" align="center">
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
			<td>1</td>
			<td>
				<!-- <a href="content.php?var=1,홍길동,90,90,90,270,90"> -->
				<a href="content.php?var1=1&var2=홍길동&var3=90&var4=90&var5=90&var6=270&var7=90">
					홍길동
				</a>
			</td>
			<td>90</td>
			<td>90</td>
			<td>90</td>
			<td>270</td>
			<td>90</td>
		</tr>
		<tr><!--학번2번-->
			<td>2</td>
			<td>
				<a href="content.php?var1=2&var2=유관순&var3=80&var4=80&var5=80&var6=240&var7=80">
					유관순
				</a>
			</td>
			<td>80</td>
			<td>80</td>
			<td>80</td>
			<td>240</td>
			<td>80</td>
		</tr>
		<tr><!--학번3번-->
			<td>3</td>
			<td>
				<a href="content.php?var1=3&var2=안중근&var3=50&var4=100&var5=100&var6=250&var7=83">
					안중근
				</a>
			</td>
			<td>50</td>
			<td>100</td>
			<td>100</td>
			<td>250</td>
			<td>83</td>
		</tr>
		<tr><!--학번4번-->
			<td>4</td>
			<td>
				<a href="content.php?var1=4&var2=이순신&var3=70&var4=70&var5=70&var6=210&var7=70">
					이순신
				</a>
			</td>
			<td>70</td>
			<td>70</td>
			<td>70</td>
			<td>210</td>
			<td>70</td>
		</tr>
		<tr><!--학번5번-->
			<td>5</td>
			<td>
				<a href="content.php?var1=5&var2=윤봉길&var3=100&var4=100&var5=100&var6=300&var7=100">
					윤봉길
				</a>
			</td>
			<td>100</td>
			<td>100</td>
			<td>100</td>
			<td>300</td>
			<td>100</td>
		</tr>
		<tr><td colspan="7" align="center">
			<input type="button" value="성적추가" onclick="location.href='write.php'">
		</td></tr>

	</table>
</body>
</html>
