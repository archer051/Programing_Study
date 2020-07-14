<?php
	$no=$_GET["no"];
	$conn = mysqli_connect("127.0.0.1","root","autoset","testdb");
	$query1 = "update notice set hit=hit+1 where no=$no;";
	mysqli_query($conn,$query1);
	$query2 = "select * from notice where no = $no;";
	$rs = mysqli_query($conn,$query2);
	$row = mysqli_fetch_array($rs);
?>

<script type="text/javascript">
	function del()
	{
		if(confirm("정말로 삭제하시겠습니까?"))
		{
			location.href="notice_delete.php?no=<?php echo $no?>";
		}
	}
</script>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
	<table class="table">
		<tr>
			<td style="width: 80px; text-align: left;">글번호:</td>
			<td>
				<?php echo $row["no"] ?>
			</td>
		</tr>
		<tr>
			<td style="width: 80px; text-align: left;">글제목:</td>
			<td>
				<?php echo $row["title"] ?>
			</td>
		</tr>
		<tr>
			<td style="width: 80px; text-align: left;">글내용:</td>
			<td>
				<?php echo nl2br($row["content"]) ?>
			</td>
		</tr>
		<tr>
			<td style="width: 80px; text-align: left;">작성자:</td>
			<td>
				<?php echo $row["writer"] ?>
			</td>
		</tr>
		<tr>
			<td style="width: 80px; text-align: left;">작성일:</td>
			<td>
				<?php echo $row["writeday"] ?>
			</td>
		</tr>
		<tr>
			<td style="width: 80px; text-align: left;">조회수:</td>
			<td>
				<?php echo $row["hit"] ?>
			</td>
		</tr>
	</table>
	<div align="center">
		<input type="button" value="수정" class="bt" onclick="
		location.href='notice_edit.php?no=<?php echo $no ?>'">
		<input type="button" value="삭제" class="bt" onclick="
		del()">
	</div>
</body>
</html>
