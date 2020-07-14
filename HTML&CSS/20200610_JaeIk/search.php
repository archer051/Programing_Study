<?php
if(isset($_GET["page"])){
  $page=$_GET["page"];
  $group= ceil($page/5);
}else{
  $page=1;
  $group=1;
}
$startRow= ($page-1)*12;
  $search=$_POST["search"];
  $searchString=$_POST["searchString"];
  //text에 입력한 값.

  $conn=mysqli_connect("localhost","root","autoset","testdb");

  if($search=="name"){
      $query="select * from act where name='$searchString'";
  }else {
    $query="select * from act where char1 like '$searchString'";
  }
  $rs=mysqli_query($conn,$query);
?>
<!DOCTYPE html>

<html lang="ko">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<title></title>
</head>
<body>


  <div style="width:900px; text-align:left; margin-top:30px;">
  <font color="red"><b>[<?php echo mysqli_num_rows($rs) ?>]</b></font>몇건의 데이터가 검색되었습니다.
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
  <div style="width:900px;text-align:center;
  margin-top:30px; margin-bottom:30px;">
    <input type="button" value="추가하기" class="bt2"
    onclick="location.href='inc_write_exam.php'">
  </div>
</section>
</body>
</html>
