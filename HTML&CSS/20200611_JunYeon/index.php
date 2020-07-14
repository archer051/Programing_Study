<?php
  session_start();
  if(isset($_GET["page"])) {
    $page = $_GET["page"];
    $group = ceil($page / 5);
  } else {
    $page = 1;
    $group = 1;
  }
  $startRow = ($page - 1) * 12;

  $conn = mysqli_connect("localhost", "root", "autoset", "testdb");
  $query = "select * from dog order by no desc limit $startRow, 12";
  $rs = mysqli_query($conn, $query);
?>
<script>
  function login() {
    window.open("login.php","frmlogin","width=400, height=200");
  }
</script>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<div class="log">
<?php
if(isset($_SESSION["id"])) {
    echo "<a href='logout.php'>Logout</a>";
?>
<?php } else {
  echo "<a href='javascript:login()'>Login</a>";
} ?>
</div>
<br><br><br>
<form action="search.php" name="frm1" method="post">
<div style="margin-left: 65%">
  <select name="search">
    <option value="name">이름</option>
    <option value="memo">특징</option>
  </select>
  <input type="text" name="searchString">
  <input type="submit" class="bt1" value="검색">
</div>
</form>
</header>
<section>
<ul class="list">
  <?php while($row = mysqli_fetch_array($rs)) { ?>
    <li>
      <a href="content.php?no=<?php echo $row["no"] ?>">
        <div class="thumb">
          <img src="../fileServer/<?php echo $row["pic"] ?>">
        </div>
        <div class="title">
          <?php echo $row["dog_name"] ?>
        </div>
      </a>
    </li>
  <?php } ?>
</ul>
</section>
<section>
  <?php
    $query1 = "select count(*) as cnt from dog";
    $rs1 = mysqli_query($conn, $query1);
    $row1 = mysqli_fetch_array($rs1);
    $pageCount = ceil($row1["cnt"]/12);
    $groupCount = ceil($pageCount/5);

    $prevPage = ($group - 2) * 5 + 1;
    if($group != 1) {
      echo "<a href='index.php?page=1'>FST</a>";
      echo "&nbsp;&nbsp;&nbsp;";
      echo "<a href='index.php?page=$prevPage'>Prev</a>";
    }

    $startPage = ($group - 1) * 5 + 1;
    $endPage = $startPage + 4;
    for($i=$startPage;$i<=$endPage;$i++) {
      if($i>$pageCount) { break;}
      if($i == $page) {
        echo "<a href='index.php?page=$i'><font color='red'><b>[$i]</b></font></a>";
      } else {
        echo "<a href='index.php?page=$i'>[$i]</a>";
      }
    }

    if($group < $groupCount) {
      $nextPage = $group * 5 + 1;
      echo "<a href='index.php?page=$nextPage'>Next</a>";
      echo "&nbsp;&nbsp;";
      echo "<a href='index.php?page=$pageCount'>END</a>";
    }

  ?>
  <br><br>

  <?php
  if(isset($_SESSION["id"])) {
    $query2 = "select level from member where id ='$_SESSION[id]'";
    $rs2 = mysqli_query($conn,$query2);
    $row2 = mysqli_fetch_array($rs2);

    if($row2["level"] == "admin") { ?>
      <input type="button" value="추가하기" class="bt1" onclick="location.href='write.php'">
    <?php }
  }  
  ?>
</section>
</body>
</html>