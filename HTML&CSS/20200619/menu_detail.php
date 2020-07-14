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
</head>
<body>
  <div id="wrap">
  <header>
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
    <td>음식이름</td>
    <td><?php echo $bigTypeName; ?></td>
  </tr>
  <tr>
    <td>상세설명</td>
    <td></td>
  </tr>
  <tr>
    <td>기본 가격</td>
    <td></td>
  </tr>
  <tr>
    <td>수량</td>
    <td><select>
    	 		<script>
    	 			for(var i=1; i<=10; i++){

    	 			}
    	 		</script>
    		</select></td>
  </tr>
  <tr>
    <td><input type="button" value="내장바구기에 넣기" onclick="location.href='mycart.php'"></td>
  </tr>
    </table>
  <div class="clear"></div>
  </section>
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
