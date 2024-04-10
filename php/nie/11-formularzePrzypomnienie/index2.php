<?php
$dbhost='localhost';
$dbport=3306;
$dbname='products';
$dbuser='root';
$dbpass='';

$dsn='mysql:host='.$dbhost.';port='.$dbport.'dbname='.$dbname;
try{
  $pdo=new PDO($dsn, $dbuser, $dbpass);
}catch(PDOException $e){
  echo $e->getMessage();
}
try {
  $prod = $pdo->prepare('INSERT INTO `products` (`prod_name`, `price`, `quantity`) VALUES (:prod_name, :price, :quantity)');
  $prod->bindParam(':prod_name', $_POST['prod_name']);
  $prod->bindParam(':price', $_POST['price']);
  $prod->bindParam(':quantity', $_POST['quantity']);
  $prod->execute();
} catch (PDOException $e) {
  echo $e->getMessage();
}
header('Location: index.php');
?>