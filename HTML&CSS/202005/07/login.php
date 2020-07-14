<script type="text/javascript">
  function send() {

  }
</script>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
  </head>
  <body>
    <div>
      <table class="table_main">
        <tr>
          <td>ID:</td>
          <td>
            <input type="text" name="login_id" value="" size="20">
          </td>
        </tr>
        <tr>
          <td>PW:</td>
          <td>
            <input type="password" name="login_pw" value="" size="20">
          </td>
        </tr>
      </table>
    </div>
    <div align="center" style="margin-top: 10px;">
      <input type="button" class="bt_main" value="로그인" onclick="send()">
      <input type="button" class="bt_main" value="취소" onclick="location.href='index.php'">
    </div>
  </body>
</html>
