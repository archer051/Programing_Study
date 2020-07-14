<?php
	include "dbconn.php";
	$id=$_POST["id"];
	$pw=$_POST["pw1"];
	$name=$_POST["name"];
	$hp=$_POST["hp1"]."-".$_POST["hp2"]."-".$_POST["hp3"];
	$email=$_POST["email1"]."@".$_POST["email2"];
	$gender=$_POST["gender"];
	if(isset($_POST["hobby1"])){
		$hobby1=$_POST["hobby1"];
	}else{
		$hobby1="";
	}
	if(isset($_POST["hobby2"])){
		$hobby2=$_POST["hobby2"];
	}else{
		$hobby2="";
	}
	if(isset($_POST["hobby3"])){
		$hobby3=$_POST["hobby3"];
	}else{
		$hobby3="";
	}
	if(isset($_POST["hobby4"])){
		$hobby4=$_POST["hobby4"];
	}else{
		$hobby4="";
	}
	if(isset($_POST["hobby5"])){
		$hobby5=$_POST["hobby5"];
	}else{
		$hobby5="";
	}
	$comment=$_POST["comment"];
	$query="insert into member (id,pw,name,hp,email,gender,hobby1,hobby2,hobby3,hobby4,hobby5,comment) values ('$id','$pw','$name','$hp','$email','$gender','$hobby1','$hobby2','$hobby3','$hobby4','$hobby5','$comment')";
	mysqli_query($conn,$query);
	//$_SESSION["id"]=$id;
?>
<script>
	alert("회원가입을 축하드립니다."+"\n"+"인덱스창으로 이동하여 로그인 후 사용바랍니다");
</script>
<meta http-equiv="refresh" content="0;url=index.php">
