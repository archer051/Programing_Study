<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="log">
<?php
if(isset($_SESSION["id"])) {
    echo "<a href='logout.php'>Logout</a>";
?>
<?php } else {
  echo "<a href='javascript:login()'>Login</a>";
} ?>
</div>
<br><br>
<?php
  $search = $_POST["search"];
  $searchString = $_POST["searchString"];
  $conn = mysqli_connect("localhost", "root", "autoset", "testdb");
  if($search == "name") {
    $query = "select * from dog where dog_name='$searchString'";
  } else {
    $query = "select * from dog where memo = '$searchString'";
  }
  $rs = mysqli_query($conn,$query);
?>

<div style="width:900px;text-align:right;margin-top:30px">
<font color="red"><b>[<?php echo mysqli_num_rows($rs) ?>]</b></font>건의 데이터가 검색되었습니다.
</div>
<section>
  <ul class="list">
    <?php while($row=mysqli_fetch_array($rs)) { ?>
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
  <!-- <div style="width: 900px; text-align: center;"></div> -->
  <div style="width: 900px; text-align: center; margin-top: 30px; margin-bottom: 30px; clear:both;">
    <input type="button" value="돌아가기" class="bt1" onclick="location.href='index.php'">
  </div>
</section>
</body>
</html>