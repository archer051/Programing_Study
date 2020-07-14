<?php
	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="select * from r_subject;";
	$rs=mysqli_query($conn,$query);
	
	$cnt=mysqli_num_rows($rs);
	//echo $cnt;exit;
?>

<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>시험성적</title>
</head>
<body>
	<table class="table1">
		<tr>
			<td>학번</td>
			<td>이름</td>
			<td>국어</td>
			<td>영어</td>
			<td>수학</td>
			<td>총점</td>
			<td>평균</td>
			<td>비고</td>
		</tr>
		<?php	
		while($row = mysqli_fetch_array($rs)) {
		//$row=mysqli_fecth_array($rs); 
		?>
		<tr>
			<td> 
				<?php
				echo $row["num"];
				?>
			</td>
			<td> 
				<a href="content.php?num=<?php echo $row["num"] ?>">
					<?php echo $row["name"] ?>
				</a>
			</td>
			<td> 
				<?php
				echo $row["korean"];
				?>
			</td>
			<td> 
				<?php
				echo $row["english"];
				?>
			</td>
			<td> 
				<?php
				echo $row["math"];
				?>
			</td>
			<td> 
				<?php
				echo $row["total"];
				?>
			</td>
			<td> 
				<?php
				echo $row["avg"];
				?>
			</td>
			<td> 
				<?php
				echo $row["bigo"];
				?>
			</td>
		</tr>
		<?php	}	?>
		<tr>
			<td colspan="8" align="center">
				<input type="button" value="추가" onclick="location.href='write.php'" class="bt">
			</td>
		</tr>
		<tr>
		<td colspan="8" align="right">
			<font color="red"><b>
			<?php echo $cnt ?></b></font>건의 데이터가 검색되었습니다.
		</td>
	</tr>
	</table>
</body>
</html>