<?php
	$num=$_GET["num"];
	$conn=mysqli_connect("127.0.0.1","root","autoset","testdb");
	$query="select * from r_subject where num='$num'";
	$rs=mysqli_query($conn,$query);
	$row=mysqli_fetch_array($rs);
	$cnt=mysqli_num_rows($rs);
?>
<script type="text/javascript">
	function send() {
	//무결성 체크
	// 무결성체크 후 포스트방식으로 wrtie_ok.php이동
	document.frm1.submit();
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
	<form name="frm1" method="post" action="edit_ok.php">
		<table class="table1" style="width: 600px;">
			<tr>
				<td colspan="2" align="center">
					시험성적수정폼
				</td>
			</tr>
			<tr>
				<td>학번</td>
				<td>
					<input type="text" name="num" size=10 value="<?php echo $row["num"] ?>" readonly>
				</td>
			</tr>
			<tr>
				<td>이름</td>
				<td>
					<input type="text" name="name" size="10" value="<?php echo $row["name"]?>">
				</td>
			</tr>
			<tr>
				<td>국어</td>
				<td>
					<input type="text" name="korean" size="30" value="<?php echo $row["korean"] ?>">
				</td>
			</tr>
			<tr>
				<td>영어</td>
				<td>
					<input type="text" name="english" size="30" value="<?php echo $row["english"] ?>">
				</td>
			</tr>
			<tr>
				<td>수학</td>
				<td>
					<input type="text" name="math" size="30" value="<?php echo $row["math"] ?>">
				</td>
			</tr>
      <tr>
         <td colspan="2" align="center">
            <input type="button" value="작성완료" class="bt" onclick="send()">
         </td>
      </tr>
		</table>
	</form>
</body>
</html>