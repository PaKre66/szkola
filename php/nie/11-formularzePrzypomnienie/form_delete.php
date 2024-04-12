<?php
require_once('./connect.php');
try {
    $stmt = $pdo->prepare('DELETE FROM `products` WHERE `id` = :id');
    $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
    $stmt->execute();
} catch (PDOException $e) {
    echo $e->getMessage();
}
header('Location: index.php');
?>