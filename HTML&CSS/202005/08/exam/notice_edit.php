<?php 
	$no = $_GET["no"];
	$query = "select * from notice where no = $no;";
	$conn = mysqli_connect("127.0.0.1","root","autoset","testdb");
	$rs = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($rs);
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
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<title>공지사항수정</title>
 </head>
 <body>
 	<form name="frm1" method="post" action="notice_edit_ok.php">
 		<table class="table">
 			<tr>
 				<td style="width: 80px; text-align: left;">
 					글번호:
 				</td>
 				<td style="text-align: left;" >
					<input type="text" name="no" value="<?php echo $row["no"] ?>" readonly>
				</td>
 			</tr>
 			<tr>
 				<td style="width: 80px; text-align: left;">
 					글제목:
 				</td>
				<td style="text-align: left;">
					<input type="text" name="title" value="<?php echo $row["title"] ?>">
				</td>
 			</tr>
 			<tr>
 				<td style="width: 80px; text-align: left;">
 					글내용:
 				</td>
 				<td>
 					<textarea name="content" rows="5" cols="55"><?php echo $row["content"] ?></textarea>
 				</td>
 			</tr>
 		</table>
 		<div align="center">
		<input type="button" value="수정완료" class="bt" onclick="send()">
		<input type="button" value="뒤로" class="bt" onclick="
		location.href='notice_content.php?no=<?php echo $no ?>'">
	</div>
 	</form>
 </body>
 </html>
