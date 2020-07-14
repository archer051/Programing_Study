<?php
	session_start();
	$people=$_POST["people"];
	$id=$_SESSION["id"];
	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="select * from vote2 where id='$id'";
	$rs=mysqli_query($conn,$query);
	if(mysqli_num_rows($rs)){
?>
<script>
	alert("이미 투표하셨습니다.");
	history.back();
</script>
<?php }else{ 
	$query="insert into vote2 (people,id) values ('$people','$id')";
	mysqli_query($conn,$query);
?>
<script>
	alert("투표를 완료하셨습니다.");
</script>
<meta http-equiv="refresh" content="0;url=index.php">
<?php } ?>