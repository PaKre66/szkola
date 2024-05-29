<?php
require_once('./database.php');
$upload_dir = 'uploads/';

$filename = explode('.', basename($_FILES['photo_file']['name']));
if($_FILES['photo_file']['type'] == 'image/jpeg') {
    $file_extension = $filename[count($filename) - 1];
    $file_name = time() . "_" . rand(round(time() / 2, 0), time()) . '.' . $file_extension;
    $upload_file = $upload_dir . $file_name;
    if(move_uploaded_file($_FILES['photo_file']['tmp_name'], $upload_file)) {
        try {
            $stmt = $pdo->prepare('INSERT INTO `photos`(`id`, `file_name`, `name`, `description`, `creation_date`, `user`) VALUES (NULL, :file_name, :name, :description, :creation_date, 0)');
            $stmt->bindParam(':file_name', $file_name);
            $stmt->bindParam(':name', $_POST['photo_name']);
            $stmt->bindParam(':description', $_POST['photo_description']);
            $stmt->bindParam(':creation_date', $date);
            $date = date('Y-m-d H:i:s', time());
            $stmt->execute();
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
        header('Location: index.php');
    }
    else {
        header('Location: index.php');
    }
}
?>