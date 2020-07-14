<?php
	//post = 텍스트만 이동 
	$writer=$_POST["writer"];
	$title=$_POST["title"];
	$content=$_POST["content"];
	// userfile 해당문법사용불가 이지미나 동영상인식가능한 바이너리파일로 읽어들여야 한다.
	// $userfile=$_POST["userfile"];
	$fname=basename($_FILES["userfile"]["name"]);
	$writeday=date("Y-m-d(h:i)");

	//1. 실제 파일서버에 물리적 파일을 올려야 한다.
	//파일 서버의 경로를 읽어온다.
	$uploaddir=$_SERVER["DOCUMET_ROOT"]."/inc/fileServer/";
	$uploadfile=$uploaddir.$fname;
	move_uploaded_file($_FILES["userfile"]["tmp_name"],$uploadfile);


	//2. DB 서버에 파일과 관련된 경로와 정보를 저장한다.
	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="insert into inc (title,writer,writeday,content,fname) values('$title','$writer','$writeday','$content','$fname')";
	//echo $query;exit;
	mysqli_query($conn,$query);
?>

	<meta http-equiv="refresh" content="0;url=inc.php">