<?php
$dbhost = 'localhost';
$dbport = 3306;
$dbname = 'products';
$dbuser = 'root';
$dbpass = '';

$dsn = 'mysql:host='.$dbhost.';port='.$dbport.';dbname='.$dbname;// Data Source Name
//konstruktor-metoda tworzona w klasie w celu 
try {
  $pdo = new PDO($dsn, $dbuser, $dbpass);//połączenie z bazą(PHP DATA OBJECTS)
} catch (PDOException $e) {//pdoexception jest klasą pochodną od exception(obsługi wyjątków)
  echo $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="" method="get">
        <select name="country" id="country">
            <option value=""> -- Wybierz z listy -- </option>
            <?php
$stmt = $pdo->prepare('SELECT  DISTINCT `country` FROM `users`');//tworzy zapytanie i PDOStatemaent(zawiera składowe pozwalające przetworzyć zapytanie)
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
foreach($stmt->fetchAll() as $k_array => $v_array) {
?>
            <option value="<?= $v_array['country'] ?>">
              <?= $v_array['country'] ?>
            </option>
<?php
}
?>
        </select>
        <input type="submit" value="Wykonaj">
    </form>
    <?php
try {

  $stmt = $pdo->prepare('SELECT * FROM `users` WHERE `country` = :country');
    $stmt->bindParam(':country', $country);

    $country = $_GET['country'];
    // $country = 'Poland';
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
</body>
</html>



