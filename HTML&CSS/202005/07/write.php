<?php
  session_start();
  $conn=mysqli_connect("127.0.0.1","root","autoset","testdb");
  $query="select * from b_position";
  $query2="select * from b_pay_config";
  $rs=mysqli_query($conn,$query);
  $rs2=mysqli_query($conn,$query2);
  $rowdata=mysqli_fetch_array($rs2);
  $maxhour=$rowdata["b_maxhour"];
  $var_num=0;
 ?>
<script type="text/javascript">
  function send() {
    document.frm1.submit();
  }
</script>
<!DOCTYPE html>
<html lang="ko">
  <head>
  	<meta charset="utf-8">
  	<link rel="stylesheet" href="style.css">
  	<title>급여추가</title>
  </head>
  <body>
    <header>
      <?php if(isset($_SESSION["id"])) { ?>
        <div class="toplogin">
          <a href="javascript:logout()">Logout</a>&nbsp;|&nbsp;
          <a href="user_edit.php">Member edit</a>&nbsp;|&nbsp;
          <a href="#">Member Out</a>
        </div>
      <?php }else { ?>
        <meta http-equiv="refresh" content="0;url=index.php">
      <?php } ?>
  	</header>
  	<section>
    <form name="frm1" method="post" action="write_ok.php">
    		<table class="table_main">
    			<tr>
    				<td>사번:</td>
    				<td>
    					<input type="text" name="sawon_num" value="">
    				</td>
    			</tr>
    			<tr>
            <td>이름:</td>
    				<td>
    					<input type="text" name="sawon_name" value="">
    				</td>
    			</tr>
    			<tr>
    				<td>직급</td>
    				<td>
    					<select name="position">
    					<?php	while ($row=mysqli_fetch_array($rs)) { ?>
    						 <?php $var1 = $row["position_name"]; ?>
    						 <option value="<?php echo "$var1" ?>"><?php echo $var1 ?></option>
    						<?php } ?>
    					</select>
    				</td>
    			</tr>
    			<tr>
    				<td>추가근무시간</td>
    				<td>
    					<select name="addhour">
    					<?php	while ($var_num < $maxhour) { ?>
    					<?php $var_num++; ?>
    						<option value="<?php echo $var_num ?>"><?php echo $var_num ?>시간</option>
              <?php } ?>
    					</select>
    				</td>
    			</tr>
          <tr>
            <td colspan="2" align="center">
              <input type="button" value="완료" onclick="send()" class="bt_main">
            </td>
          </tr>
    		</table>
    </form>
  </section>
  </body>
</html>
