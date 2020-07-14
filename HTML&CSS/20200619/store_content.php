<?php
  include "dbconn.php";
  $storeNo=$_GET["storeNo"];
  $queryStoreInfo="select * from store where no=$storeNo";
  $rsStoreInfo=mysqli_query($conn,$queryStoreInfo);
  $rowStoreInfo=mysqli_fetch_array($rsStoreInfo);
  $smallType=$rowStoreInfo["pcode"];
  $querySmallType="select * from submenu where code='$smallType'";
  $rsSmallType=mysqli_query($conn,$querySmallType);
  $rowSmallType=mysqli_fetch_array($rsSmallType);
  $smallTypeName=$rowSmallType["name"];//소분류이름
  $bigTypeNo=$rowSmallType["pcode"];
  $queryBigType="select * from menu where code = '$bigTypeNo'";
  $rsBigType=mysqli_query($conn,$queryBigType);
  $rowBigType=mysqli_fetch_array($rsBigType);
  $bigTypeName=$rowBigType["name"];//대분류이름
  $storeName=$rowStoreInfo["store_name"];//가게명
  $storeManager=$rowStoreInfo["manager"];//담당자
  $storeTel=$rowStoreInfo["tel"];//가게전화번호
  $storePic=$rowStoreInfo["pic"];//가게사진파일명
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>20200617</title>
  <link rel="stylesheet" href="style.css">
  <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
  <script src="script.js" defer="defer"></script>
  <script>
    function winOpen(){
      window.open("login.php","frmLOGIN","width=700,height=200");
    }
    function winOpen1(){
      window.open("adminlogin.php","frmADMIN","width=700,height=200");
    }
  </script>
  <script>
  function send(){
  document.frm1.submit();
  }
  function del(no,fname){
  if(confirm("정말로 삭제 하시겠습니까?")){
    //js는 변수를 기준으로 분리를 해준다.
    location.href="store_re_del.php?no="+no+"&fname="+fname;
    }
  }
</script>
</head>
<body>
  <div id="wrap">
  <header>
  <div class="login">
      <?php if(isset($_SESSION["id"])){
        ?>
        <a href="logout.php">LOGOUT</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="member_edit.php">EDIT</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="mycart">MY CART</a>
        <?php
          if(isset($_SESSION["id"])) { ?> 
          <?php
            $queryAdmin="select level from member where id='$_SESSION[id]'";
            $rsAdmin=mysqli_query($conn,$queryAdmin);
            $rowAdmin=mysqli_fetch_array($rsAdmin);
            if($rowAdmin["level"]=="admin"){
          ?>
             <a href="admin_page.php">ADMINPAGE</a>
          <?php } ?>
        <?php } ?>
      <?php }else
        { ?> 
          <a href="javascript:winOpen()">LOGIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;
          <a href="join.php">JOIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;
          <a href="idpw.php">Id/Pw</a>
      <?php } ?>   
    </div>
    <div class="gnb_menu"></div>
    <div class="logo">
      <a href="index.php">
      <img src="logo/LOGO.jpg">
      </a>
    </div>
    <nav>
    <?php 
      $query="select * from menu";
      $rs=mysqli_query($conn, $query);
    ?>
      <ul class="menu">
      <?php
      while($row=mysqli_fetch_array($rs)) {
      ?>
        <li>
          <a href="store.php?code=<?php echo $row["code"]; ?>">
            <?php echo $row["name"]; ?>
          </a>
          <ul class="submenu">
          <?php
            $pcode=$row["code"];
            $query2="select * from submenu where pcode = '$pcode'";
            $rs2=mysqli_query($conn,$query2);
            while($row2=mysqli_fetch_array($rs2)) {
              $code=$row2["code"];
          ?>
            <li>
              <a href="store.php?code=<?php echo $code; ?>">
                <?php echo $row2["name"]; ?>
              </a>
            </li>
            <?php
            }
            ?>
          </ul>
        </li>
      <?php
      }
      ?>  
    </nav>
  </header>
  <section>
  <!-- store_content.php시작영역 -->
  <table class="table_content" style="width:800px;">
  <table class="food">
  <tr>
    <td colspan="2" align="center">
      <img src="images/store/<?php echo $storePic; ?>" width="300" height="300">
    </td>
  </tr>
    </table>
    <table class="table_food">
  <tr>
    
    <td>대분류</td>
    <td><?php echo $bigTypeName; ?></td>
  </tr>
  <tr>
    <td>소분류</td>
    <td><?php echo $smallTypeName; ?></td>
  </tr>
  <tr>
    <td>가게이름</td>
    <td><?php echo $storeName; ?></td>
  </tr>
  <tr>
    <td>담당자</td>
    <td><?php echo $storeManager; ?></td>
  </tr>
  <tr>
    <td>전화번호</td>
    <td><?php echo $storeTel; ?></td>
  </tr>
    </table>
  <div class="clear"></div>
  <!-- 공지사항영역 시작 -->
  <table class="notice">
  <tr>
    <td colspan="3" align="center"><font color='blue'><b>공지사항</b></font></td>
    <?php
      $queryNotice="select * from store_notice order by no desc limit 1";
      $rsNotice=mysqli_query($conn,$queryNotice);
      $rowNotice=mysqli_fetch_array($rsNotice);
      ?>
  </tr>
  <tr style="height:50px; text-align:center;">
    <th>제목</th>
    <th>작성자</th>
    <th>작성일</th>
  <tr style="height:50px; text-align:center;">
      <td><a href="store_notice_content.php?no=<?php echo $rowNotice["no"] ?>"><?php echo $rowNotice["title"] ?></a></td>
      <td><a href="store_notice_content.php?no=<?php echo $rowNotice["no"] ?>"><?php echo $rowNotice["writer"] ?></a></td>
      <td><a href="store_notice_content.php?no=<?php echo $rowNotice["no"] ?>"><?php echo $rowNotice["writeday"] ?></a></td>
  </tr>
    </table>
  <!-- 공지사항영역 끝 -->
  <!-- 메뉴정보영역 시작-->
  <tr>
    <td colspan="4" align="center"><font color='blue'><b>메뉴정보</b></font></td>
  </tr>
  <tr>
    <table class="table_menu">
    <tr>
      <th>음식사진</th>
      <th>음식명</th>
      <th>가격</th>
     
    </tr>
    <?php 
    $queryStoreMenu="select * from store_menu where pno=$storeNo";
    $rsStoreMenu=mysqli_query($conn,$queryStoreMenu);
    $storeMenuImgDir="images/".$bigTypeNo."/".$smallType."/".$storeNo."/";
    while($rowStoreMenu=mysqli_fetch_array($rsStoreMenu)) {
    $storeMenuNo=$rowStoreMenu["no"];
    $FileName=$rowStoreMenu["pic"];
    ?>
    <tr>
      <td>
        <a href="menu_detail.php?no=<?php echo $storeMenuNo; ?>&storeMenuImgDir=<?php echo $storeMenuImgDir; ?>&FileName=<?php echo $FileName; ?>">
        <img src="<?php echo "images/".$bigTypeNo."/".$smallType."/".$storeNo."/".$rowStoreMenu["pic"]; ?>">
        </a>
      </td>
      <td>
        <a href="menu_detail.php"><?php echo $rowStoreMenu["name"]; ?>
        </a>
      </td>
      <td><?php echo $rowStoreMenu["price"]; ?></td>
      
    </tr>
  
    </tr>
    <!-- 메뉴정보영역 끝-->
    <?php
    }
    ?>
  <!-- 버튼 추가영역 -->
  <tr>
    <td colspan="4" align="center">
    <?php
    if(isset($_SESSION["id"])) {
      $loginID=$_SESSION["id"];
      $queryLoginMember="select * from member where id='$loginID'";
      $rsLoginMember=mysqli_query($conn,$queryLoginMember);
      $rowLoginMember=mysqli_fetch_array($rsLoginMember);
      $levelData=$rowLoginMember["level"];
      if($levelData == "admin") { 
    ?>
        <!-- admin일 경우 추가 -->
        <input type="button" class="bt3" value="공지사항추가" onclick="location.href='store_notice.php?storeNo=<?php echo $storeNo; ?>'">
        
      <?php 
      } else if($levelData == "manager"){
      ?>
      <!-- manager일 경우 추가 -->
      <input type="button" class="bt3" value="메뉴추가" onclick="location.href='store_content_insert.php?storeNo=<?php echo $storeNo; ?>&smallType=<?php echo $smallType; ?>&bigTypeNo=<?php echo $bigTypeNo; ?>'">
      <input type="button" class="bt3" value="메뉴삭제" onclick="location.href='store_content_del.php?storeNo=<?php echo $storeNo; ?>&smallType=<?php echo $smallType; ?>&bigTypeNo=<?php echo $bigTypeNo; ?>'">
      <?php 
      }
      ?>  
    <?php
    }
    ?>
    </td>
  </tr>
  <!-- 버튼 추가영역 끝 -->
  </table>
  <!-- 댓글영역시작 -->
  <br><br>
  <form name="frm1" method="post" action="store_re_ok.php">
    <table class="table_re">
      <tr>
        <th>
          <?php if(isset($_SESSION["id"])) { ?>
        <input type="text" name="memo" size="70">
      </th>
        <th>
        <input type="text" name="writer" size="15">&nbsp;
        <input type="button" value="댓글" class="btn1" onclick="send()">
        <input type="hidden" name="pno" value="<?php echo $storeNo ?>">
        <?php }else {?>
        <?php } ?>
      </th>
      </tr>
      <tr>
        <th>내용</th>
        <th>작성자</th>
      </tr>
    <?php
      $query3="select * from store_re where pno=$storeNo order by no desc";
      $rs3=mysqli_query($conn,$query3);
      while($row3=mysqli_fetch_array($rs3)) {
    ?>
    <tr>
      <td style="color:green;">
        <?php echo $row3["memo"]; ?>

      </td>
      <td><?php echo $row3["writer"]; ?></td>
    </tr>
  <?php } ?>

    </table>
  </form>
  <!-- 댓글영역끝 -->
  <!-- store_content.php끝영역 -->
  </section>
  </div>
  <footer>  
    <div class="leftfooter">
      <p>
        (주) 한마음<br>
        건물명: 부산 광역시 사직동 금광빌딩 3층<br>
        사업자번호: 110-25-6684  <a href="#">(사업자 정보확인)</a>
      </p>
    </div>
    <div class="rightfooter">
      <P>
        대표전화:051-224-5588<br>
        대표이메일:dldlsghks@naver.com
      </P>
    </div>
  </footer>
</body>
</html>
