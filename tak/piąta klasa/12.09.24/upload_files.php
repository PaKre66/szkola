<?php
require_once('./connect.php');
try {
  $prod = $pdo->prepare('INSERT INTO `12.09.24` (`tekst`, `tytuł`, `obraz`) VALUES (:tekst,:tekst, :obraz)');
  $prod->bindParam(':tekst', $_POST['tekst']);
  $prod->bindParam(':tytuł', $_POST['tytuł']);
  $prod->bindParam(':obraz', $_POST['obraz']);


  $prod->execute();
} catch (PDOException $e) {
  echo $e->getMessage();
}
header('Location: index.php');
?>