<?php
	//3단계 get값처리후 4단계 그룹처리..
	 if(isset($_GET["page"])){
	 	$page=$_GET["page"];
	 	$group=ceil($page/5);
	 }else{
	 	$page=1;
	 	$group=1;
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
//5단계 groupCount구하기 
$groupCount=ceil($pageCount/5);
?>
		<tr>
			<td colspan="5" align="center">
<?php
//6단계 이전 5개로 이동하는 루틴.. 즉 이전그룹으로 이동하기 
//prevPage하는 변수는 사용한다
					if($group != 1){
					$prevPage=($group-2)*5+1;
					echo"<a href='notice07.php?page=$prevPage'>PREV</a>";
					echo "&nbsp;&nbsp;";
				}
//3단계 for문장내에 링크를 걸어준다
//4단계 그룹변수를 기준으로 startPage와 endPage를 구한다.
					$startPage=($group-1)*5+1;
					$endPage=$startPage+4;
					for($i=$startPage;$i<=$endPage;$i++){
							//7단계 해당페이지가 전체 페이지 카운트를 넘기면 break
							if ($i>$pageCount) {break;}
							if($i==$page){
								echo "<a href='notice07.php?page=$i'><font color='red'><b>[$i]</b></font></a> ";	
							}else{
							echo "<a href='notice07.php?page=$i'>[$i]</a> ";
							}
					}
//5단계 다음 5개로 이동하는 루틴... 즉 다음 그룹으로 이동하기.
//nextPage라는 변수를 사용한다.
						echo "&nbsp;&nbsp;";
						if($group<$groupCount){
						$nextPage=$group*5+1;
						echo "<a href='notice07.php?page=$nextPage'>NEXT</a>";
					}
						echo "&nbsp;&nbsp;";				
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