<script type="text/javascript">
  function send() {
    document.frm1.submit();
  }
</script>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <form name="frm1" action="notice_write_ok.php" method="post">
      <table class="table">
        <tr>
          <td><b>작성자</b></td>
          <td align="left">
            <input type="text" name="writer" value="" size=20px style="border:2px solid #666;"></td>
        </tr>
        <tr>
          <td><b>글제목</b></td>
          <td align="left">
            <input type="text" name="title" value="" size=40px style="border:2px solid #666;"></td>
        </tr>
        <tr>
          <td><b>글내용</b></td>
          <td align="left">
            <textarea name="content" rows="5" cols="55" style="border:2px solid #666; height: 100px; "></textarea>
          </td>
        </tr>
      </table>
      <div class="write_area_title" align="center">
          <input type="button"  value="공지 추가" class="bt" onclick="send()">
      </div>
    </form>
  </body>
</html>
