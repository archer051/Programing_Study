<?php  
	$no = $_POST["no"];
	$title = $_POST["title"];
	$content = $_POST["content"];
	$conn = mysqli_connect("127.0.0.1","root","autoset","testdb");
	$query = "update notice set title = '$title', content = '$content' where no = $no;";
	// echo "$query";exit;
	mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url=index.php">