<?php
$conn = mysqli_connect("127.0.0.1","root","autoset","testdb");
$query = "select * from notice order by no desc;";
$rs = mysqli_query($conn, $query);
 ?>

<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>공지사항</title>
  </head>
  <body>
    <table class="table">
      <tr>
        <td style="font-size: 1.0em; font-weight: bold;">글번호</td>
        <td style="font-size: 1.0em; font-weight: bold;">제목</td>
        <td style="font-size: 1.0em; font-weight: bold;">작성자</td>
        <td style="font-size: 1.0em; font-weight: bold;">작성일</td>
        <td style="font-size: 1.0em; font-weight: bold;">조회수</td>
      </tr>
      <?php
      while ($row = mysqli_fetch_array($rs)) {
       ?>
      <tr>
        <td>
          <?php echo $row["no"] ?>
        </td>
        <td>
          <a href="notice_content.php?no=<?php echo $row["no"] ?>">
            <?php echo $row["title"] ?>
          </a>
        </td>
        <td>
          <?php echo $row["writer"] ?>
        </td>
        <td>
          <?php echo $row["writeday"] ?>
        </td>
        <td>
          <?php echo $row["hit"] ?>
        </td>
      </tr>
      <?php } ?>
    </table>
    <div align="center">
        <input type="button"  value="공지사항 추가하기" class="bt" onclick="location.href='notice_write.php'">
    </div>

  </body>
</html>
