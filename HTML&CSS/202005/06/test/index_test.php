<?php
	$conn=mysqli_connect("127.0.0.1","root","autoset","testdb");
	$query="select * from r_subejct;";
	$rs=mysqli_query($conn,$query);
	// $cnt=mysqli_num_rows($rs);
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
		while($row=mysqli_fecth_array($rs))
		{
		?>
		<tr>
			<td> 
				<?php
				echo $row["num"];
				?>
			</td>
			<td> 
				<?php
				echo $row["name"];
				?>
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
				$vtotal=$row["korean"]+$row["math"]+$row["englsih"];
				echo $vtotal;
				?>
			</td>
			<td> 
				<?php
				$vavg=($row["korean"]+$row["math"]+$row["englsih"])/3;
				echo $vavg;
				?>
			</td>
			<td> 
				<?php
				$vavg=($row["korean"]+$row["math"]+$row["englsih"])/3;
				if($vavg >= 90)
				{
					echo "우등";
				}
				if($vavg < 60)
				{
					echo "보충";
				}
				/*echo $row["bigo"];*/
				?>
			</td>
		</tr>
		<?php
		}
		?>
		<tr>
			<td>
				<input type="button" value="추가" onclick="location.href=">
			</td>
		</tr>
	</table>
</body>
</html>