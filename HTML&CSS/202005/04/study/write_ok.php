<?php
	$hp=$_POST["hp"];
	$name=$_POST["name"];
	$gender=$_POST["gender"];
	$age=$_POST["age"];
	$addr=$_POST["addr"];
	$email=$_POST["email"];
	$grade=$_POST["grade"];
	$major=$_POST["major"];
	$homepage=$_POST["homepage"];

	// echo "$hp";
	$conn=mysqli_connect("localhost", "root", "autoset", "testdb");
	$query="insert into student
	(
	hp, 
	name,
	gender,
	age,
	addr,
	email,
	grade,
	major,
	homepage
	)
	values
	(
	'$hp',
	'$name',
	'$gender',
	$age,
	'$addr',
	'$email',
	'$grade',
	'$major',
	'$homepage'
	)
	";
	// echo $query;exit;
	mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url=index.php">