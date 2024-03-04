<?php
$dbhost = 'localhost';
$dbport = 3306;
$dbname = 'products';
$dbuser = 'root';
$dbpass = '';

$dsn = 'mysql:host='.$dbhost.';port='.$dbport.';dbname='.$dbname;// Data Source Name

try {
  $pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
  echo $e->getMessage();
}

try {
 
  $stmt = $pdo->prepare('SELECT * FROM `users` WHERE `country` = :country');
    $stmt->bindParam(':country', $country);

    // $country = $_GET['country'];
    $country = 'Poland';
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach($stmt->fetchAll() as $k_array => $v_array) {
        echo ($k_array + 1).'<br>';
        // echo $v_array['email'];
        foreach($v_array as $key => $val) {
            echo $key.': '.$val.'<br>';
        }
        echo '<br>';
    }

    $country = 'China';
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach($stmt->fetchAll() as $k_array => $v_array) {
        echo ($k_array + 1).'<br>';
        // echo $v_array['email'];
        foreach($v_array as $key => $val) {
            echo $key.': '.$val.'<br>';
        }
        echo '<br>';
    }
} catch (PDOException $e) {
  echo $e->getMessage();
}
?>