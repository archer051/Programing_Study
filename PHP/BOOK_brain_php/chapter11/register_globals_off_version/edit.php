<?php
	//데이터 베이스 연결하기
	include "db_user.php";
	include "db_info.php";
	$id = isset($_GET['id']) ? $_GET['id'] : 0;
	$no = isset($_GET['no']) ? $_GET['no'] : 0;

	$pdo = dbConnect($dsn,$user,$password,$dbName);
	// 먼저 쓴 글의 정보를 가져온다.
	// $result=mysql_query("SELECT * FROM board WHERE id=$id", $conn);
	// $row=mysql_fetch_array($result);
	$query="SELECT * FROM board WHERE id=$id";
	$stmt=$pdo->prepare($query);
	$stmt->execute();
	$result=$stmt->fetch(PDO::FETCH_ASSOC);
	include "./html_tmpl/edit.tmpl.html";
?>
