<?php
	$name=$_POST["name"];
	$birth=$_POST["birth"];
	$height=$_POST["height"];
	$weight=$_POST["weight"];
	$memo=$_POST["memo"];
	$fname=basename($_FILES["pic"]["name"]);

	//실제 파일서버에 물리적파일을 올려 파일서버의 경로를 읽어온다
	$uploaddir=$_SERVER["DOCUMENT_ROOT"]."/act/fileServer/";
	$uploadfile=$uploaddir.$fname;

	//무브업로드 파일함수를 이용하서 선택된 파일을 파일서버에 올림
	move_uploaded_file($_FILES["pic"]["tmp_name"],$uploadfile);

	//디비서버에 파일과 관련된 경로와 정보를 저장한다.
	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="insert into act (name,birth,height,weight,pic,memo) values ('$name','$birth','$height','$weight','$fname','$memo')";
	mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url=index.php">