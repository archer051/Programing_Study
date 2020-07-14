<?php
if (isset($_GET["page"])) {
  $page = $_GET["page"];
  $group = ceil($page / 5);
} else {
  $page = 1;
  $group = 1;
}
$sGPRecord = ($page - 1) * 10;

$conn = mysqli_connect("localhost", "root", "autoset", "testdb");
$query = "select * from inc order by no desc limit $sGPRecord,10";
$rs = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <br><br>
  <table class="table1" width="600">
    <tr>
      <th>글번호</th>
      <th>글제목</th>
      <th>작성자</th>
      <th>작성일</th>
      <th>조회수</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($rs)) {
    ?>
    <tr>
      <td>
        <?php
          echo $row["no"];
          ?>
      </td>
      <td>
        <a href="inc_content.php?no=<?php echo $row["no"] ?>      ">
          <?php echo $row["title"];            ?>
        </a>
      </td>
      <td>
        <?php
          echo $row["writer"];
          ?>
      </td>
      <td>
        <?php
          echo $row["writeday"];
          ?>
      </td>
      <td>
        <?php
          echo $row["hit"];
          ?>
      </td>
      <?php
    }
      ?>
    <tr>
      <td colspan="5" align="center">
        <?php
          $query2 = "select count(*) as cnt from inc";
          $rs2 = mysqli_query($conn, $query2);
          $row2 = mysqli_fetch_array($rs2);
          $count = ceil($row2["cnt"] / 10);
          $sGroupPage = ($group - 1) * 5 + 1;
          $eGroupPage = $sGroupPage + 4;
          $groupCount = $count / 5;
          if ($group != 1) {
            $prevGroupPage = ($group - 2) * 5 + 1;
            echo "<a href=inc.php?page=$prevGroupPage>[PREV]</a>";
          }
          echo "<a href=inc.php?page=1>[FIRST]</a>";
          for ($i = $sGroupPage; $i <= $eGroupPage; $i++) {
            if ($i > $count)
              break;
            if ($i == $page)
              echo "<a href=inc.php?page=$i><b><font color='blue'>[$i]</font></b></a>";
            else
              echo "<a href=inc.php?page=$i>[$i]</a>";
          }
          if ($group < $groupCount) {
            $nextGroupPage = ($group * 5) + 1;
            echo "<a href=inc.php?page=$nextGroupPage>[NEXT]</a>";
          }
          echo "<a href=inc.php?page=$count>[LAST]</a>";
          ?>
      </td>
    </tr>
    <tr>
      <td colspan="5" align="center">
        <input type="button" value="자료 추가" onclick="location.href='inc_write.php'" class="bt1">
      </td>
    </tr>
  </table>
</body>

</html>