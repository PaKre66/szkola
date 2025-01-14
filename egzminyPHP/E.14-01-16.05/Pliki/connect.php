<?php
$dbhost='localhost';
$dbport=3306;
$dbname='szkola';
$dbuser='root';
$dbpass='';

$dsn='mysql:host='.$dbhost.';port='.$dbport.';dbname='.$dbname;
try{
    $pdo=new PDO($dsn, $dbuser, $dbpass);
  }catch(PDOException $e){
    echo $e->getMessage();
  }


?>