<?php
  include "dbconn.php";
?>
<html lang="ko">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>배달의 만족</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Gamja+Flower&display=swap" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
  <script src="script.js" defer="defer"></script>
  <script>
    function winOpen(){
      window.open("login.php","frmLOGIN","width=400,height=200");
    }
  </script>
</head>
<body>
  <div id="wrap">
  <header>
    <div class="login">
    <?php 
    if(isset($_SESSION["id"])){ ?>
      <a href="logout.php">LOGOUT</a>&nbsp;&nbsp;|&nbsp;&nbsp;
      <a href="member_edit.php">EDIT</a>&nbsp;&nbsp;|&nbsp;&nbsp;
      <a href="mycart.php">MY CART</a>&nbsp;&nbsp;|&nbsp;&nbsp;
      <a href="Order_details.php">ORDER</a>
      <?php
      $queryAdmin="select level from member where id='$_SESSION[id]'";
      $rsAdmin=mysqli_query($conn,$queryAdmin);
      $rowAdmin=mysqli_fetch_array($rsAdmin);
      $level=$rowAdmin["level"];
      if($level == "admin"){ ?>
      &nbsp;&nbsp;|&nbsp;&nbsp;<a href="admin_page.php">ADMINPAGE</a>
    <?php 
      }
    }else { ?>
      <a href="javascript:winOpen()">LOGIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;
      <a href="join.php">JOIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;
      <a href="idpw.php">Search ID/PW</a>&nbsp;&nbsp;|&nbsp;&nbsp;
      <a href="Order_details.php">ORDER</a>
    <?php 
    } ?>   
    </div>
    <div class="logo"><a href="index.php"><img src="logo/LOGO.jpg"></a></div>
    <div class="gnb_menu"></div>
    <nav>
    <?php
    $queryMenu="select * from menu";
    $rsMenu=mysqli_query($conn, $queryMenu);?>
      <ul class="menu">
      <?php
      while($rowMenu=mysqli_fetch_array($rsMenu)) { ?>
        <li><a href="store.php?code=<?php echo $rowMenu["code"]; ?>"><?php echo $rowMenu["name"]; ?></a>
          <ul class="submenu">
          <?php
            $pcode=$rowMenu["code"];
            $querySubmenu="select * from submenu where pcode = '$pcode'";
            $rsSubmenu=mysqli_query($conn,$querySubmenu);
            while($rowSubmenu=mysqli_fetch_array($rsSubmenu)) {
              $code=$rowSubmenu["code"]; ?>
            <li><a href="store.php?code=<?php echo $code; ?>"><?php echo $rowSubmenu["name"]; ?></a></li>
            <?php
            } ?>
          </ul>
        </li>
      <?php
      } ?> 
      </ul> 
    </nav>
  </header>
  <section>
    <!-- <div class="imgslide">
      <div class="imgs">
        <img src="slide/slide1.jpg">
        <img src="slide/slide2.jpg">
        <img src="slide/slide3.jpg">
        <img src="slide/slide4.gif">
      </div>
    </div> -->
  <?php
    if(isset($_GET["page"])) {
      $page = $_GET["page"];
      $group = ceil($page / 5);
    } else {
      $page = 1;
      $group = 1;
    }
    $sGPRecord = ($page - 1) * 8;

    $queryStore="select * from store limit $sGPRecord,8";
    ?>
   <ul class="list">
      <?php
      $rsStore=mysqli_query($conn,$queryStore);
      while($rowStore=mysqli_fetch_array($rsStore)) {
      ?>
        <li>
          <a href="store_content.php?storeNo=<?php echo $rowStore["no"]?>" class="inner">
            <div class="thumb">
              <img src="images/store/<?php echo $rowStore["pic"]?>">
            </div>
            <div class="title">
              <?php echo $rowStore["store_name"]; ?>
            </div>
          </a>
        </li>
      <?php
      }
      ?>
      </ul>
      <br>
      <ul style="font-size:1.5em;">
        <li align="center">
        <?php
        $queryCount="select count(*) cnt from store";
        $rsCount=mysqli_query($conn,$queryCount);
        $rowCount=mysqli_fetch_array($rsCount);
        $pageCount=ceil($rowCount["cnt"] / 8); 
        for($i=1; $i<=$pageCount; $i++) {
          if($i > $pageCount)
            break;
          if($i == $page)
            echo "<a href=index.php?page=$i><b><font color='blue'>[$i]</font></b></a>";
          else 
            echo "<a href=index.php?page=$i>[$i]</a>";
        } ?>
        </li>
      </ul>
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