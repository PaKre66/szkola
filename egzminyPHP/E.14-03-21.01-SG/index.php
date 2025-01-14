<?php
$dbhost='localhost';
$dbport=3306;
$dbname='wedkarsko';
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
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane o zwierzętach</title>
    <link rel="stylesheet" href="./styl3.css">
</head>
<body>
    <header>
        <h1>ATLAS ZWIERZĄT</h1>
    </header>
    <form action="./index.html" method="post">
        <h2>Gromady</h2>
        <ol>
            <li>Ryby</li>
            <li>Płazy</li>
            <li>Gady</li>
            <li>Ptaki</li>
            <li>Ssaki</li>
        </ol>
        <div>
            <label for="gromada">Wybierz gromadę:</label>
            <input type="number" name="gromada" id="gromada">
            <input type="submit" value="Wyświetl">
        </div>
    </form>
    <main>
        <section id="left">
            <img src="./Pliki/zwierzeta.jpg" alt="dzikie zwierzęta">
        </section>
        <section id="middle">
            <?php
            
            ?>
        </section>
        <section id="right">
            <h2>Wszystkie zwierzęta w bazie</h2>
            <?php
            
            ?>
        </section>
    </main>
    <footer>
        <a href="atlas-zwierzat.pl">Poznaj inne strony o zwierzętach</a>
        <p>autor Atlasu zwierząt: ja</p>
    </footer>
</body>
</html>