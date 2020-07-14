<?php
	session_start();//세션발급을 위한 시동걸기.
	//session_start문법위에는 어떤것도 올 수 없다.
	//아무것도 하지말자.
	//session위에는 아무것도 있어서는 안된다.
	//주석도 안된다.
	$id=$_POST["id"];
	$pw=$_POST["pw"];
	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="select * from member1 where id='$id' and pw='$pw'";
	$rs=mysqli_query($conn,$query);
?>
<?php if(mysqli_num_rows($rs)){ 
	$_SESSION["id"]=$id;
?>
<script>
	this.close();
</script>
<meta http-equiv="refresh" content="0;url=index.php">
<?php }else{ ?>
	<script>
		alert("아이디와 비밀번호가 일치하지 않습니다.");
		this.close();
	</script>
<?php }?>