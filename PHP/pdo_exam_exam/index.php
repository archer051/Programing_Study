   
<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>PDO로 데이터베이스에 접속한다</title>
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
    <?php
        $libPath = "./lib/";
        
        include $libPath. "dbuser.php";
        include $libPath. "dbcon.php";
    ?>
    <?
        $pdo = dbConnect($dsn, $user, $password, $dbName)
    ?><br>
    <?php
        var_dump($pdo);
     ?>
     <?php
        dbClose($pdo);
     ?>


</div>
</body>
</html>