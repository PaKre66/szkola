<?php
$dbhost='localhost';
$dbport=3306;
$dbname='12.09.24';
$dbuser='root';
$dbpass='';

$dsn='mysql:host='.$dbhost.';port='.$dbport.'dbname='.$dbname; //Data Source Name
try{
  $pdo=new PDO($dsn, $dbuser, $dbpass);
}catch(PDOException $e){
  echo $e->getMessage();
}
?>