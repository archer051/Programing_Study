<?php
$sawon_num = $_POST["sawon_num"];
$sawon_name = $_POST["sawon_name"];
$position_name = $_POST["position"];
$addhour = $_POST["addhour"];
// echo
// "$sawon_num
// $sawon_name
// $position_name
// $addhour"; exit;

$conn = mysqli_connect("127.0.0.1","root","autoset","testdb");
$query = "select * from b_position where position_name = '$position_name';";
$rs = mysqli_query($conn,$query);
$row = mysqli_fetch_array($rs);
$var_gradecash = $row["position_cash"];
$query2 = "select * from b_pay_config;";
$rs2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_array($rs2);
$var_unitpay = $row2["b_unitpay"];
$addcash = $addhour * $var_unitpay;
$total_cash = ($var_gradecash*10000) + $addcash;
$query3 =
"insert into r_pay
(
  sawon_num,
  sawon_name,
  position,
  addcash,
  totalcash
)
values
(
  $sawon_num,
  '$sawon_name',
  '$position_name',
  $addcash,
  $total_cash
);
";
// echo "$query3";exit;
mysqli_query($conn,$query3);
 ?>
<script type="text/javascript">
  alert("입력이 완료 되었습니다");
</script>
<meta http-equiv="refresh" content="0;url=index.php">
