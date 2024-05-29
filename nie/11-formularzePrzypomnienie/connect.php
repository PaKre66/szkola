<?php
$dbhost = 'localhost';
$dbname = 'products';
$dbport = '3306';
$dbuser = 'root';
$dbpass = '';

$dsn = 'mysql:host=' . $dbhost . ';port=' . $dbport . ';dbname=' . $dbname;

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>