<?php
	include "dbconn.php";
	$name=$_POST["name"];
	$id=$_POST["id"];
	$pw=$_POST["pw1"];
	$query="update member set
						name = '$name'
						,id = '$id'
						,pw = '$pw'
						where id = '$id'";
	mysqli_query($conn,$query);
?>
<script>
	alert("회원정보 수정이 완료되었습니다."+"\n"+"메인페이지로 이동합니다.");
</script>
<meta http-equiv="refresh" content="0;responsive.php">
