<?php
// $dbhost='localhost';
// $dbport=3306;
// $dbname='wedkarsko';
// $dbuser='root';
// $dbpass='';

// $dsn='mysql:host='.$dbhost.';port='.$dbport.'dbname='.$dbname;
// try{
//     $pdo=new PDO($dsn, $dbuser, $dbpass);
//   }catch(PDOException $e){
//     echo $e->getMessage();
//   }
require_once("connect.php");
  try {
    $zawody=$pdo->prepare('INSERT INTO zawody_wedkarskie (karty_wedkarskie_id, Lowisko_id,data_zawodow, sedzia) VALUES (0,:lowisko,:data,:sedzia)');
    $zawody->bindParam(':lowisko',$_POST['lowisko']);
    $zawody->bindParam(':data',$_POST['data']);
    $zawody->bindParam(':sedzia',$_POST['sedzia']);
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
  header("Location:zawody.html")
?>