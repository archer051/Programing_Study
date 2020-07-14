<?php 
$filename=$_GET["fname"];
$file_dir=$_SERVER["DOCUMENT_ROOT"]."/inc/fileServer/".$filename;

if(file_exists($file_dir)){
 header("Content-Type: application/octet-stream;");
 header("Content-Disposition: attachment; filename=$filename");
 header("Content-Transfer-Encoding: binary"); 
 header("Content-Length: ".(string)(filesize($file_dir))); 
 header("Cache-Control: cache, must-revalidate"); 
 header("Pragma: no-cache"); 
 header("Expires: 0"); 
 //14~16 중요
  $fp=fopen($file_dir,"rb");//대화상자를 연다 rb=read binary 
  fpassthru($fp);//다운받는 상황표시
  fclose($fp);//다운로드후 자동으로 대화상자 닫는다
  
}else{
	echo "파일이 존재하지 않습니다.";
}
?>