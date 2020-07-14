<?php
	$num=$_POST["num"];
	$name=$_POST["name"];
	$korean=$_POST["korean"];
	$english=$_POST["englsih"];
	$math=$_POST["math"];
	$total=$korean+$english+$math;
	$avg=$total/3;
	if($avg >= 90)
		$bigo="우등";
	else if($avg < 60)
		$bigo="보충";
	else
		$bigo="초과";
	
	$conn=mysqli_connect("127.0.0.1", "root", "autoset", "testdb");
	$query=
	"update 
		r_subject
	set 
		name = '$name',
		korean = '$korean',
		english = '$english',
		math = '$math',
		total = '$total',
		avg = '$avg',
		bigo = '$bigo'
	where
		num = '$num';
	";
	// echo $query;exit;
	mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url=index.php">