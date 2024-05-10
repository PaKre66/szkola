<?php
$path = 'uploads/';
$filename = $path . 'plik.txt';
$handle = fopen($filename, 'w+');
fwrite($handle, "Ala\tma\tkota\nSierotka\tma\trysia");
fclose($handle);
$handle = fopen($filename, 'r');
$content = fread($handle, filesize($filename));
fclose($handle);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?= $content ?>
</body>
</html>
<!-- 
fopen('ścierzka pliku','tryb otwarcia')
    tryby otwarcia:
    -r otwarcie od początku
    -r+ odczyt,zapis od początku(nadpisuje zawartość)
    -w zapis(czyści plik jak plik nie istnieje tworzy go)
    -w+ (praktycznie to samo co w + odczyt)
    -a dopisuje zawartość od końca
    -a+ odczyt + dopis od konca
    -x zapis od początku(jak plik nie istnieje nie utworzy go)
    -x+ to samo co w x + odczyt
fread('fopen','filesize('ścierzka pliku')')
fwrite('fopen',"tekst\t\n")
fwrite('fopen')
 -->
