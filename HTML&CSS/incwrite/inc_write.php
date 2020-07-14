<!DOCTYPE html>
<html>

<head>
   <link rel="stylesheet" href="style.css">
   <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
   <script src="script.js" defer="defer"></script>
   <meta charset="UTF-8">
   <title></title>
   <script>
      function send() {
         if (frm1.writer.value == "") {
            alert("작성자를 입력하세요");
            frm1.writer.focus();
            return false;
         }
         if (frm1.title.value == "") {
            alert("제목을 입력하세요");
            frm1.title.focus();
            return false;
         }
         if (frm1.content.value == "") {
            alert("내용을 입력하세요");
            frm1.content.focus();
            return false;
         }
         if (frm1.userfile.value == "") {
            alert("파일을 첨부하세요");
            frm1.userflie.focus();
            return false;
         }
         document.frm1.submit();
      }
   </script>
</head>

<body>
   <br><br>
   <form enctype="multipart/form-data" name="frm1" method="post" action="inc_write_ok.php">
      <table class="table2" width="800">
         <tr>
            <th colspan="2" align="center">자료실 쓰기양식</th>
         </tr>
         <tr>
            <td>글쓴이</td>
            <td><input type="text" name="writer"></td>
         </tr>
         <tr>
            <td>글제목</td>
            <td><input type="text" name="title" size="50"></td>
         </tr>
         <tr>
            <td>글내용</td>
            <td><textarea name="content" rows="15" cols="75"></textarea></td>
         </tr>
         <tr>
            <td>첨부파일</td>
            <td><input type="file" name="userfile"></td>
         </tr>
         <tr>
            <td colspan="2" align="center">
               <input type="button" class="bt1" value="작성완료" onclick="send()">
               <input type="reset" class="bt1" value="새로작성">
               <input type="button" class="bt1" value="리스트로" onclick="location.href='inc.php'">
            </td>
         </tr>
      </table>
   </form>
</body>

</html>