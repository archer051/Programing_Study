<?php
	session_start();
	//세션발급을 위한 시동걸기.
	//session_start 함수 위에는 어떤 것도 올수 없게 제일 위로!
	$id = $_POST["id"];
	$pw = $_POST["pw"];
	$conn = mysqli_connect("127.0.0.1","root","autoset","testdb");
	$query = "select * from member1 where id = '$id' and pw = '$pw';";
	$rs = mysqli_query($conn,$query);
	$cnt = mysqli_num_rows($rs);
?>

<?php
	if($cnt > 0) {
		$_SESSION["id"]=$id;
?>
		<script type="text/javascript">
			opener.document.location.reload();
			this.close();
		</script>
<?php }else { ?>
	<script type="text/javascript">
		alert("아이디와 비밀번호가 일치하지 않습니다.");
		this.close();
	</script>
<?php } ?>
