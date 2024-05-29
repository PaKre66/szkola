<?php
require_once('./connect.php');
switch($_GET) {
    case 'update':

        break;
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
    <div>
        <table>
            <tr>
                <th>Lp</th>
                <th>Nazwa</th>
                <th>Cena</th>
                <th>Ilość</th>
                <th>Akcje</th>
            </tr>
<?php
try {
    $stmt = $pdo->prepare('SELECT * FROM `products`');
    $stmt->execute();
} catch (PDOException $e) {
    echo $e->getMessage();
}
$stmt->setFetchMode(PDO::FETCH_ASSOC);
foreach ($stmt->fetchAll() as $k => $v) {
?>
            <tr>
                <td><?= $k + 1 ?></td>
                <td><?= $v['prod_name'] ?></td>
                <td><?= $v['price'] ?></td>
                <td><?= $v['quantity'] ?></td>
                <td>
                    <a href="index.php?action=update&id=<?= $v['id'] ?>">Zmień</a>
                    <a href="form_delete.php?id=<?= $v['id'] ?>">Usuń</a>
                </td>
            </tr>
<?php
}
?>
        </table>
    </div>
</body>

</html>