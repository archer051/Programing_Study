<!DOCTYPE html>
<?php
	$no=$_GET["no"];
	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="update inc set hit=hit+1 where no=$no";
	mysqli_query($conn,$query);
	$query="select * from inc where no=$no";
	$rs=mysqli_query($conn,$query);
	$row=mysqli_fetch_array($rs);
?>
<html lang="ko">
<head>
	<link rel="stylesheet" href="style.css">
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<script src="script.js" defer="defer"></script>
	<meta charset="UTF-8">
	<title></title>
	
</head>
<script>
		function send(){
			document.frm1.submit();
		}
		function del(no,fname){
			if(confirm("정말로 삭제하시겠습니까?")){
				//js는 변수를 기준으로 분리를 해준다.
				location.href="inc_del.php?no="+no+"&fname="+fname;
			}
		}
	</script>
<body>
	<br><br>
		<table class="table2" width="800">
			<tr>
				<th colspan="2" align="center">내용보기</th>
			</tr>
			<tr>
				<td>글쓴이</td>
				<td><?php echo $row["writer"] ?></td>
			</tr>
			<tr>
				<td>글제목</td>
				<td><?php echo $row["title"] ?></td>
			</tr>
			<tr>
				<td>글내용</td>
				<td><?php echo nl2br($row["content"]) ?></td>
			</tr>
			<tr>
				<td>첨부파일</td>
				<td><?php echo $row["fname"] ?>&nbsp;<font color="red"><b><a href="down.php?fanme=<?php echo $row["fname"] ?>">[Download]</a></b></font></td>
			</tr>
			<tr>
				<td>조회수</td>
				<td><?php echo $row["hit"] ?></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="button" class="bt1" value="삭제하기" onclick="del(<?php echo $no ?>,'<?php echo $row["fname"] ?>')"><!-- del(글번호, '파일명') -->
					<input type="button" class="bt1" value="리스트로" onclick="location.href='inc.php'">
				</td>
			</tr>
		</table>
		<br>
	<form name="frm1" method="post" action="inc_re_ok.php">
		<table class="table3" width="700">
			<?php
				$query2="select * from inc_re where p_no=$no";
				$rs2=mysqli_query($conn,$query2);
				while($row2=mysqli_fetch_array($rs2)){
			?>
				<tr>
					<td><?php echo $row2["memo"] ?> by <?php echo $row2["writer"] ?></td>
				</tr>
			<?php } ?>
			<tr>
				<td>
					<input type="text" name="memo" size="80">
					<input type="text" name="writer" size="10">&nbsp;
					<input type="button" class="bt1" value="댓글" onclick="send()">
					<input type="hidden" name="p_no" value="<?php echo $no ?>">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
	
