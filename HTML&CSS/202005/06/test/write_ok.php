<?php
	$num=$_POST["num"];
	$name=$_POST["name"];
	$korean=$_POST["korean"];
	$english=$_POST["english"];
	$math=$_POST["math"];
	$total=$korean+$english+$math;
	$avg=$total/3;
	if($avg >= 90)
		$bigo="우등";
	else if($avg < 60)
		$bigo="보충";
	else
		$bigo="초과";
	
	$conn=mysqli_connect("localhost", "root", "autoset", "testdb");
	$query="insert into r_subject
	(
	num, 
	name,
	korean,
	english,
	math,
	total,
	avg,
	bigo
	)
	values
	(
	$num,
	'$name',
	'$korean',
	'$english',
	'$math',
	'$total',
	'$avg',
	'$bigo'
	)
	";
	// echo $query;exit;
	mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url=index.php">