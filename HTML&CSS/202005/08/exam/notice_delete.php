<?php 
	$no = $_GET["no"];
	$conn = mysqli_connect("127.0.0.1","root","autoset","testdb");
	$query = "delete from notice where no = $no;";
	mysqli_query($conn,$query);
 ?>
 <script type="text/javascript">
	alert("데이터가 삭제되었습니다.");
</script>
 <meta http-equiv="refresh" content="0;url=index.php">