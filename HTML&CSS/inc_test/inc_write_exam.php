<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
  <title>Document</title>
  <script>
    function send() {
       if (frm1.name.value == "") {
            alert("이름을 입력하세요");
            frm1.name.focus();
            return false;
         }
         if (frm1.title.value == "") {
            alert("대표작을 입력하세요");
            frm1.title.focus();
            return false;
         }
         if (frm1.key.value == "") {
            alert("키를 입력하세요");
            frm1.content.focus();
            return false;
         }
         if (frm1.weight.value == "") {
            alert("몸무게를 입력하세요");
            frm1.content.focus();
            return false;
         }
         if (frm1.imgfile.value == "") {
            alert("파일을 첨부하세요");
            frm1.imgfile.focus();
            return false;
         }
         if (frm1.content.value == "") {
            alert("특징을 입력하세요");
            frm1.content.focus();
            return false;
         }
      document.frm1.submit();
    }
  </script>
</head>
<body>
  <form action="inc_write_exam_ok.php" method="post" name="frm1" enctype="multipart/form-data">
  <table class="table1">
    <tr>
      <td>이름</td>
      <td>
        <input type="text" name="name" value="아스카키라라">
      </td>
    </tr>
    <tr>
      <td>출생년도</td>
      <td>
        <select name="birthYear">
        <script>
          var Date = new Date();
          var curYear = Date.getFullYear();
          // alert(curYear);
          var strTemp;
          for(var i = curYear; i >= curYear-40; i--) {
            strTemp += "<option value=" + i + ">" + i + "</option>";
          }
          document.write(strTemp);
        </script>
        </select>
      </td>
    </tr>
    <tr>
      <td>대표작</td>
      <td>
        <input type="text" name="title" value="level9">
      </td>
    </tr>
    <tr>
      <td>키</td>
      <td>
        <input type="text" name="key" value="160">
      </td>
    </tr>
    <tr>
      <td>몸무게</td>
      <td>
        <input type="text" name="weight" value="45">
      </td>
    </tr>
    <tr>
      <td>이미지파일</td>
      <td>
        <input type="file" name="imgfile" class="bt1">
      </td>
    </tr>
    <tr>
      <td>특징</td>
      <td>
        <textarea name="content" cols="30" rows="10">잘...한다</textarea>
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center">
          <input type="button" value="저장" onclick="send()" class="bt1">
          <input type="reset"" value="취소" class="bt1">
      </td>
    </tr>
  </table>
  </form>
</body>
</html>