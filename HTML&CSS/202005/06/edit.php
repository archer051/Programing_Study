<?php
$hp = $_GET["hp"];
$conn = mysqli_connect("127.0.0.1", "root", "autoset", "testdb");
$query = "select * from sawon where hp='$hp'";
$rs = mysqli_query($conn, $query);
$row = mysqli_fetch_array($rs);
$cnt = mysqli_num_rows($rs);
?>
<script type="text/javascript">
function send() {
  //무결성 체크
  // 무결성체크 후 포스트방식으로 wrtie_ok.php이동
  document.frm1.submit();
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
  <form name="frm1" method="post" action="edit_ok.php">
    <table class="table1" style="width: 600px;">
      <tr>
        <td colspan="3" align="center">
          학생수정폼
        </td>
      </tr>
      <tr>
        <td>사원번호</td>
        <td>
          <input type="text" name="enum" size=10 value="<?php echo $row["enum"] ?>" readonly>

        </td>
      </tr>
      <tr>
        <td>이름</td>
        <td>
          <input type="text" name="name" size="10" value="<?php echo $row["name"] ?>">
        </td>
      </tr>
      <tr>
        <td>부서명</td>
        <td>
          <input type="text" name="partname" size="30" value="<?php echo $row["partname"] ?>">
        </td>
      </tr>
      <tr>
        <td>직급</td>
        <td>
          <input type="text" name="position" size="30" value="<?php echo $row["position"] ?>">
        </td>
      </tr>
      <tr>
        <td>전화번호</td>
        <td>
          <input type="text" name="hp" size="30" value="<?php echo $row["hp"] ?>" readonly>
        </td>
      </tr>
      <tr>
        <td>주소</td>
        <td><input type="text" name="addr" size="55" value="<?php echo $row["addr"] ?>"></td>
      </tr>
      <tr>
        <td>이메일</td>
        <td>
          <input type="text" name="email" size="30">
          <select name="emiail_etc">
            <option value="" <?php if ($row["gender"] == "M") {
                              ?>selected<?php
                                      } ?>>
              >직접입력</option>
            <option value="@google.com">@google.com</option>
            <option value="@naver.com">@naver.com</option>
            <option value="@daum.net">@daum.net</option>
            <option value="@kakao.com">@kakao.com</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>혼인여부</td>
        <td>
          <select name="marriage_yn">
            <option value="N" <?php
                              if ($row["marriage_yn"] == "N") { ?> selected <?php } ?>>미혼
            </option>
            <option value="Y" <?php
                              if ($row["marriage_yn"] == "Y") {
                              ?>selected<?php } ?>>기혼
            </option>
          </select>
        </td>
      </tr>
      <tr>
        <td>성별</td>
        <td>
          <select name="gender">
            <option value="M" <?php if ($row["gender"] == "M") {
                              ?>selected <?php
                                        } ?>>남성
            </option>
            <option value="F" <?php if ($row["gender"] == "F") {
                              ?>selected<?php
                                      } ?>>여성</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>연봉</td>
        <td><input type="text" name="cash" size="30" value="<?php echo $row["cash"] ?>"></td>
      </tr>
      <tr>
        <td>생년월일</td>
        <td><input type="text" name="birthday" size="30" value="<?php echo $row["birthday"] ?>"></td>
      </tr>
      <tr>
        <td>경력여부</td>
        <td>
          <select name="career_yn">
            <option value="N" <?php
                              if ($row["career_yn"] == "N") {
                              ?>selected<?php } ?>>
              없음</option>
            <option value="Y" <?php
                              if ($row["career_yn"] == "Y") {
                              ?>selected<?php } ?>>있음</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>최종학력</td>
        <td>
          <select name="laststudy">
            <option value="대학원졸" <?php if ($row["laststudy"] == "대학원졸") {
                                  ?>selected<?php
                                          } ?>>
              >대학원졸</opction>
            <option value="대졸" <?php if ($row["laststudy"] == "대졸") {
                                ?>selected<?php
                                        } ?>>대졸</opction>
            <option value="초대졸" <?php if ($row["laststudy"] == "초대졸") {
                                ?>selected<?php
                                        } ?>>초대졸</opction>
            <option value="고졸" <?php if ($row["laststudy"] == "고졸") {
                                ?>selected<?php
                                        } ?>>고졸</opction>
            <option value="중졸" <?php if ($row["laststudy"] == "중졸") {
                                ?>selected<?php
                                        } ?>>중졸</opction>
          </select>
        </td>
      </tr>
      <tr>
        <td>전공</td>
        <td>
          <input type="text" name="major" value="<?php echo $row["major"] ?>">
        </td>
      </tr>
      <tr>
        <td colspan="3" align="center">
          <input type="button" value="작성완료" class="bt" onclick="send()">
        </td>
      </tr>
    </table>
  </form>
  <footer></footer>
</body>

</html>