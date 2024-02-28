<?php
$dbhost='localhost';
$dbport=3306;
$dbname='nazwaBazyDanych';
$dbuser='root';
$dbpass='';

$dsn='mysql:host='.$dbhost.';port='.$dbport.'dbname='.$dbname; //Data Source Name
try{
  $pdo=new PDO($dsn, $dbuser, $dbpass);
}catch(PDOException $e){
  echo $e->getMessage();
}
$stmt=$pdo->prepare('SELECT*FROM*`users`');
$stmt->execute();
foreach ($stmt->fetchAll() as $v) {
  echo $v;
}
//dsn-linia kodu która pozwala na bezpośrednie znalezienie bazy danych
?>