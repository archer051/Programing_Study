<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <title>Login</title>
</head>
<body>
  <br>
  <form name="frm1" method="POST" action="login_ok.php">
    <table class="tableWrite">
      <tr>
        <td>ID</td>
        <td>
          <input type="text" name="loginId" maxlength="20">
        </td>
      </tr>
      <tr>
        <td>PW</td>
        <td>
          <input type="password" name="loginPw" maxlength="20">
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="button" class="btnWrite" value="확인" onclick="login()">
          <input type="button" class="btnWrite" value="취소" onclick="cancel()">
        </td>
      </tr>
    </table>
  </form>
</body>
</html>
<script>
  function login() {
    if(frm1.loginId.value == 0) {
      alert("ID를 입력해주세요");
      frm1.loginId.focus();
      return false;
    }
    if(frm1.loginPw.value == 0) {
      alert("PW를 입력해주세요");
      frm1.loginPw.focus();
      return false;
    }
    document.frm1.submit();
  }
</script>