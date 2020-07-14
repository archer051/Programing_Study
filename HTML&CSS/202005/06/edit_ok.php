<?php
	$enum=$_POST["enum"];
	$name=$_POST["name"];
	$partname=$_POST["partname"];
	$position=$_POST["position"];
	$hp=$_POST["hp"];
	$addr=$_POST["addr"];
	$email=$_POST["email"].$_POST["emiail_etc"];
	$marriage_yn=$_POST["marriage_yn"];
	$gender=$_POST["gender"];
	$cash=$_POST["cash"];
	$birthday=$_POST["birthday"];
	$career_yn=$_POST["career_yn"];
	$laststudy=$_POST["laststudy"];
	$major=$_POST["major"];

	// echo "$hp";
	$conn=mysqli_connect("127.0.0.1", "root", "autoset", "testdb");
	$query=
	"update 
		sawon
	set 
		enum = '$enum',
		name = '$name',
		partname = '$partname',
		position = '$position',
		hp = '$hp',
		addr = '$addr',
		email = '$email',
		marriage_yn = '$marriage_yn',
		gender = '$gender',
		cash = '$cash',
		birthday = '$birthday',
		career_yn = '$career_yn',
		laststudy = '$laststudy',
		major = '$major'
	where
		hp = '$hp';
	";
	// echo $query;exit;
	mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url=index.php">