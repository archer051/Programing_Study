<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form name="frm1" action="login_ok.php" method="post">
    <table>
      <tr>
        <td>ID</td>
        <td>
          <input type="text" name="id">
        </td>
      </tr>
      <tr>
        <td>PASSWORD</td>
        <td>
          <input type="password" name="pw">
        </td>
      </tr>
      <tr>
        <td>
          <input type="button" value="회원가입" onclick="location.href='join.php'">
        </td>
        <td>
          <input type="submit" value="로그인">
        </td>
      </tr>
    </table>
  </body>
  </form>
</html>
