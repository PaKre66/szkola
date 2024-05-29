<?php
//funkcja
function nazwaFunkcji($par1,$par2,$par3){
  return $par1+$par2*$par3;
}
nazwaFunkcji(4,3,2);
nazwaFunkcji("4","3","2");

//funkcja strzałkowa
fn($x)=>fn($y)=>fn($z)=>$x+$y+$z;
fn(2)(4)(3);


?>