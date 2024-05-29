<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="directory">Katalog docelowy</label>
            <select name="directory" id="directory">
                <option value="">-- Wybierz katalog --</option>
                <option value="photos">photos</option>
                <option value="text">text</option>
            </select>
        </div>
        <div>
            <label for="name">Nazwa pliku</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="file">Załaduj plik</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="5000000000">
            <input type="file" name="file" id="file">
        </div>
        <div>
            <input type="submit" value="Załaduj">
            <input type="reset" value="Reset">
        </div>
    </form>
    <div>
<?php
$file = 'uploads/plik_tekstowy.txt';
$fopen = fopen($file, 'a+');
fwrite($fopen, "aaa\n");
fclose($fopen);
$fopen = fopen($file, 'a+');
$fread = fread($fopen, filesize($file));
fclose($fopen);
echo $fread;
?>
    </div>
</body>
</html>