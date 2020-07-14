<?php  
	$conn=mysqli_connect("localhost", "root", "autoset", "testdb");
	// $conn=mysql_connect()
	// $conn=mysqli_connect("localhost", "root", "autoset", "testdb");
	// mysqli_connect("localhost", "root", "autoset", "testdb");
	// mysqli_connect("dbaddr","dbid","dbpw","dbname");
	$query="select * from student";
	// $query="select * from student";
	/*$conn, $query는 변수이다*/
	$rs=mysqli_query($conn,$query);
	// $rs=mysqli_query($conn,$query);
	// mysqli_fetch_array($rs)   fetch=가지고오다
	
	// $row=mysqli_fetch_array($rs)
	// $row["hp"]
	// $row["gender"]
	// $row["age"]
	// $row["name"]
	// $row["addr"]
	// $row["grade"]
	// $row["major"]
	// $row["email"]
	// $row["homepage"]
	$cnt=mysqli_num_rows($rs);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="script.js" defer="defer"></script>
	<title>DB실습</title>
</head>
<body>
	<!-- <br><br> -->
	<!-- <table  border="1" cellpadding="10" cellspacing="5" align="center" > -->
	<table  class="table1" >
		<tr>
			<td>휴대폰번호</td>			
			<td>이름</td>			
			<td>성별</td>			
			<td>나이</td>			
			<td>주소</td>			
			<td>이메일주소</td>			
			<td>최종학력</td>			
			<td>전공</td>			
			<td>홈페이지주소</td>			
		</tr>
		<?php
			while ($row=mysqli_fetch_array($rs))
			{
			?>
		
		<tr>
			<td><?php echo $row["hp"]?></td>
			<td><?php echo $row["name"]?></td>
			<td><?php echo $row["gender"]?></td>
			<td><?php echo $row["age"]?></td>
			<td><?php echo $row["addr"]?></td>
			<td><?php echo $row["email"]?></td>
			<td><?php echo $row["grade"]?></td>
			<td><?php echo $row["major"]?></td>
			<td><?php echo $row["homepage"]?></td>
		</tr>
	<?php } ?>
	<tr>
		<td colspan="9" align="center">
			<input type="button" value="학생 추가" onclick="location.href='write.php'" class="bt">
		</td>
	</tr>
	<tr>
		<td colspan="9" align="right">
			<font color="red"><b>
			<?php echo $cnt ?></b></font>건의 데이터가 검색되었습니다.
		</td>
	</tr>
		<!-- <?php
			$row=mysqli_fetch_array($rs)
		?>
		<tr>
			<td><?php echo $row["hp"]?></td>
			<td><?php echo $row["name"]?></td>
			<td><?php echo $row["gender"]?></td>
			<td><?php echo $row["age"]?></td>
			<td><?php echo $row["addr"]?></td>
			<td><?php echo $row["email"]?></td>
			<td><?php echo $row["grade"]?></td>
			<td><?php echo $row["major"]?></td>
			<td><?php echo $row["homepage"]?></td>
		</tr>
		<?php
			$row=mysqli_fetch_array($rs)
		?>
		<tr>
			<td><?php echo $row["hp"]?></td>
			<td><?php echo $row["name"]?></td>
			<td><?php echo $row["gender"]?></td>
			<td><?php echo $row["age"]?></td>
			<td><?php echo $row["addr"]?></td>
			<td><?php echo $row["email"]?></td>
			<td><?php echo $row["grade"]?></td>
			<td><?php echo $row["major"]?></td>
			<td><?php echo $row["homepage"]?></td>
		</tr>
		<?php
			$row=mysqli_fetch_array($rs)
		?>
		<tr>
			<td><?php echo $row["hp"]?></td>
			<td><?php echo $row["name"]?></td>
			<td><?php echo $row["gender"]?></td>
			<td><?php echo $row["age"]?></td>
			<td><?php echo $row["addr"]?></td>
			<td><?php echo $row["email"]?></td>
			<td><?php echo $row["grade"]?></td>
			<td><?php echo $row["major"]?></td>
			<td><?php echo $row["homepage"]?></td>
		</tr>
		<?php
			$row=mysqli_fetch_array($rs)
		?>
		<tr>
			<td><?php echo $row["hp"]?></td>
			<td><?php echo $row["name"]?></td>
			<td><?php echo $row["gender"]?></td>
			<td><?php echo $row["age"]?></td>
			<td><?php echo $row["addr"]?></td>
			<td><?php echo $row["email"]?></td>
			<td><?php echo $row["grade"]?></td>
			<td><?php echo $row["major"]?></td>
			<td><?php echo $row["homepage"]?></td>
		</tr>
		<?php
			$row=mysqli_fetch_array($rs)
		?>
		<tr>
			<td><?php echo $row["hp"]?></td>
			<td><?php echo $row["name"]?></td>
			<td><?php echo $row["gender"]?></td>
			<td><?php echo $row["age"]?></td>
			<td><?php echo $row["addr"]?></td>
			<td><?php echo $row["email"]?></td>
			<td><?php echo $row["grade"]?></td>
			<td><?php echo $row["major"]?></td>
			<td><?php echo $row["homepage"]?></td>
		</tr>
		<?php
			$row=mysqli_fetch_array($rs)
		?>
		<tr>
			<td><?php echo $row["hp"]?></td>
			<td><?php echo $row["name"]?></td>
			<td><?php echo $row["gender"]?></td>
			<td><?php echo $row["age"]?></td>
			<td><?php echo $row["addr"]?></td>
			<td><?php echo $row["email"]?></td>
			<td><?php echo $row["grade"]?></td>
			<td><?php echo $row["major"]?></td>
			<td><?php echo $row["homepage"]?></td>
		</tr>
		<?php
			$row=mysqli_fetch_array($rs)
		?>
		<tr>
			<td><?php echo $row["hp"]?></td>
			<td><?php echo $row["name"]?></td>
			<td><?php echo $row["gender"]?></td>
			<td><?php echo $row["age"]?></td>
			<td><?php echo $row["addr"]?></td>
			<td><?php echo $row["email"]?></td>
			<td><?php echo $row["grade"]?></td>
			<td><?php echo $row["major"]?></td>
			<td><?php echo $row["homepage"]?></td>
		</tr>
		<?php
			$row=mysqli_fetch_array($rs)
		?>
		<tr>
			<td><?php echo $row["hp"]?></td>
			<td><?php echo $row["name"]?></td>
			<td><?php echo $row["gender"]?></td>
			<td><?php echo $row["age"]?></td>
			<td><?php echo $row["addr"]?></td>
			<td><?php echo $row["email"]?></td>
			<td><?php echo $row["grade"]?></td>
			<td><?php echo $row["major"]?></td>
			<td><?php echo $row["homepage"]?></td>
		</tr>
		<?php
			$row=mysqli_fetch_array($rs)
		?>
		<tr>
			<td><?php echo $row["hp"]?></td>
			<td><?php echo $row["name"]?></td>
			<td><?php echo $row["gender"]?></td>
			<td><?php echo $row["age"]?></td>
			<td><?php echo $row["addr"]?></td>
			<td><?php echo $row["email"]?></td>
			<td><?php echo $row["grade"]?></td>
			<td><?php echo $row["major"]?></td>
			<td><?php echo $row["homepage"]?></td>
		</tr>
		<?php
			$row=mysqli_fetch_array($rs)
		?>
		<tr>
			<td><?php echo $row["hp"]?></td>
			<td><?php echo $row["name"]?></td>
			<td><?php echo $row["gender"]?></td>
			<td><?php echo $row["age"]?></td>
			<td><?php echo $row["addr"]?></td>
			<td><?php echo $row["email"]?></td>
			<td><?php echo $row["grade"]?></td>
			<td><?php echo $row["major"]?></td>
			<td><?php echo $row["homepage"]?></td>
		</tr>
		<?php
			$row=mysqli_fetch_array($rs)
		?>
		<tr>
			<td><?php echo $row["hp"]?></td>
			<td><?php echo $row["name"]?></td>
			<td><?php echo $row["gender"]?></td>
			<td><?php echo $row["age"]?></td>
			<td><?php echo $row["addr"]?></td>
			<td><?php echo $row["email"]?></td>
			<td><?php echo $row["grade"]?></td>
			<td><?php echo $row["major"]?></td>
			<td><?php echo $row["homepage"]?></td>
		</tr>
		<?php
			$row=mysqli_fetch_array($rs)
		?>
		<tr>
			<td><?php echo $row["hp"]?></td>
			<td><?php echo $row["name"]?></td>
			<td><?php echo $row["gender"]?></td>
			<td><?php echo $row["age"]?></td>
			<td><?php echo $row["addr"]?></td>
			<td><?php echo $row["email"]?></td>
			<td><?php echo $row["grade"]?></td>
			<td><?php echo $row["major"]?></td>
			<td><?php echo $row["homepage"]?></td>
		</tr> -->
	</table>
	<header></header>
	<div class="wrap"></div>
	<footer></footer>
</body>
</html>