<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <br><br>
<form action="login_ok.php" method="post" name="frm">
  <table class="table" style="width: 300px">
    <tr>
      <td>ID</td>
      <td>
        <input type="text" name="id">
      </td>
    </tr>
    <tr>
      <td>PW</td>
      <td>
        <input type="password" name="pw">
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <input type="button" value="로그인" class="bt1" onclick="send()">
      </td>
    </tr>
  </table>
  </form>

  <script>
    function send() {
      if(frm.id.value == "") {
        alert('id를 입력해주세요');
        frm.id.focus();
        return false;
      }
      if(frm.pw.value == "") {
        alert("pw를 입력해주세요");
        frm.pw.focus();
        return false;
      }
      document.frm.submit();
    }
  </script>
</body>
</html>