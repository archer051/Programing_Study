<?php
	include "dbconn.php";
	$id=$_POST["id"];
	$pw=$_POST["pw"];
	$name=$_POST["name"];
	$gender=$_POST["gender"];
	$hp=$_POST["hp"]."-".$_POST["hp1"]."-".$_POST["hp2"];
	$email=$_POST["email1"]."@".$_POST["email2"];
	$comment=$_POST["comment"];
	$query="insert into member (id,pw,name,gender,hp,email,comment)
	values ('$id','$pw','$name','$gender','$hp','$email','$comment')";
	mysqli_query($conn,$query);
?>
<script>
	alert("회원가입이 완료 되었습니다.");
</script>

<meta http-equiv="refresh" content="0;url=index.php">