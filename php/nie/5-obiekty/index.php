<?php
include('./obiekty/Triangle.php');
include('./obiekty/kolo.php');
include('./obiekty/prostokat.php');
include('./obiekty/elipsa');
$tri=new Triangle(3,4,5);
echo $tri->Perimeter();
echo '<br>';
$tri1=new Triangle(1,2,5);
echo '<br>';
echo $tri1->Perimeter();
$kolo1=new kolo(1);
echo '<br>';
echo $kolo1->Perimeter();
$prko=new prostokat(1,2);
echo '<br>';
echo $prko->Perimeter();
?>