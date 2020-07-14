<?php
	include "dbconn.php";
	$loginId=$_SESSION["id"];
	$Total=$_POST["Total"];
	$Addr=$_POST["addr"];
	$Hp=$_POST["hp"];
	$alertSign=0;
	if(($Addr == "") || ($Hp == "")) {
		$alertSign=1;
		$alertStr="주소 또는 연락처를 기입하지 않았습니다!";
	}else {
		$curTime=date("Y-m-d h:i:s");
		$querySumCart=
		"SELECT store.no AS storeNo
			,store.store_name AS store_name
			,store_menu.name AS menuName
			,store_cart.pno AS menuNo
			,store_cart.id AS loginId
			,SUM(store_cart.ea) AS ea
			,SUM(store_cart.tPrice) AS tPrice 
		FROM	store_cart, store_menu, store
		WHERE store_cart.pno = store_menu.no
		AND	store_menu.pno = store.no
		AND	store_cart.id=$loginId
		GROUP BY menuNo, loginId";
		$rsSumCart=mysqli_query($conn,$querySumCart);
		$rsCount=mysqli_num_rows($rsSumCart);
		if($rsCount == 0) {
			$alertSign=2;
			$alertStr="주문할 내용이 없습니다!";
		}else {
			$strContent="";
			while($rowSumCart=mysqli_fetch_array($rsSumCart)) {
				$storeNo=$rowSumCart["storeNo"];
				$menuName=$rowSumCart["menuName"];
				$ea=$rowSumCart["ea"];
				$tPrice=$rowSumCart["tPrice"];
				$strContent=$strContent.$menuName."/".$ea."/".$tPrice."<br>";
			}
			// echo $storeNo;echo "<br>";
			// echo $loginId;echo "<br>";
			// echo $strContent;echo "<br>";
			// echo $Total;echo "<br>";
			// echo $Addr;echo "<br>";
			// echo $Hp;echo "<br>";
			// echo $curTime;echo "<br>"; 2017-12-01 00:00:00
			$queryDelCart="delete from store_cart where id='$loginId'";
			mysqli_query($conn,$queryDelCart);
			$queryInsOrders=
			"insert into store_orders
				(store_no
				,id
				,content
				,total
				,addr
				,hp
				,order_time)
			values
				($storeNo
				,'$loginId'
				,'$strContent'
				,$Total
				,'$Addr'
				,'$Hp'
				,'$curTime')";
			mysqli_query($conn,$queryInsOrders);
			$alertStr="주문이 완료되었습니다!";
			// echo $queryInsOrders;echo exit;
		}
	}
?>
<script>
	<?php
	if($alertSign == 1) {
	?>
	alert("<?php echo $alertStr; ?>");
	<?php 
	}else { 
	?>
	alert("<?php echo $alertStr; ?>");	
	<?php 
	}
	?>
</script>
<?php
if($alertSign >= 1) {
	if($alertSign == 1) {
?>
		<meta http-equiv="refresh" content="0;myorders.php">
	<?php
	} else {
	?>
		<meta http-equiv="refresh" content="0;mycart.php">
	<?php
	}
	?>
<?php
} else {
?>
	<meta http-equiv="refresh" content="0;index.php">
<?php
}
?>
	

