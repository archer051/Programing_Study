<!DOCTYPE html>
<?php
	include "dbconn.php";
	$id=$_GET["id"];
	$query="select * from member where id='$id'";
	$rs=mysqli_query($conn,$query);
?>
<script>
	function choice(){
		opener.document.frm1.pw.focus();
		this.close();
	}
</script>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="responsive.css">
</head>
<body>
	<?php if(mysqli_num_rows($rs)){ ?>
		<script>
			alert("사용중인 아이디 입니다.");
			opener.document.frm1.id.value="";
			opener.document.frm1.id.focus();
			this.close();
		</script>
	<?php }else{ ?>
		<table class="table" width="250">
			<tr>
				<td>사용가능한 아이디입니다.</td>
			</tr>
			<tr>
				<td>
					<input type="button" value="사용하기" onclick="choice()">
				</td>
			</tr>
		</table>
	<?php } ?>
</body>
</html>