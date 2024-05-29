<?php
$db['host'] = 'localhost';
$db['port'] = 3306;
$db['name'] = 'gallery';
$db['user'] = 'root';
$db['pass'] = '';

try {
    $dsn = 'mysql:host=' . $db['host'] .';port=' . $db['port'] . ';dbname=' . $db['name'];
    $pdo = new PDO($dsn, $db['user'], $db['pass']);
} catch(PDOException $e) {
    echo $e->getMessage();
}
?>