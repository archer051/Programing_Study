<?php
  $conn = mysqli_connect("localhost", "root", "autoset", "testdb");
  $query = "select * from inc_write_exam";
  $rs = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <script srd="http://code.jquery.com/jquery-1.12.3.min.js"></script>
  <title>Document</title>
</head>
<body>
  <table class="table1">
    <tr>
      <th>연번</th>
      <th>이름</th>
      <th>출생년도</th>
      <th>대표작</th>
      <th>키</th>
      <th>몸무게</th>
    </tr>
    <?php
    while($row=mysqli_fetch_array($rs)) {
    ?>
    <tr>
      <td>
        <?php
        echo $row["no"];
        ?>  
      </td>
      <td>
        <a href="inc_content_exam.php?no=<?php echo $row["no"] ?>">        
        <?php
        echo $row["name"];
        ?>
        </a>  
      </td>
      <td>
        <?php
        echo $row["year"];
        ?>  
      </td>
      <td>
        <?php
        echo $row["title"];
        ?>  
      </td>
      <td>
        <?php
        echo $row["height"];
        ?>  
      </td>
      <td>
        <?php
        echo $row["weight"];
        ?>  
      </td>
    </tr>
    <?php
    }
    ?>
  </table>
</body>
</html>