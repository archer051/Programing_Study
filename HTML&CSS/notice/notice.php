<?php
  if (isset($_GET["page"])) {
    $page=$_GET["page"];
    $group=ceil($page/5);
  } else {
    $page=1;
    $group=1;
  }
  //읽어온 페이지값을 기준으로 startRow를 구한다.
  $startRow=($page - 1) * 10;
  $conn=mysqli_connect("localhost","root","autoset","testdb");
  $query="select * from notice order by no desc limit $startRow,10";
  $rs=mysqli_query($conn,$query); //record set의 약자 rs result의 약자인줄 알았음 ㅋㅋㅋㅋ
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
  <script src="script.js" defer="defer"></script>
  <title>Document</title>
</head>
<body>
  <br><br>
  <table class="table1">
    <tr>
      <th>번호</th>
      <th>글제목</th>
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
<?php
  $query1="select count(*) as cnt from notice";
  $rs1=mysqli_query($conn,$query1);
  $row1=mysqli_fetch_array($rs1);
  $pageCount=ceil($row1["cnt"] / 10);
  $groupCount=ceil($pageCount / 5);
?>
    <tr>
      <td colspan="5" align="center">
<?php
  if ($group != 1) {
    echo "<a href='notice.php?page=1'>[FIRST]</a>";
    $prevPage=($group - 2) * 5 + 1;
    echo "<a href='notice.php?page=$prevPage'>[PREV]</a>";
    echo "&nbsp;...&nbsp;";
  }
  //1그룹:1~5 2그룹:6~10 3그룹:11~15...
  $startPage=($group-1)*5+1;
  $endPage=$startPage+4;
  for($i = $startPage; $i <= $endPage; $i++) {
    if ($i > $pageCount) 
      break;
    if ($i==$page) {
      echo "<a href='notice.php?page=$i'><b><font color='blue'>[$i]</font></b></a> ";
    } else {
      echo "<a href='notice.php?page=$i'>[$i]</a> ";
    }
    
  }
  if ($group < $groupCount) {
    $nextPage=$group * 5 + 1;
    echo "&nbsp;...&nbsp;";
    echo "<a href='notice.php?page=$nextPage'>[NEXT]</a>";
    echo "<a href='notice.php?page=$pageCount'>[FINAL]</a>";
  }
?>
      </td>
    </tr>
    <tr>
      <td colspan="5" align="center">
        <input type="button" value="공지사항추가" class="bt1" onclick="location.href='notice_write.php'">
        <input type="button" value="Home" class="bt1" onclick="location.href='notice.php'">
      </td>
    </tr>
  </table>
</body>
</html>