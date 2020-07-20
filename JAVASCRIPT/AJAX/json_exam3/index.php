<?php
require './db_user.php';
require './db_info.php';

header('Content-type:application/json');

$pdo = dbConnect($dsn, $user, $password, $dbName);
try{
  $query = 'select * from temp';
  $stmt = $pdo->prepare($query);
  $stmt->excute();
  $o = array(
    0 => 'empty',
    1 => 'a',
    2 => 'b',
    3 => 'c',
    4 => 'd',
    5 => 'e',
    6 => 'f',
    7 => 'g',
    8 => 'h',
    9 => 'i'
  );

  $o2 = array(
    0 => 'empty2',
    1 => 'a2',
    2 => 'b2',
    3 => 'c2',
    4 => 'd2',
    5 => 'e2',
    6 => 'f2',
    7 => 'g2',
    8 => 'h2',
    9 => 'i2'
  );

  $o3 = array(
    0 => 'empty3',
    1 => 'a3',
    2 => 'b3',
    3 => 'c3',
    4 => 'd3',
    5 => 'e3',
    6 => 'f3',
    7 => 'g3',
    8 => 'h3',
    9 => 'i3'
  );

  $o4 = array(
    0 => 'empty4',
    1 => 'a4',
    2 => 'b4',
    3 => 'c4',
    4 => 'd4',
    5 => 'e4',
    6 => 'f4',
    7 => 'g4',
    8 => 'h4',
    9 => 'i4'
  );

  $o5 = array(
    0 => 'empty5',
    1 => 'a5',
    2 => 'b5',
    3 => 'c5',
    4 => 'd5',
    5 => 'e5',
    6 => 'f5',
    7 => 'g5',
    8 => 'h5',
    9 => 'i5'
  );

}catch(exception $e){

}

?>