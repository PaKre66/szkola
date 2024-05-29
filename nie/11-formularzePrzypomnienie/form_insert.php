<?php
require_once('./connect.php');
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