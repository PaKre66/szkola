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

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="./form_insert.php" method="post">
  <div>
            <div>
                <label for="prod_name">Nazwa</label>
            </div>
            <div>
                <input type="text" name="prod_name" id="prod_name">
            </div>
        </div>
        <div>
            <div>
                <label for="price">Cena</label>
            </div>
            <div>
                <input type="number" name="price" id="price" min="0" step="0.01">
            </div>
        </div>
        <div>
            <div>
                <label for="quantity">Ilość</label>
            </div>
            <div>
                <input type="number" name="quantity" id="quantity" min="0" step="1">
            </div>
        </div>
        <div>
            <input type="submit" value="Zapisz">
            <input type="reset" value="Wyczyść">
        </div>
  </form>
</body>
</html>
 