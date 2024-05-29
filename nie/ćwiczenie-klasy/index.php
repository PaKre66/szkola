<?php
abstract class Car{
  public $marka, $model, $kolor;
  abstract public function uruchom();
  abstract public function hamuj();
}
class Car1 extends Car
{
    public $error = false;
    public function __construct($marka, $model, $kolor)
    {
    $this->marka=$marka;
    $this->model=$model;
    $this->kolor=$kolor;
    
    }
    
    public function uruchom()
    {
      return("samochód został uruchomiony");
    }
    public function hamuj()
    {
      return("samochód zachmował");
    }
}
$car1=new Car1("toyota","supra","wyścigowy żółty");
echo $car1->uruchom();
echo '<br>';
echo $car1-> hamuj();
?>