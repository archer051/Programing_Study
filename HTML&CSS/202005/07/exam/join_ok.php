<?php
	$id=$_POST["id"];
	$pw1=$_POST["pw1"];
	$name=$_POST["name"];

	$conn=mysqli_connect("127.0.0.1","root","autoset","testdb");
	$query=
	"insert into member1
		(
		id,
		pw,
		name
		)
	values
		(
		'$id',
		'$pw1',
		'$name'
		);
	";
	mysqli_query($conn,$query);
?>
<script type="text/javascript">
	alert("회원가입이 완료되었습니다." + "\n" + "메인페이지로 이동하여 로그인해주세요");
</script>
<meta http-equiv="refresh" content="0;url=index.php">
