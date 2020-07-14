<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="style.css">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		$search=$_POST["search"];//name,memo
		$searchString=$_POST["searchString"];//text에 입력한 값
		if(isset($_GET["page"])){
			$page=$_GET["page"];
			$group=ceil($page/5);
		}else{
			$page=1;
			$group=1;
		}
		$startRow=($page-1)*12;
		$conn=mysqli_connect("localhost","root","autoset","testdb");
		if($search=="name"){
			$query="select * from act where name='$searchString'";
		}else{
			$query="select * from act where memo like '%$searchString%'";
		}
		$rs=mysqli_query($conn,$query);
	?>
	<div style="width:900px; text-align:right; margin-top:30px;">
		<font color="red"><b>[<?php echo mysqli_num_rows($rs) ?>]</b></font> 건의 데이터가 검색되었습니다.
	</div>
	<section>
		<ul class="list">
			<?php while($row=mysqli_fetch_array($rs)){ ?>
			<li>
				<a href="content.php?no=<?php echo $row["no"] ?>" class="inner">
					<div class="thumb"><img src="../act/fileServer/<?php echo $row["pic"] ?>"></div>
					<div class="title"><?php echo $row["name"] ?></div>
				</a>
			</li>
			<?php } ?>
		</ul>
	</section>
	<?php
		$query2="select count(*) as cnt from act";
		$rs2=mysqli_query($conn,$query2);
		$row2=mysqli_fetch_array($rs2);
		$pageCount=ceil($row2["cnt"]/12);
		$groupCount=ceil($pageCount/5);
	?>
		<div style="width:900px; text-align:center; margin-top:30px; margin-bottom:30px;">
			<input type="button" value="메인화면" class="bt1" onclick="location.href='index.php'">
		</div>
</body>
</html>