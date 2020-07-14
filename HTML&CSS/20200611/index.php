<?php
  session_start();
  include "dbconn.php";
  $idAuthority = "N";
  $imgdir = "../fileServer/";
    if(isset($_SESSION["id"])) {
      $id = $_SESSION["id"];
      $logYN = "Y";
      $query = "select count(*) as authority from member where level = 'admin' and id = '$id'";
      $rs = mysqli_query($conn, $query);
      $row = mysqli_fetch_array($rs);
      if($row["authority"] == "1")
        $idAuthority = "Y";
      else
        $idAuthority = "N";
    } else 
      $logYN="N";
  
  //echo $logYN."//".$idAuthority;
  if(isset($_GET["page"])){
    $page = $_GET["page"];
    $group = ceil($page / 5);
  } else {
    $page=1;
    $group = 1;
  }
  $startNo=($page - 1) * 9;
  $query = "select * from dog order by no desc limit $startNo,9";
  $rs = mysqli_query($conn, $query);
  $queryCount = mysqli_num_rows($rs);
?>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Index</title>
    <script>
      function winOpen() {
        // window.open("홈페이지파일","프로세스아이디개념(login.php파일열때는 login이라는 파라미터는 가능 하나 다른 test2.php 파일열때 두번째 파라미터 login을 하면 메모리 오류가 발생함","크기")
        window.open("login.php","frmLogin","width=300,height=150");
      }
    </script>
  </head>
<body>
  <header class="headerIndexArea">
    <div class="loginArea">
      <?php
      if($logYN == "Y"){
      ?>
      <a href="logout.php">LOGOUT</a> | 
      <a href="member.php">Member</a> | 
      <a href="withdrawl.php">WithDrawl</a>
      <?php
      } else {
      ?>
      <a href="javascript:winOpen()">LOGIN</a> | 
      <a href="joinus.php">JoinUs</a> | 
      <a href="idpwfind.php">Id/Pw Find</a>
      <?php
      }
      ?>
    </div>
  </header>
  <section class="IndexSectionArea">
    <ul class="ISA_listArea">
<?php
while($row=mysqli_fetch_array($rs)) {
?>
      <li>
        <a href="content.php?no=<?php echo $row["no"]; ?>">
          <img src="<?php echo $imgdir.$row["picFName"];?>">
          <div class="IndexImgTextArea"><?php echo $row["dogTypeName"]; ?></div>
        </a>
      </li>
<?php
}
?>
    </ul>
  </section>
  <section class="IndexSectionArea" align="center" style="border-bottom:2px solid #666;">
  <?php
  $query = "select count(*) as cnt from dog";
  $rs = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($rs);
  $queryCount = $row["cnt"];
  // echo $queryCount;
  $pageDivisionCount = ceil($queryCount / 9);
  $groupCount = $pageDivisionCount / 5;
  $sGroupPage = ($group - 1) * 5 + 1;
  $eGroupPage = $sGroupPage + 4;
  
  if($group != 1) {
    $prevGroupPage = ($group - 2) * 5 + 1;
    echo "<a href=index.php?page=1>[FIRST]</a>";
    echo "<a href=index.php?page=$prevGroupPage>[PREV]</a>";
  }
  for($i = $sGroupPage; $i <= $eGroupPage; $i++) {
    if($i > $pageDivisionCount)
     break;
    if($i == $page)
      echo "<a href='index.php?page=$i'><b><font color='orangered'>[$i]</font></b></a> ";
    else 
      echo "<a href=index.php?page=$i>[$i]</a>";
  }
  if ($group < $groupCount) {
        $nextGroupPage = ($group * 5) + 1;
        echo "<a href=index.php?page=$nextGroupPage>[NEXT]</a>";
        echo "<a href=index.php?page=$pageDivisionCount>[LAST]</a>";
      }
  ?>
  </section>
  <section class="IndexSectionArea" align="center">
    <?php
    if($idAuthority === "Y") {
    ?>
    <br>
    <input type="button" value="추가하기" onclick="location.href='write.php'" class="btnWrite">
    <?php
    }
    ?>
  </section>
</body>
</html>