<?php
  include "dbconn.php";
?>
<html>
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css2?family=Gamja+Flower&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>20200616</title>
  <link rel="stylesheet" href="style.css">
  <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
  <script src="script.js" defer="defer"></script>
  <script>
    $(document).ready(function(){
      $("#bigMenu").load("menu.php?code=01");
    });
    $(function(){
      $("#food").change(function(){
        var code=frmAdminPage.food.value;
        $("#bigMenu").load("menu.php?code="+code);
      });
    });
    
  </script>
</head>
<body>
  <div class="login">
      <?php if(isset($_SESSION["id"])){
        ?>
        <a href="logout.php">LOGOUT</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="member_edit.php">EDIT</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <?php
          if(isset($_SESSION["id"])) { ?> 
          <?php
            $queryAdmin="select level from member where id='$_SESSION[id]'";
            $rsAdmin=mysqli_query($conn,$queryAdmin);
            $rowAdmin=mysqli_fetch_array($rsAdmin);
            if($rowAdmin["level"]=="admin"){
          ?>
             <a href="admin_page.php">ADMINPAGE</a>
          <?php  } ?>
      <?php } ?>
      <?php }else
        { ?> 
          <a href="javascript:winOpen()">LOGIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;
          <a href="join.php">JOIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;
          <a href="idpw.php">Id/Pw</a>
      <?php } ?>   
    </div>
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
    <form name="frmAdminPage">
    <table class="table2">
      <tr>
        <th colspan="4" align="center"><b>권한정보 수정</b></th>
      </tr>
      <tr>
        <td>이름</td>
        <td>권한</td>
        <td>음식</td>
        <td>분류</td>
      </tr>
      <tr>
        <?php
          $query="select * from member";
          $rs=mysqli_query($conn,$query);
          while($row=mysqli_fetch_array($rs)){
        ?>
        <td><?php echo $row["name"] ?></td>
        <td>
          <select name="level">
            <?php
              $query1="select * from member";
              $rs1=mysqli_query($conn,$query1);
              while($row1=mysqli_fetch_array($rs1)) {
            ?>
            <option value="<?php echo $row1["level"] ?>">
              <?php echo $row1["level"];?>
            </option>
            <?php
              }
            ?>
          </select>
        </td>
      <?php } ?>
        <td>
          <select name="food" id="food">
            <?php
            $queryFoodBigType="select * from menu";
            $rsFoodBigType=mysqli_query($conn,$queryFoodBigType);
            while($rowFoodBigType=mysqli_fetch_array($rsFoodBigType)) {
            ?>
            <option value="<?php echo $rowFoodBigType["code"]?>">
              <?php echo $rowFoodBigType["name"];?>
            </option>
            <?php
            }
            ?>
    </select>
        </td>
        <td>
          <div id="bigMenu">
          </div>          
        </td>
      </tr>
    </table>
    </form>
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