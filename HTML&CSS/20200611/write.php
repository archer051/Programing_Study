<html lang="ko">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
  <script>
    function checkNumber() {
      var strTemp = frm1.price.value;
      for(var i = 0; i < strTemp.length; i++) {
        if (strTemp.charCodeAt(i) < 48 || strTemp.charCodeAt(i) > 57) {
          alert("숫자만 입력가능합니다.");
           frm1.price.value = "";
           frm1.price.focus();
           return false;
        }
      }
    }
    function send() {
      if(frm1.dogTypeName.value == 0){
        alert("견종을 입력하세요!");
        frm1.dogTypeName.value = "";
        frm1.dogTypeName.focus();
        return false;
      }
      if(frm1.price.value == 0){
        alert("가격을 입력하세요!");
        frm1.price.value = "";
        frm1.price.focus();
        return false;
      }
      if(frm1.imgfile.value == 0){
        alert("파일을 선택하세요!");
        return false;
      }
      document.frm1.submit();
    }
  </script>
  <title>Document</title>
</head>
<body>
<br><br>
  <form enctype="multipart/form-data" name="frm1" method="post" action="write_ok.php">
  <table class="tableWrite">
    <tr>
      <td>견종</td>
      <td>
        <input type="text" name="dogTypeName">
      </td>
    </tr>
    <tr>
      <td>생년/월</td>
      <td>
      <select name="dogYear">
      <script>
        var date = new Date();
        var curDate = date.getFullYear();
        var strTemp = "";
        for(var i = curDate; i >= curDate - 20; i--) {
          strTemp += "<option value=" + i + ">" + i + "</option>";
        }
        document.write(strTemp);
      </script>
      </select>
      <select name="dogMonth">
      <script>
      strTemp = "";
        for(var i = 0; i < 12; i++) {
          strTemp += "<option value=" + i + ">" + i + "</option>";
        }
        document.write(strTemp);
      </script>
      </select>
      </td>
    </tr>
    <tr>
      <td>가격</td>
      <td>
        <input type="text" name="price" onkeydown="checkNumber()">
      </td>
    </tr>
    <tr>
      <td>이미지파일</td>
      <td>
        <input type="file" name="imgfile" class="btnWrite">
      </td>
    </tr>
    <tr>
      <td>암/수</td>
      <td>
      <select name="gender">
        <option value="M">숫놈</option>
        <option value="F">암놈</option>
      </select>
      </td>
    </tr>
    <tr>
      <td>메모</td>
      <td>
        <textarea name="memo" cols="30" rows="10"></textarea>
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <input type="button" class="btnWrite" value="작성완료" onclick="send()">
        <input type="button" class="btnWrite" value="취소" onclick="location.href='index.php'">
      </td>
    </tr>
  </table>
  </form>
</body>
</html>