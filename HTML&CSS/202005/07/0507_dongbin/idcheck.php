<!DOCTYPE html>
<?php 
	$id=$_GET["id"];
	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="select * from member1 where id='$id'";
	$rs=mysqli_query($conn,$query);
?>
<script>
	function choice(){
		opener.document.frm1.pw1.focus();
		this.close();
	}
</script>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php if(mysqli_num_rows($rs)){ ?>
		<script>
			alert("사용중인 아이디입니다.");
			opener.document.frm1.id.value="";
			opener.document.frm1.id.focus();
			this.close();
		</script>
	<?php }else{ ?>
		<br><br>
		<table class="table" width="250">
			<tr>
				<td>사용가능한 아이디 입니다.
				</td>
			</tr>
			<tr>
				<td><input type="button" value="사용하기" onclick="choice()" class="bt">
				</td>
			</tr>
		</table>
	<?php } ?>
</body>
</html>