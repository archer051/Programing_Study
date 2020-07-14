<?php
	$hp=$_GET["hp"];
	// echo $hp;exit;
	$conn=mysqli_connect("127.0.0.1","root","autoset","testdb");
	$query="select * from sawon where hp='$hp'";
	// echo $query;exit;
	$rs=mysqli_query($conn,$query);
	// $cnt=mysqli_num_rows($rs);
	$row=mysqli_fetch_array($rs);
?>
<script type="text/javascript">
	function del()
	{
		if(confirm("정말로 삭제하시겠습니까?"))
		{
			location.href="delete.php?hp=<?php echo $hp?>";
		}
	}
</script>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
	<form name="frm1">
		<table class="table1" style="width: 600px;">
			<tr>
				<td colspan="3" align="center">
					학생상세보기
				</td>
			</tr>
			<tr>
				<td>사원번호</td>
				<td>
					<?php 
						echo $row["enum"]
					?>
				</td>
			</tr>
			<tr>
				<td>이름</td>
				<td>
					<?php 
						echo $row["name"]
					?>
				</td>
			</tr>
			<tr>
				<td>부서명</td>
				<td>
					<?php 
						echo $row["partname"]
					?>
				</td>
			</tr>
			<tr>
				<td>직급</td>
				<td>
					<?php 
						echo $row["position"]
					?>
				</td>
			</tr>
			<tr>
				<td>전화번호</td>
				<td>
					<?php
					echo $row["hp"]
					?>
				</td>
			</tr>
			<tr>
         <td>주소</td>
         <td>
					<?php
					echo $row["addr"]
					?>
				</td>
      </tr>
      <tr>
         <td>이메일</td>
         <td>
	         <?php
	         	echo $row["email"]
	         ?>
         </td>
      </tr>
      <tr>
				<td>혼인여부</td>
				<td>
					<?php
					if($row["marriage_yn"] == "Y") 
					{
						echo "기혼";
					}else{
						echo "미혼";
					}
					?>
				</td>
			</tr>
			<tr>
				<td>성별</td>
				<td>
					<?php
					if($row["gender"] == "M") 
					{
						echo "남자";
					}else{
						echo "여자";
					}
					?>
				</td>
			</tr>
			 <tr>
         <td>연봉</td>
         <td>
         	<?php
         	echo $row["cash"]
         	?>
         </td>
      </tr>
       <tr>
         <td>생년월일</td>
         <td>
         		<?php
	         	echo $row["birthday"]
	         	?>
         </td>
      </tr>
    	<tr>
				<td>경력여부</td>
				<td>
					<?php
					if($row["career_yn"] == "Y") 
					{
						echo "있음";
					}else{
						echo "없음";
					}
					?>
				</td>
			</tr>
      <tr>
         <td>최종학력</td>
         <td>
         	<?php
         	echo $row["laststudy"]
         	?>
         </td>
      </tr>
      <tr>
         <td>전공</td>
         <td>
         		<?php
	         	echo $row["major"]
	         	?>
         </td>
      </tr>
      <tr>
         <td colspan="3" align="center">
            <input type="button" value="수정" class="bt" onclick="location.href='edit.php?hp=<?php echo $hp ?>'">
            <input type="button" value="삭제" class="bt" onclick="del()">
         </td>
      </tr>
		</table>
	</form>
	<footer></footer>
</body>
</html>