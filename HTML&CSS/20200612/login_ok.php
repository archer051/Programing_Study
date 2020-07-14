<?php
	session_start();
	$id=$_POST["id"];
	$pw=$_POST["pw"];
	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="select * from member where id='$id' and pw='$pw'";
	$rs=mysqli_query($conn,$query);
	$row=mysqli_fetch_array($rs);
	if(!mysqli_num_rows($rs)){
?>
<script>
	alert("아이디 혹은 비밀번호가 일치하지 않습니다.");
	this.close();
</script>
<?php }else{
	$_SESSION["id"]=$id;
?>
<script>
	opener.document.location.reload();
	this.close();
</script>
<?php } ?>