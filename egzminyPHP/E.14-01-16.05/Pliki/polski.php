<?php
require_once("connect.php")
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szkoła Ponadgimnazjalna</title>
    <link rel="stylesheet" href="./styl.css">
</head>
<body>
    <header>
        <h1>Oceny uczniów: język polski</h1>
    </header>
    <main>
        <section>
            <h2>Lista uczniów:</h2>
         
            <ol>
                <?php
                try{
                    $query=$pdo->prepare('SELECT `imie`,`nazwisko` FROM `uczen`');
                    $query->execute();
                }catch (PDOException $e) {
                    echo $e->getMessage();
                }
                    $query->setFetchMode(PDO::FETCH_ASSOC);
                    foreach ($query->fetchAll() as $k => $v) {
                ?>
                    <li><?=$v['imie']?> <?= $v['nazwisko']?></li>
                <?php
                    }
                ?>
            </ol>
        </section>
        <aside>
        <?php
            try{
                $query1=$pdo->prepare('SELECT `imie`,`nazwisko` FROM `uczen` WHERE id=2;');
                $query1->execute();
            }catch (PDOException $e) {
                echo $e->getMessage();
            }
                $query1->setFetchMode(PDO::FETCH_ASSOC);
                foreach ($query1->fetchAll() as $k => $v) {
        ?>   
            <h2>Uczeń:<?=$v['imie']?><?=$v['nazwisko']?></h2>
            
        <?php
            }
        ?>
        <?php
          try{
            $query1=$pdo->prepare('SELECT AVG(ocena) FROM ocena WHERE uczen_id=2 AND przedmiot_id=1;');
            $query1->execute();
        }catch (PDOException $e) {
            echo $e->getMessage();
        }
            $query1->setFetchMode(PDO::FETCH_ASSOC);
            foreach ($query1->fetchAll() as $k => $v) {
        ?>
            <p>Średnia ocen z polskiego:<?=$v['AVG(ocena)']?></p>
            <?php
            }
            ?>
        </aside>
    </main>
    <footer>
        <h3>Zespół szkół Ponadgimnazjalnych</h3>
        <p>Stronę opracował:</p>
    </footer>
</body>
</html>