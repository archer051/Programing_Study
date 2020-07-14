<script>
  function email_check()
  {
    // alert("");
    var isEmailChk1=false;
    var isEmailChk2=false;
    if (frm1.email_receive_yn1.checked)
    {
      isEmailChk1=true;
    }else {
      isEmailChk1=false;
    }

    if (frm1.email_receive_yn2.checked)
    {
      isEmailChk2=true;
    }else {
      isEmailChk2=false;
    }

    if(isEmailChk1 == true && isEmailChk2 == true)
    {
      // alert("두개이상 체크하면 안됩니다!");
      frm1.email_receive_yn1.uncheckd;
      frm1.email_receive_yn2.uncheckd;
      // document.location.reload();
      // document.frm1.submit();
    }

    if(frm1.email_receive_yn1.checked == frm1.email_receive_yn2.checked)
    {
      document.location.reload();
    }
  }
</script>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <br><br>
    <form name="frm1" action="member_ok.php" method="post">
      <table class="index_table">
        <tr>
          <td align="right">아이디</td>
          <td>
            <input type="text" name="id">
            <input type="button" value="중복확인" onclick="" class="index_bt">
            <input type="hidden" name="hid">
          </td>
        </tr>
        <tr>
          <td align="right">비밀번호</td>
          <td>
            <input type="password" name="pw1">
          </td>
        </tr>
        <tr>
          <td align="right">비밀번호확인</td>
          <td>
            <input type="password" name="pw2">
          </td>
        </tr>
        <tr>
          <td align="right">닉네임</td>
          <td>
            <input type="text" name="nickname">
            <input type="button" value="중복확인" onclick=""  class="index_bt">
            <input type="hidden" name="hnickname">
          </td>
        </tr>
        <tr>
          <td align="right">이메일</td>
          <td>
            <input type="text" name="email">@
            <select name="email2">
              <option value="1">직접입력</option>
              <option value="naver.com">naver.com</option>
              <option value="daum.net">daum.net</option>
              <option value="google.com">google.com</option>
            </select>
          </td>
        </tr>
        <tr>
          <td align="right">관심분야</td>
          <td>
            <input type="checkbox" name="interest1" value="C">C&nbsp;
            <input type="checkbox" name="interest2" value="C++">C++&nbsp;
            <input type="checkbox" name="interest3" value="JAVA">JAVA&nbsp;
            <input type="checkbox" name="interest4" value="HTML">HTML&nbsp;
            <input type="checkbox" name="interest5" value="CSS">CSS&nbsp;
            <input type="checkbox" name="interest6" value="PHP">PHP&nbsp;
            <input type="checkbox" name="interest7" value="JAVASCRIPT">JAVASCRIPT
          </td>
        </tr>
        <tr>
          <td align="right">성별</td>
          <td>
            <input type="radio" name="gender" value="M" checked>남성
            <input type="radio" name="gender" value="F">여성
          </td>
        </tr>
        <tr>
          <td align="right">최종학력</td>
          <td>
            <select name="lastacdemy">
              <option value="고졸">고졸</option>
              <option value="초대졸">초대졸</option>
              <option value="대졸">대졸</option>
            </select>
          </td>
        </tr>
        <tr>
          <td align="right">이메일 수신여부</td>
          <td>
            <input type="checkbox" name="email_receive_yn1" onclick="email_check()">수신
            <input type="checkbox" name="email_receive_yn2" onclick="email_check()">수신거부
          </td>
        </tr>
        <tr>
          <td align="right">남기고 싶은말</td>
          <td>
            <textarea name="comment" rows="8" cols="50"></textarea>
          </td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="button" value="회원가입" class="index_bt">
            <input type="reset" value="새로작성" class="index_bt">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
