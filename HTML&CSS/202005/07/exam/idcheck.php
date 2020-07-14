<?php
	$id = $_GET["id"];
	$conn = mysqli_connect("127.0.0.1","root","autoset","testdb");
	$query ="select * from member1 where id = '$id';";
	$rs = mysqli_query($conn,$query);
	$cnt = mysqli_num_rows($rs);
?>
<script type="text/javascript">
	function choice(){
		opener.document.frm1.pw1.focus();
		this.close();
	}
</script>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
	<?php if($cnt > 0) {  ?>
		<script type="text/javascript">
			alert("사용중인 아이디 입니다.");
			opener.document.frm1.id.value = "";
			opener.document.frm1.id.focus();
			this.close();
		</script>
	<?php	}else { ?>
		<table class="table1">
			<tr>
				<td>
					사용가능한 아이디입니다.
				</td>
			</tr>
			<tr>
				<td>
					<input type="button" value="사용하기" onclick="choice()" class="bt1">
				</td>
			</tr>
		</table>
	<?php	}	?>
	
	
	
</body>
</html>