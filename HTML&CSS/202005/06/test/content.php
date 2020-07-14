<?php
	$num=$_GET["num"];
	// echo $hp;exit;
	$conn=mysqli_connect("127.0.0.1","root","autoset","testdb");
	$query="select * from r_subject where num='$num'";
	// echo $query;exit;
	$rs=mysqli_query($conn,$query);
	// $cnt=mysqli_num_rows($rs);
	$row=mysqli_fetch_array($rs);
?>
<script type="text/javascript">
	function del()
	{
		if(confirm("정말로 삭제하시겠습니까?"))
		{
			location.href="delete.php?num=<?php echo $num?>";
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
	<form name="frm1">
		<table class="table1" style="width: 600px;">
			<tr>
				<td colspan="2" align="center">
					시험성적상세보기
				</td>
			</tr>
			<tr>
				<td>학번</td>
				<td>
					<?php 
						echo $row["num"]
					?>
				</td>
			</tr>
			<tr>
				<td>이름</td>
				<td>
					<?php 
						echo $row["name"]
					?>
				</td>
			</tr>
			<tr>
				<td>국어</td>
				<td>
					<?php 
						echo $row["korean"]
					?>
				</td>
			</tr>
			<tr>
				<td>영어</td>
				<td>
					<?php 
						echo $row["english"]
					?>
				</td>
			</tr>
			<tr>
				<td>수학</td>
				<td>
					<?php
					echo $row["math"]
					?>
				</td>
			</tr>
			<tr>
         <td>총점</td>
         <td>
					<?php
					echo $row["total"]
					?>
				</td>
      </tr>
      <tr>
         <td>평균</td>
         <td>
	         <?php
	         	echo $row["avg"]
	         ?>
         </td>
      </tr>
      <tr>
				<td>비고</td>
				<td>
					<?php
	         	echo $row["bigo"]
					?>
				</td>
			</tr>
      <tr>
         <td colspan="2" align="center">
            <input type="button" value="수정" class="bt" onclick="location.href='edit.php?num=<?php echo $num ?>'">
            <input type="button" value="삭제" class="bt" onclick="del()">
         </td>
      </tr>
		</table>
	</form>
</body>
</html>