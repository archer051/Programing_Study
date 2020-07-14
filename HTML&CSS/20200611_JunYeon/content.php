<?php
  session_start();
  $no = $_GET["no"];
  $conn = mysqli_connect("localhost", "root", "autoset", "testdb");
  $query = "select * from dog where no = $no";
  $rs = mysqli_query($conn,$query);
  $row = mysqli_fetch_array($rs);
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
<form enctype="multipart/form-data" action="write_ok.php" method="post" name="frm">
<table class="table">
  <tr>
    <td colspan="2" align="center">강아지 상세정보</td>
  </tr>
  <tr>
    <td>번호:</td>
    <td>
      <?php echo $row["no"] ?>
    </td>
  </tr>
  <tr>
    <td>견종:</td>
    <td>
      <?php echo $row["dog_name"] ?>
    </td>
  </tr>
  <tr>
    <td>나이:</td>
    <td>
      <?php echo $row["bMonth"] ?>
    </td>
  </tr>
  <tr>
    <td>가격:</td>
    <td>
      <?php echo $row["price"] ?>
    </td>
  </tr>
  <tr>
    <td>사진:</td>
    <td>
      <img width="200" height="200" src="../fileServer/<?php echo $row["pic"] ?>">
    </td>
  </tr>
  <tr>
    <td>성별:</td>
    <td>
      <?php echo $row["gendar"] ?>
    </td>
  </tr>
  <tr>
    <td>특징:</td>
    <td>
      <?php echo $row["memo"] ?>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center">
    <input type="button" value="삭제하기" class="bt1" onclick="del()">
    <input type="button" value="메인화면" class="bt1" onclick="location.href='index.php'">
    <input type="button" value="전송하기" class="bt1">
    </td>
  </tr>
</table>
</form>

<script>
  function del() {
    if(confirm("정말로 삭제하시겠습니까?")) {
      location.href='delete.php?no=<?php echo $row["no"] ?>&pic=<?php echo $row["pic"] ?>';
      // location.href='delete.php?no='+aa+"& pic="+bb;
    }
  }
</script>
</body>
</html>