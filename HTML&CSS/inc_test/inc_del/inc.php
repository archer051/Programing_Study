<!DOCTYPE html>
<?php
	if(isset($_GET["page"])){
		$page=$_GET["page"];
		$group=ceil($page/10);
	}else{
		$page=1;
		$group=1;
	}
	$startRow=($page-1)*10;
	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="select * from inc order by no desc limit $startRow,10";
	$rs=mysqli_query($conn,$query);
?>
<html lang="ko">
<head>
	<link rel="stylesheet" href="style.css">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<table class="table1">
		<tr>
			<th>글번호</th>
			<th>글제목</th>
			<th>작성자</th>
			<th>작성일</th>
			<th>조회수</th>
		</tr>
		<?php while($row=mysqli_fetch_array($rs)){ ?>
			<tr>
				<td><?php echo $row["no"] ?></td>
				<td>
					<a href="inc_content.php?no=<?php echo $row["no"] ?>">
						<?php echo $row["title"] ?></a>
				</td>
				<td><?php echo $row["writer"] ?></td>
				<td><?php echo $row["writeday"] ?></td>
				<td><?php echo $row["hit"] ?></td>
			</tr>
		<?php } ?>
		<tr>
			<td colspan="5" align="center">
				<input type="button" value="자료추가" onclick="location.href='inc_write.php'">
			</td>
		</tr>
		<?php
			$query2="select count(*) as cnt from inc";
			$rs2=mysqli_query($conn,$query2);
			$row2=mysqli_fetch_array($rs2);
			$pageCount=ceil($row2["cnt"]/10);
			$groupCount=ceil($pageCount/10);
		?>
		<tr>
			<td colspan="5" align="center">
				<?php
					$startPage=($group-1)*10+1;
					$endPage=$startPage+9;	

					if($group != 1){
						echo "<a href='inc.php?page=1'>FIRST</a>";
					}
					echo "&nbsp;&nbsp;";

					if($group != 1){
						$prevPage=($group-2)*10+1;
						echo "<a href='inc.php?page=$prevPage'>PREV</a>";
					}
					echo "&nbsp;&nbsp;";

					for($i=$startPage;$i<=$endPage;$i++){
					if($i>$pageCount){break;}
					if($i==$page){
						echo "<a href='inc.php?page=$i'><font color='red'><b>[$i]</b></font></a>";
						}else{
						echo "<a href='inc.php?page=$i'>[$i]</a>";
						}
					}

					echo "&nbsp;&nbsp;";

					if($group<$groupCount){
						$nextPage=$group*10+1;
						echo "<a href='inc.php?page=$nextPage'>NEXT</a>";
					}

					echo "&nbsp;&nbsp;";

					if($group<$groupCount){
						$lastPage=$pageCount;
						echo "<a href='inc.php?page=$lastPage'>LAST</a>";
					}
				?>
			</td>
		</tr>
		<tr>
			<td colspan="5" align="center">
				<input type="button"class="bt1" value="공지사항추가" onclick="localhost.href='inc.write.php'">
			</td>
		</tr>
	</table>
</body>
</html>