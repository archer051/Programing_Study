<?php
	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="insert into inc (name,birth,height,weight,pic,memo) values ('테스트','2020','1'.'1','$fname','테스트중')";
	echo $query;exit;

	for($i=1;$i<=177;$i++){
		mysqli_query($conn,$query);
	}
	echo $i."건의 데이터를 벌크인서트하였습니다.";
?>
