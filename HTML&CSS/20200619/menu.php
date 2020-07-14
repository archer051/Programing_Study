<?php
	if(isset($_GET["code"])){
		$code=$_GET["code"];
	}else{
		$code="01";
	}

	$conn=mysqli_connect("localhost","root","autoset","testdb");	
?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>	
	</head>
	<body>
		<form name="frm2">
		
    <?php
    $query3="select * from submenu where pcode='$code'";    
    $rs3=mysqli_query($conn,$query3);
    ?>
    <select name="store_name">
    	<?php while($row3=mysqli_fetch_array($rs3)){ ?>
            <option value="1"><?php echo $row3["name"] ?></option>
      <?php } ?>
          </select>
      </form>
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