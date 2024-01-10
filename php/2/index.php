<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$a = 123;
$b = 1.23;
$c = "Ala ma kota";
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
// $a = (int) $a;
// $b = (int) $b;
// $c = (int) $c;
// $d = (int) $d;
// $e = (int) $e;

// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);
?>
<br>
<?php
// $a = (bool) $a;
// $b = (bool) $b;
// $c = (bool) $c;
// $d = (bool) $d;
// $e = (bool) $e;

// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);
?>
<br>
<?php
// $a = (array) $a;
// $b = (array) $b;
// $c = (array) $c;
// $d = (array) $d;
// $e = (array) $e;

// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);
?>
<br>
<?php
$a = (object) $a;
$b = (object) $b;
$c = (object) $c;
$d = (object) $d;
$e = (object) $e;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?>
</body>
</html>