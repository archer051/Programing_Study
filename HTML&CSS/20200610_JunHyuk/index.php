<!DOCTYPE html>
<?php
	session_start();
?>
<html lang="en">
<head>
	<script>
		function winOpen(){
			window.open("login.php","frmLOGIN","width=300,height=150");
		}
	</script>
	<link rel="stylesheet" href="style.css">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<header>
		<?php if(isset($_SESSION["id"])) 
			{ ?><a href="logout.php">LOGOUT</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<?php }else 
			{ ?><a href="javascript:winOpen()">LOGIN</a>&nbsp;&nbsp;&nbsp;&nbsp;
		<?php } ?>
		<a href="join.php">JOIN</a>
	
	</header>
	<div id="wrap">
		<?php
			if(isset($_GET["page"])){
				$page=$_GET["page"];
				$group=ceil($page/5);
			}else{
				$page=1;
				$group=1;
			}
			$startRow=($page-1)*12;
			$conn=mysqli_connect("localhost","root","autoset","testdb");
			$query="select * from act order by no desc limit $startRow,12";
			$rs=mysqli_query($conn,$query);
		?>
		<div style="width:900px; text-align:right; margin-top:30px;">
			<form name="frm1" method="post" action="search.php">
				<select name="search">
					<option value="name">이름</option>
					<option value="memo">특징</option>
				</select>&nbsp;
				<input type="text" name="searchString">&nbsp;
				<input type="submit" class="bt1" value="검색">
			</form>
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
		<div style="width:900px; text-align:center;">
			<?php
				$startPage=($group-1)*5+1;
				$endPage=$startPage+4;

				if($group != 1){
					echo "<a href='index.php?page=1'>FIRST</a>";
					echo "&nbsp;&nbsp;";
				}

				if($group != 1){
					$prevPage=($group-2)*5+1;
					echo "<a href='index.php?page=$prevPage'>PREV</a>";
				}
				echo "&nbsp;&nbsp;";

				for($i=$startPage;$i<=$endPage;$i++){
					if($i>$pageCount){break;}
					if($i==$page){
						echo "<a href='index.php?page=$i'><font color='red'><b>[$i]</b></font></a>";
					}else{
						echo "<a href='index.php?page=$i'>[$i]</a>";
					}
				}
				echo "&nbsp;&nbsp;";
				if($group<$groupCount){
					$nextPage=$group*5+1;
					echo "<a href='index.php?page=$nextPage'>NEXT</a>";
					echo "&nbsp;&nbsp;";
				}
				if($group<$groupCount){
					$lastPage=$pageCount;
					echo "<a href='index.php?page=$lastPage'>LAST</a>";
				}
			?>
		</div>
	<!-- 이부분은 관리자만 볼수 있어야 한다. 조건은 로그인 한 상태이고 level이 admin이어야 한다.-->
	<?php if(isset($SESSION["id"])) { ?>
		<?php 
			$query2="select level from member1 where id='$_SESSION[id]'";
			$rs2=mysqli_query($conn,$query2);
			$row2=mysqli_fetch_array($rs2);
			if($row2["level"]=="admin"){
		?>
		<div style="width:900px; text-align:center; margin-top:30px; margin-bottom:30px;">
			<input type="button" value="추가하기" class="bt1" onclick="location.href='write.php'">
		</div>
	<?php } ?>
	<?php } ?>
		<!-- 이부분은 관리자만 볼수 있어야 한다.-->
	</div>
</body>
</html>