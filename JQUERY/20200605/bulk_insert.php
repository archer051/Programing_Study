<?php
$conn=mysqli_connect("localhost","root","autoset","testdb");
$query=
"
insert into notice (title,writer,writeday,content) 
values 
('공지사항테스트'
,'관리자'
,'2020-01-01'
,'테스트중')";
for($i=1; $i<=177; $i++) {
  mysqli_query($conn,$query);
}
echo $i."건의 데이터를 벌크인서트하였습니다.";
?>