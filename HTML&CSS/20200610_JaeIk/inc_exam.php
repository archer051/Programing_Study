<?php
if(isset($_GET["page"])){
  $page=$_GET["page"];
  $group= ceil($page/5);
}else{
  $page=1;
  $group=1;
}
$startRow= ($page-1)*12;
  $conn=mysqli_connect("localhost","root","autoset","testdb");
  $query="select * from act order by no desc limit $startRow, 12";
  $rs=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<?php
  session_start();
 ?>
 <script>
   function winOpen() {
     window.open("login.php","frmLogin","width=300","height=150");
   }
 </script>
<html lang="ko">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<title></title>
</head>
<body>
  <header>
    <?php if(isset($_SESSION["id"])){ ?>
      <a href="logout.php">Logout</a>
    <?php }else{ ?>
      <a href="javascript:winOpen()">Login</a>
    <?php } ?>
  </header>
  <div style="width:900px; text-align:left; margin-top:30px;">
  <form name="frm1" method="post" action="search.php">
    <select name="search">
      <option value="name">이름</option>
      <option value="char1">특징</option>
    </select>
    <input type="text" name="searchString">&nbsp;
    <input type="submit" class="bt1" value="검색">
  </form>
  </div>
<section>
  <ul class="list">
  <?php while($row=mysqli_fetch_array($rs)) { ?>
    <li>
      <a href="inc_content_exam.php?no=<?php echo $row["no"]?>" class="inner">
      <div class="thumb">
      <img src="../fileServer/<?php echo $row["fname"] ?>">
      <div class="title"><?php echo $row["name"] ?></div>
      </div>
      </a>
    </li>
  <?php } ?>
  </ul>
</section>
<section>
  <div style="width:900px;text-align:center;">
  <?php
  $query2="select count(*) as cnt from act";
  $rs2=mysqli_query($conn,$query2);
  $row2=mysqli_fetch_array($rs2);
  $pageCount=ceil($row2["cnt"]/12);
  $groupCount=ceil($pageCount/5);
  ?>
  <?php
  if($group != 1){
    echo "<a href='inc_exam.php?page=1'><b><font color='purple'>FIRST</font></b></a>";
  }
  if($group != 1){
    $prevPage= ($group-2)*5+1;
    echo "<a href='inc_exam.php?page=$prevPage'>PREV</a>";
  }
  $startPage=($group-1)*5+1;
  $endPage= $startPage+4;
  for($i= $startPage;$i<= $endPage;$i++){
  if($i>$pageCount){break;}
  if($i==$page){
  echo "<a href='inc_exam.php?page=$i'><font color='magenta'>[$i]</font></a>";
  } else {
  echo"<a href='inc_exam.php?page=$i'>[$i]</a>";
  }
}
  echo "&nbsp;&nbsp;";
if($group<$groupCount){
    $nextPage=$group*5+1;
    echo "<a href='inc_exam.php?page=$nextPage'>NEXT</a>";
    echo "&nbsp;&nbsp;";
    echo "<a href='inc_exam.php?page=$pageCount'><b><font color='purple'>LAST</font></b></a>";
  }
  ?>
  </div>
  <!-- 이 부분은 관리자만 볼 수 있어야한다 -->
  <!-- 조건은 로그인한 상태이고 또한 level이 admin이어야 한다 -->
  <?php if(isset($_SESSION["id"])){ ?>
    <?php
      $query3="select level from member1 where id='$_SESSION[id]'";
      $rs3=mysqli_query($conn,$query3);
      $row3=mysqli_fetch_array($rs3);
      if($row3["level"]=="admin"){
      ?>
  <div style="width:900px;text-align:center;
  margin-top:30px; margin-bottom:30px;">
    <input type="button" value="추가하기" class="bt2"
    onclick="location.href='inc_write_exam.php'">
  <?php } ?>
  <?php } ?>
    <!-- 이 부분은 관리자만 볼 수 있어야한다. -->
  </div>
</section>
</body>
</html>
