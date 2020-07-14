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
	$conn=mysqli_connect("localhost", "root", "autoset", "testdb");
	$query="insert into sawon
	(
	enum, 
	name,
	partname,
	position,
	hp,
	addr,
	email,
	marriage_yn,
	gender,
	cash,
	birthday,
	career_yn,
	laststudy,
	major
	)
	values
	(
	$enum,
	'$name',
	'$partname',
	'$position',
	'$hp',
	'$addr',
	'$email',
	'$marriage_yn',
	'$gender',
	'$cash',
	'$birthday',
	'$career_yn',
	'$laststudy',
	'$major'
	)
	";
	// echo $query;exit;
	mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url=index.php">