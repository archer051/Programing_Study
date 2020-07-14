<?php
  session_start();
  include "dbconn.php";
  $no = $_GET["no"];
  // echo $no;
  
  if(isset($_SESSION["id"])) {
      $id = $_SESSION["id"];
      $query = "select count(*) as authority from member where level = 'admin' and id = '$id'";
      $rs = mysqli_query($conn, $query);
      $row = mysqli_fetch_array($rs);
      if($row["authority"] == "1")
        $idAuthority = "Y";
      else
        $idAuthority = "N";
    }
?>
$query = "select * from dog where no = $no";
  $rs = mysqli_query($conn, $query);
  $row= mysqli_fetch_array($rs);
  $imgdir = "../fileServer/";
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <title>content</title>
</head>
<body>
  <form action=""></form>
  <table class="tableWrite">
    <tr>
      <td>번호</td>
      <td>
        <?php echo $row["no"]; ?>
      </td>
    </tr>
    <tr>
      <td>견종</td>
      <td>
        <?php echo $row["dogTypeName"]; ?>
      </td>
    </tr>
    <tr>
      <td>생년,월</td>
      <td>
        <?php echo $row["bMonth"]; ?>
      </td>
    </tr>
    <tr>
      <td>가격</td>
      <td>
        <?php echo $row["price"]; ?>
      </td>
    </tr>
    <tr>
      <td>사진</td>
      <td>
        <div class="contentImgArea">
          <img src="<?php echo $imgdir.$row["picFName"]; ?>">
        </div>
      </td>
    </tr>
    <tr>
        <td>암/수</td>
        <td>
          <?php 
          if($row["gender"] == "M")
            echo "수컷";
           else 
            echo "암컷";
          ?>
        </td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <?php 
        if( $idAuthority == "Y") {
        ?>
          <input type="button" value="삭제하기" onclick="location.href=''">
        <?php 
        }
        ?>
        
        <input type="button" value="삭제하기">
      </td>
    </tr>
  </table>
</body>
</html>