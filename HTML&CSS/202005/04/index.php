<?php
$conn=mysqli_connect("127.0.0.1","root","autoset","testdb");
$query="select * from enum";
$rs=mysqli_query($conn,$query);
// mysqli_fetch_array($rs)
$cnt=mysqli_num_rows($rs);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
	<table class="table1">
		<tr>
			<td>사원번호</td>
			<td>이름</td>
			<td>부서명</td>
			<td>직급</td>
			<td>전화번호</td>
			<td>주소</td>
			<td>이메일</td>
			<td>혼인여부</td>
			<td>성별</td>
			<td>연봉</td>
			<td>생년월일</td>
			<td>경력여부</td>
			<td>최종학력</td>
			<td>전공</td>
		</tr>
		<?php
			while ($row=mysqli_fetch_array($rs)) 
			{
		?>
		<tr>
			<td><?php echo $row["enum"] ?></td>
			<td><?php echo $row["name"] ?></td>
			<td><?php echo $row["partname"] ?></td>
			<td><?php echo $row["position"] ?></td>
			<td><?php echo $row["hp"] ?></td>
			<td><?php echo $row["addr"] ?></td>
			<td><?php echo $row["email"] ?></td>
			<td><?php echo $row["marriage_yn"] ?></td>
			<td><?php echo $row["gender"] ?></td>
			<td><?php echo $row["cash"] ?></td>
			<td><?php echo $row["birthday"] ?></td>
			<td><?php echo $row["career_yn"] ?></td>
			<td><?php echo $row["laststudy"] ?></td>
			<td><?php echo $row["major"] ?></td>
		</tr>
		<?php 	    
			}
		?>
		<tr>
		<td colspan="14" align="center">
			<input type="button" value="사원추가" onclick="location.href='write.php'" class="bt">
		</td>
	</tr>
	<tr>
		<td colspan="14" align="right">
			<font color="red"><b>
			<?php echo $cnt ?></b></font>건의 데이터가 검색되었습니다.
		</td>
	</tr>
	</table>
</body>
</html>

<!-- create table sawon(
	enum int not null primary key,
	name varchar(20),
	partname varchar(20),
	position varchar(20),
	hp varchar(20),
	addr varchar(50),
	email varchar(20),
	marriage_yn varchar(20),
	gender char(1),
	cash varchar(20),
	birthday varchar(20),
	career_yn char(2),
	laststudy varchar(20),
	major varchar(20),
); -->