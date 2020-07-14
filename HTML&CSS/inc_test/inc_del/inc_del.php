<?php
	$no=$_GET["no"];
	$filename=$_GET["fname"];
	$file_dir=$_SERVER["DOCUMENT_ROOT"]."/inc/fileServer/".$filename;
	//파일서버의 파일부터삭제
	if(file_exists($file_dir)){
		unlink($file_dir);
	}
	//디비서버의 파일정보 레코드삭제
	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="delete from inc where no=$no";
	mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url=inc.php">
