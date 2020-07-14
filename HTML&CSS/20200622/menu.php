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
	</body>
</html>