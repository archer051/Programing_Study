<?php
include "dbconn.php";
 ?>
<script>
function send() {
  if(frm1.id.value == "")
  {
    alert("아이디를 입력해주세요");
    return false;
  }
  // if(frm1.hid.value == "")
  // {
  //   alert("아이디 중복확인을 입력해주세요");
  //   return false;
  // }
  // if(frm1.id.value != frm1.hid.value)
  // {
  //   alert("아이디와 중복확인한 아이디가 맞지 않습니다."+"\n"+"다시 아이디를 입력 후 중복확인 버튼을 눌러주세요");
  //   frm1.id.value="";
  //   frm1.id.focus();
  //   return false;
  // }
  if(frm1.pw1.value == ""){
    alert("패스워드를 입력 하세요");
    frm1.pw1.focus();
    return false;
  }
  if(frm1.pw2.value == ""){
    alert("패스워드확인를 입력 하세요");
    frm1.pw2.focus();
    return false;
  }
  if(frm1.pw1.value != frm1.pw2.value){
    alert("패스워드와 패스워드확인의 값이 맞지 않습니다."+"\n"+"확인 후 다시 입력해주세요.");
    frm1.pw2.select();
    return false;
  }
  if(frm1.name.value == ""){
    alert("이름을 입력해주세요");
    frm1.name.focus();
    return false;
  }

  var mn1Len=frm1.mn1.value.length;
  if(frm1.mn1.value == ""){
    alert("모바일번호1을 입력 해주세요");
    frm1.mn1.focus();
    return false;
  }else if(mn1Len < 3){
    // alert(mn1Len);
    alert("세자리 숫자를 입력 해주세요");
    frm1.mn1.select();
    return false;
  }

  var mn2len=frm1.mn2.value.length;
  if(frm1.mn2.value == ""){
    alert("모바일번호2을 입력해주세요");
    frm1.mn2.focus();
    return false;
  }else if(mn2Len < 4){
    // alert(mn1Len);
    alert("네자리 숫자를 입력 해주세요");
    frm1.mn2.select();
    return false;
  }
  var mn3len=frm1.mn3.value.length;
  if(frm1.mn3.value == ""){
    alert("모바일번호3을 입력해주세요");
    frm1.mn3.focus();
    return false;
  }else if(mn3Len < 4){
    // alert(mn1Len);
    alert("네자리 숫자를 입력 해주세요");
    frm1.mn3.select();
    return false;
  }

  documnet.frm1.submit();

}

function idcheck(){

}

function chkKorean(str){
  var check = /[ㄱ-ㅎ|ㅏ-ㅣ|가-힣]/;
  var check2 = /\s/gi;
  if(check.test(str)){
    alert("한글 입력 불가능합니다.");
  }
  if(check2.test(str)){
    alert("공백은 입력 불가능합니다.");
  }
}

</script>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <link rel="stylesheet" href="style.css">
    <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      <div class="login_area">
        <?php
        if(isset($_SESSION["ID"])) {
          ?>
          <a href="logout.php">Logout</a>&nbsp;|&nbsp;
          <a href="member_edit.php">Edit</a>&nbsp;|&nbsp;
          <a href="withdrawal.php">Withdrawal</a>
        <?php }else { ?>
          <a href="javascript:login()">Login</a>&nbsp;|&nbsp;
          <a href="member.php">Member</a>&nbsp;|&nbsp;
          <a href="SearchIdPw.php">Search Id/Pw</a>
        <?php } ?>
      </div>
    </header>
    <form name="frm1" action="member_ok.php" method="post">
      <table class="index_table">
        <br>
        <tr>
          <td align="right">아이디</td>
          <td>
            <input type="text" name="id" maxlength="16" onkeyup=
            "chkKorean(this.value);this.value=this.value.replace(/[ㄱ-ㅎ|ㅏ-ㅣ|가-힣]/g,'');
            this.value=this.value.replace(/\s/gi,'');">
            <input type="button" value="중복확인" onclick="idcheck();">
            <input type="hidden" name="hid">
          </td>
        </tr>
        <tr>
          <td align="right">패스워드</td>
          <td>
            <input type="password" name="pw1" maxlength="30" onkeyup="chkkorean(this.value);">
          </td>
        </tr>
        <tr>
          <td align="right">패스워드확인</td>
          <td>
            <input type="password" name="pw2" maxlength="30">
          </td>
        </tr>
        <tr>
          <td align="right">이름</td>
          <td>
            <input type="text" name="name" maxlength="10">
          </td>
        </tr>
        <tr>
          <td align="right">성별</td>
          <td>
            <input type="radio" name="gender" value="m" checked>남성
            <input type="radio" name="gender" value="f">여성
          </td>
        </tr>
        <tr>
          <td align="right">전화번호</td>
          <td>
            <!-- <input type="text" name="hp1" size="4" maxlength="3" onblur="hpsend()"> -->
            <input type="text" name="mn1" size="4" maxlength="3">
            -
            <input type="text" name="mn2" size="4" maxlength="4">
            -
            <input type="text" name="mn3" size="4" maxlength="4">
          </td>
        </tr>
        <tr>
          <td align="right">이메일</td>
          <td>
            <input type="text" name="email1" onkeyup=
            "chkKorean(this.value);this.value=this.value.replace(/[ㄱ-ㅎ|ㅏ-ㅣ|가-힣]/g,'');
            this.value=this.value.replace(/\s/gi,'');">
            <span>@</span>
<!-- <span></span> 태그는 <div></div> 태그처럼 특별한 기능을 갖고있지 않고, CSS와 함께 쓰입니다.
<div> 태그와의 차이점은 display속성이 block이 아닌, inline이라는 점인데, 이는 CSS display 항목에서 세부
정보를 알 수 있습니다.
이 둘의 차이를 쉽게 설명하자면, <div>는 줄 바꿈이 되지만, <span>은 줄 바꿈이 되지 않다는 점입니다. -->
            <select name="email2">
              <option value="직접입력">직접입력</option>
              <option value="naver.com">naver.com</option>
              <option value="daum.net">daum.net</option>
              <option value="gmail.com">gmail.com</option>
            </select>
          </td>
        </tr>
        <tr>
          <td align="right">최종학력</td>
          <td>
            <select name="fea">
              <option value="고졸">고졸</option>
              <option value="초대졸">초대졸</option>
              <option value="대졸">대졸</option>
              <option value="대학원졸">대학원졸</option>
            </select>
          </td>
        </tr>
        <tr>
          <td align="right">직업</td>
          <td>
            <input type="text" name="job">
          </td>
        </tr>
        <tr>
          <td align="right">연봉</td>
          <td>
            <input type="text" name="annual_salary">
          </td>
        </tr>
        <tr>
          <td align="right">선호도</td>
          <td>
            <input type="checkbox" name="preference1" value="큐티">큐티
            <input type="checkbox" name="preference2" value="지적">지적
            <input type="checkbox" name="preference3" value="섹시">섹시
            <br>
            <input type="checkbox" name="preference4" value="돈많음">돈많음
            <input type="checkbox" name="preference5" value="직업">직업
            <input type="checkbox" name="preference6" value="람보르기니">람보르기니
          </td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="button" class="bt" value="회원가입" onclick="send();">
            <input type="reset" class="bt" value="새로작성">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
