<?
	//데이터 베이스 연결하기
	include "db_info.php";

	$query = "SELECT pass FROM $board WHERE id=$_GET[id]";
	$result=mysql_query($query, $conn);
	$row=mysql_fetch_array($result);

	if ($_POST[pass]==$row[pass] )
	{
		$query = "DELETE FROM $board WHERE id=$_GET[id] ";
		$result=mysql_query($query, $conn);
	}
	else
	{
		echo ("
		<script>
		alert('비밀번호가 틀립니다.');
		history.go(-1);
		</script>
		");
		exit;
	}
?>
<center>
<meta http-equiv='Refresh' content='1; URL=list.php'>
<FONT size=2 >삭제되었습니다.</font>