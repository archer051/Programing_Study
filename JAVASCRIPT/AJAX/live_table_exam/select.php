<?php
    require_once('dbcon.php'); 
    require_once('util.php'); 
    
    try { 
        $sql = 'SELECT * FROM users ORDER BY id DESC';
        $stmt = $con->prepare($sql);

        $stmt->execute();

        $result = $stmt->fetchAll();  
       
    } catch(PDOException $e) {
        die("Database error. " . $e->getMessage()); 
    }

    $output = "";
    $output.= '<div class="table-responsive">
    <table class="table table-bordered">
    <tr>
    <th width="10%">id</th>
    <th width="40%">성</th>
    <th width="40%">이름</th>
    <th width="10%">삭제</th>
    </tr>';

    if(count($result) > 0) {
        foreach($result as $row)
        {
        $output.='
        <tr>
        <td>'.$row["id"].'</td>
        <td class="first_name" data-id1="'.$row["id"].'" contenteditable>'.$row["first_name"].'</td>
        <td class="last_name" data-id2="'.$row["id"].'" contenteditable>'.$row["last_name"].'</td>
        <td><button type="button" name="delete_btn" data-id3="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>
        </tr>';
        
        }
        
        $output .= '
        <tr>
        <td></td>
        <td id="first_name" contenteditable></td>
        <td id="last_name" contenteditable></td>
        <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>
        </tr>';
        
        
    } else {

        $output.='<tr>
        <td colspan="4">데이터가 없습니다.</td>
        </tr>';
        
   
    }

    $output.= '</table></div>';

        p( $output);
    ?>
    
    
   