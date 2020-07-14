<?php
  include "dbconn.php";
  $storeMenuNo=$_POST["storeMenuNo"];
  // echo $storeMenuNo;echo "<br>";
  $storeMenuImgDir=$_POST["storeMenuImgDir"];
  // echo $storeMenuImgDir;echo "<br>";
  $FileName=$_POST["FileName"];
  // echo $FileName;echo "<br>";
  $MenuName=$_POST["MenuName"];
  // echo $MenuName;echo "<br>";
  $MenuMemo=$_POST["MenuMemo"];
  // echo $MenuMemo;echo "<br>";
  $MenuPrice=$_POST["MenuPrice"];
  // echo $MenuPrice;echo "<br>";
  $MenuEa=$_POST["ea"];
  // echo $MenuEa;echo "<br>";
  $MenuSumPrice=$MenuPrice*$MenuEa;
  // echo $MenuSumPrice;echo "<br>";
  $LoginId=$_SESSION["id"];
  $queryCartInsert=
  "insert into store_cart
    (pno
    ,id
    ,ea
    ,tPrice)
  values
    ($storeMenuNo
    ,'$LoginId'
    ,$MenuEa
    ,$MenuSumPrice)";
  mysqli_query($conn,$queryCartInsert);
?>
<script>
  alert("장바구니에 추가가 완료되었습니다.");
</script>
<meta http-equiv="refresh" content="0; menu_detail.php?no=<?php echo $storeMenuNo; ?>&storeMenuImgDir=<?php echo $storeMenuImgDir; ?>&FileName=<?php echo $FileName; ?>">;