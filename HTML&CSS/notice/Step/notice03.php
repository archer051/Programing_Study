<?php
	//3단계 get값처리
	 if(isset($_GET["page"])){
	 	$page=$_GET["page"];
	 }else{
	 	$page=1;
	 }
	 //3단계 startRow변수처리
	 $startRow=($page-1)*10;
	$conn=mysqli_connect("localhost","root","autoset","testdb");
	//3단계 쿼리문장 수정
	$query="select * from notice order by no desc limit $startRow,10";
	$rs=mysqli_query($conn,$query);
?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<br><br>
	<table class="table1" width="600">
		<tr>
				<th>글번호</th>
				<th>글제목</th>
				<th>작성자</th>
				<th>작성일</th>
				<th>조회수</th>
		</tr>
<?php while($row=mysqli_fetch_array($rs)){ ?>
	<tr>
		<td><?php echo $row["no"]?></td>
		<td><?php echo $row["title"]?></td>
		<td><?php echo $row["writer"]?></td>
		<td><?php echo $row["writeday"]?></td>
		<td><?php echo $row["hit"]?></td>
	</tr>
<?php } ?>
<!--2단계 여기에 페이지 나열하기-->
<?php
$query2="select count(*) as cnt from notice";
$rs2=mysqli_query($conn,$query2);
$row2=mysqli_fetch_array($rs2);
$pageCount=ceil($row2["cnt"]/10); 
?>
		<tr>
			<td colspan="5" align="center">
<?php
//3단계 for문장내에 링크를 걸어준다
					for($i=1;$i<=$pageCount;$i++){
							echo "<a href='notice03.php?page=$i'>[$i]</a> ";
					}
				?>
			</td>
		</tr>
		<tr>
				<td colspan="5" align="center">
					<input type="button" class="bt1" value="공지사항추가" onclick="location.href='notice_write.php'">
				</td>
		</tr>
	</table>
</body>
</html>