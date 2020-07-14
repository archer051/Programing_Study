<?php
  session_start();
?>
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
<?php

if(isset($_SESSION["id"])) {?>
<div class="log">
<?php
if(isset($_SESSION["id"])) {
    echo "<a href='logout.php'>Logout</a>";
?>
<?php } else {
  echo "<a href='javascript:login()'>Login</a>";
} ?>
</div>
<br>
<form enctype="multipart/form-data" action="write_ok.php" method="post" name="frm">
<table class="table">
  <tr>
    <td colspan="2" align="center">강아지추가</td>
  </tr>
  <tr>
    <td>견종</td>
    <td>
      <input type="text" name="name">
    </td>
  </tr>
  <tr>
    <td>나이</td>
    <td>
      <select name="bMonth">
        <?php
          for($i=1;$i<=15;$i++) {
            echo "<option value=$i>$i</option>";
        } ?>
      </select>
    </td>
  </tr>
  <tr>
    <td>가격</td>
    <td>
      <input type="text" name="price">만원
    </td>
  </tr>
  <tr>
    <td>사진</td>
    <td>
      <input type="file" name="pic">
    </td>
  </tr>
  <tr>
    <td>성별</td>
    <td>
      <input type="radio" name="gendar" value="암컷" checked>암컷
      <input type="radio" name="gendar" value="수컷">수컷
    </td>
  </tr>
  <tr>
    <td>특징</td>
    <td>
      <textarea name="memo" cols="70" rows="10"></textarea>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input type="button" value="추가하기" class="bt1" onclick="send()">
    </td>
  </tr>
</table>
</form>
<?php } ?>
<script>
  function send() {
    if(frm.name.value === "") {
      alert('견종을 입력해주세요');
      frm.name.focus();
      return false;
    }
    if(frm.bMonth.value === "") {
      alert('나이를 입력해주세요');
      frm.bMonth.focus();
      return false;
    }
    if(frm.price.value === "") {
      alert('가격을 입력해주세요');
      frm.price.focus();
      return false;
    }
    if(frm.pic.value === "") {
      alert('사진을 추가해주세요');
      return false;
    }

    document.frm.submit();
  }
</script>
</body>
</html>