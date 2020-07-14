<?php 
  $filename=$_GET["fname"];
  $file_dir=$_SERVER["DOCUMENT_ROOT"]."/fileServer/".$filename;
  if(file_exists($file_dir)){
    header("Content-Type: application/octet-stream;");
    header("Content-Disposition: attachment; filename=$filename");
    header("Content-Transfer-Encoding: binary"); 
    header("Content-Length: ".(string)(filesize($file_dir))); 
    header("Cache-Control: cache, must-revalidate"); 
    header("Pragma: no-cache"); 
    header("Expires: 0"); 
  
    //rb = read binary
    $fp=fopen($file_dir,"rb");
    fpassthru($fp);//다운받는상황
    fclose($fp);//다운로드 후 자동으로 대화상자 닫음
    
  }else{
    echo "파일이 존재하지 않습니다.";
  }