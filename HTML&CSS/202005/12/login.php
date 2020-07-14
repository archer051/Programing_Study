<script>
  function send()
  {
    document.frm1.submit();
  }
</script>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br>
    <form name="frm1" action="login_ok.php" method="post">
      <table class="login_table">
        <tr>
          <td width="80" align="right">아이디</td>
          <td width="200">
            <input type="text" name="ID">
          </td>
        </tr>
        <tr>
          <td width="80" align="right">암호</td>
          <td width="200">
            <input type="password" name="PW">
          </td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="button" value="로그인" class="bt" onclick="send()">
            <input type="reset" value="새로작성" class="bt">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
