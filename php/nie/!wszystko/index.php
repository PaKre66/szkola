<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<b>LEKCJA 1</b>
<br>
Czy gabryś jesy pedałem?
<br>
a) TAK
<br>
b) a
<br>
c) b
<br>
<?php
$zmiennaInt = 69;
$zmiennaFloat = 6.9;
$zmiennaStr1 = "Gabrys";
$zmiennaStr2 = "ma";
$zmiennaStr3 = "kota";
echo $zmiennaInt;
?>
<br>
<?php
echo($zmiennaFloat);
?>
<br>
<?php
echo @$zmiennaStr1 . " " . $zmiennaStr2 . " " . $zmiennaStr3;
?>
<br>
<?php
echo($zmiennaFloat);
?>
<br>
<?php
echo $zmiennaStr1 . " " . $zmiennaStr2 . " " . $zmiennaStr3;
?>
<br>
<?php
echo "$zmiennaStr1 $zmiennaStr2 $zmiennaStr3";
?>
<br>
<?php
echo '$zmiennaStr1 $zmiennaStr2 $zmiennaStr3';
?>
<br>
<br>
<b>LEKCJA 2</b><br>
<?php
$zmiennaBool = false;
$zmiennaArray;
$zmiennaAssoc;
$zmiennaObject;
?>
<br>
<br>
<b>LEKCJA 3</b><br>
<?php
$a = 123;
$b = 1.23;
$c = "Ala ma 3 koty";
$d = true;
$e = NULL;
 
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?>
<br>
<?php
// $a = (string) $a;
// $b = (string) $b;
// $c = (string) $c;
// $d = (string) $d;
// $e = (string) $e;
 
// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);
?>
<br>
<?php
$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
 
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?>
<br>
<?php
$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
 
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?>
<br>
<br>
<b>LEKCJA 4</b>
<br>
<?php
$fib = [0, 1];
for($i = 2; $i < 10; $i++) {
    $val = $fib[count($fib) - 2] + $fib[count($fib) - 1];
    array_push($fib, $val);
}
foreach($fib as $key => $val) {
    echo ($key + 1) . ' = ' . $val . '<br>';
}
?>
<br>
<b>LEKCJA 5</b>
<br>
<?php
function liczenie($licz1, $licz2, $licz3){
    return $licz1 + $licz2 * $licz3;
}
echo(liczenie(4,3,1));
echo(liczenie("4","3","1"))
?>
<br>
<br>
<b>LEKCJA 6</b>
<br>
<?php
include('./Triangle.php');
$tri1 = new Triangle(3, 4, 5);
echo $tri1->Perimeter();
echo '<br>';
$tri2 = new Triangle(1, 2, 5);
echo '<br>';
echo $tri2->Perimeter();
?>
<br>
<br>
<b>LEKCJA 7</b>
<br>
    <form action="./formTringle.php" method="get">
        Bok a = <input type="number" name="a" id="a"><br>
        Bok b = <input type="number" name="b" id="b"><br>
        Bok c = <input type="number" name="c" id="c"><br>
        <input type="submit" value="Oblicz">
    </form>
<br>
<br>
<b>LEKCJA 8</b>
<br>
<?php
class JakasKlasaObiektow {
    public $pole_1;
    public $pole_2;
    public $pole_3;
}
$obiekt_1 = new JakasKlasaObiektow();
$obiekt_2 = new JakasKlasaObiektow();
$obiekt_1->pole_1 = 3;
$obiekt_1->pole_2 = 4;
$obiekt_1->pole_3 = 5;
$obiekt_3 = $obiekt_1;
var_dump($obiekt_1);
echo "<br>";
var_dump($obiekt_2);
echo "<br>";
var_dump($obiekt_3);
$obiekt_3->pole_1 = "Ala";
echo "<br>";
var_dump($obiekt_1);
echo "<br>";
var_dump($obiekt_3);
$jakisTekst = "Ala ma kota, sierotka ma rysia";
echo "<br>";
echo $jakisTekst;
$fragmentTekstu = substr($jakisTekst, 4, 2);
echo "<br>";
echo $jakisTekst;
echo "<br>";
echo $fragmentTekstu;
$jakisTekst[7] = "P";
echo $jakisTekst;
?>
</body>
</html>