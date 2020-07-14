<?php
  if(isset($_GET["page"])){
    $page=$_GET["page"];
    $group=ceil($page/5);
  } else {
    $page=1;
    $group = 1;
  }
  
  $startRow=($page-1)*10;

  $conn = mysqli_connect("localhost","root","autoset","testdb");
  $query = "select * from notice order by no desc limit $startRow,10";
  $rs = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <table class="table1">
    <tr>
      <th>순번</th>
      <th>제목</th>
      <th>작성자</th>
      <th>작성일</th>
      <th>조회수</th>
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
<?php
  echo $row["title"];
?>
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
    </tr>
<?php
  }
?>
<tr>
  <td colspan="5" align="center">
<?php
  $query1 = "select count(*) as count from notice";
  $rs2 = mysqli_query($conn,$query1);
  $row2 = mysqli_fetch_array($rs2);
  $count = $row2["count"];
  $pageCount = ceil($count / 10);
  $groupCount = ceil($pageCount / 5);
  $startPage = ($group - 1) * 5 + 1;
  $endPage = $startPage + 4;
  
  if ($group != 1 ) {
    $prevPage = ($group - 2) * 5 +1;
    echo "<a href=notice_exam.php?page=$prevPage>[PREV] </a> ";
  }
  for($i = $startPage; $i <= $endPage; $i++) {
    echo "<a href='notice_exam.php?page=$i'>[$i] </a> ";
  }
  if ($group < $groupCount) {
    $nextPage = $group * 5 + 1;
    echo "<a href='notice_exam.php?page=$nextPage'>[NEXT] </a> ";
  } 
?>
  </td>
</tr>
    <tr>
      <td colspan="5" align="center">
        <input type="button" value="공지사항추가">
      </td>
    </tr>

  </table>
</body>
</html>