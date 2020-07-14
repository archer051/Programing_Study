<?php
  include "dbconn.php";
  $foodTitle=$_POST["foodtitle"];
  $price=$_POST["price"];
  $content=$_POST["content"];
  $storeNo=$_POST["storeNo"];
  $smallTypeNo=$_POST["smallTypeNo"];
  $bigTypeNo=$_POST["bigTypeNo"];
  $fname=basename($_FILES["foodimgfile"]["name"]);
  $uploaddir=$_SERVER["DOCUMENT_ROOT"]."/20200619/images/".$bigTypeNo."/".$smallTypeNo."/".$storeNo."/";
  $uploadfile=$uploaddir.$fname;
  move_uploaded_file($_FILES["foodimgfile"]["tmp_name"],$uploadfile);
  $query="insert into store_menu 
    (pno
    ,name
    ,price
    ,pic
    ,memo)
  values
    ('$storeNo'
    ,'$foodTitle'
    ,'$price'
    ,'$fname'
    ,'$content')
  ";
  mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;store_content.php?storeNo=<?php echo $storeNo; ?>">