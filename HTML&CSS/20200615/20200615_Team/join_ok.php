<?php
	include "dbconn.php";
	$id=$_SESSION["id"];
	$id=$_POST["id"];
	$pw=$_POST["pw"];
	$name=$_POST["name"];
	$email=$_POST["email1"]."@".$_POST["email2"];
	$query="insert into member (id,pw,name,email)
	values ('$id','$pw','$name','$email')";
	mysqli_query($conn, $query);
?>
<script>
	alert("회원가입이 완료 되었습니다.");
</script>

<meta http-equiv="refresh" content="0;url=responsive.php">