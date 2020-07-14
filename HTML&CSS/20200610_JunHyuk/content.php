<!DOCTYPE html>
<?php
	$no=$_GET["no"];
	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="select * from act where no=$no";
	$rs=mysqli_query($conn,$query);
	$row=mysqli_fetch_array($rs);
?>
<html lang="ko">
<head>
	<link rel="stylesheet" href="style.css">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<table class="table2" width="700">
		<tr>
			<td colspan="2">
				배우상세정보
			</td>
		</tr>
		<tr>
			<td>연번</td>
			<td><?php echo $row["no"] ?></td>
		</tr>
		<tr>
			<td>이름</td>
			<td><?php echo $row["name"] ?></td>
		</tr>
		<tr>
			<td>출생년도</td>
			<td><?php echo $row["birth"] ?></td>
		</tr>
		<tr>
			<td>신장</td>
			<td><?php echo $row["height"] ?></td>
		</tr>
		<tr>
			<td>몸무게</td>
			<td><?php echo $row["weight"] ?></td>
		</tr>
		<tr>
			<td>이미지:</td>
			<td><img src="../act/fileServer/<?php echo $row["pic"] ?>" width="200" height="200"></td>
		</tr>
		<tr>
			<td>특징</td>
			<td><?php echo $row["memo"] ?></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="button" class="bt1" value="삭제하기" onclick="">&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="button" class="bt1" value="메인화면" onclick="location.href='index.php'">
			</td>
		</tr>
	</table>
	
</body>
</html>