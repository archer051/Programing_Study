<?php
  include "dbconn.php";
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
      window.open("login.php","frmLOGIN","width=300,height=150");
    }
    function winOpen1(){
      window.open("adminlogin.php","frmADMIN","width=300,height=150");
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
        <a href="#">고객센터</a>
      <?php }else
        { ?> 
          <a href="javascript:winOpen()">LOGIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;
          <a href="join.php">JOIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;
          <a href="javascript:winOpen1()">ADMIN</a>
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
  <?php
    if(isset($_GET["page"])) {
      $page = $_GET["page"];
      $group = ceil($page / 5);
    } else {
      $page = 1;
      $group = 1;
    }
    $sGPRecord = ($page - 1) * 9;

    $queryTemp="select * from store limit $sGPRecord,9";
    ?>
   <ul class="list">
      <?php
      $rsTemp=mysqli_query($conn,$queryTemp);
      while($rowTemp=mysqli_fetch_array($rsTemp)) {
      ?>
        <li>
          <a href="store_content.php?storeNo=<?php echo $rowTemp["no"]?>" class="inner">
            <div class="thumb">
              <img src="<?php echo $rowTemp["pic"]?>">
            </div>
            <div class="title">
              <?php echo $rowTemp["store_name"]; ?>
            </div>
          </a>
        </li>
      <?php
      }
      ?>
      </ul>
      <ul>
        <li align="center">
        <?php
        $queryCount="select count(*) cnt from store";
        $rsCount=mysqli_query($conn,$queryCount);
        $rowCount=mysqli_fetch_array($rsCount);
        $pageCount=ceil($rowCount["cnt"] / 9); 
        for($i=1; $i<=$pageCount; $i++) {
          if($i > $pageCount)
            break;
          if($i == $page)
            echo "<a href=index.php?page=$i><b><font color='blue'>[$i]</font></b></a>";
          else 
            echo "<a href=index.php?page=$i>[$i]</a>";
        }
        ?>
        </li>
      </ul>
  </section>
  </div>
</body>
</html>