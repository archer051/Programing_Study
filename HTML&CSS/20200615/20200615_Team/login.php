<script>
  function send() {
    //무결성체크...
    document.frm1.submit();
  }
</script>
<html lang="ko">

<head>
  <link rel="stylesheet" href="responsive.css">
  <script src="script.js"></script>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
<br>
  <form name="frm1" method="post" action="login_OK.php">
    <table class="table1">
      <tr>
        <td>아이디</td>
        <td>
          <input type="text" name="id">
        </td>
      </tr>
      <tr>
        <td>패스워드</td>
        <td>
          <input type="password" name="pw">
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="button" class="bt" value="Login" onclick="send()"></td>
      </tr>
    </table>
  </form>
</body>

</html>