<?php
abstract class Samochod{
  private $silni=[];
  private $nadwozie=[];
  public $drzwi, $kola, $marka, $model;
  abstract public function jedz($przodTyl);
  abstract public function skrenc($lewoPrawo);
  abstract public function hamuj();
  abstract public function silnik($onOff);
}

class Osobowy extends Samochod{
  public function __construct($przodTyl, $lewoPrawo, $onOff)
  {
    $this->przodTyl=$przodTyl;
    $this->lewoPrawo=$lewoPrawo;
    $this->onOff=$onOff;
  }
  public function iloscMiejsc(){

  }
  public function jedz($przodTyl){
    if($this->przodTyl==true){
      return "jedzie do przodu";
    }else{
      return "cofa";
    }
  }
  public function skrenc($lewoPrawo){
    if($this->lewoPrawo==true){
      return "skręca w Prawo";
    }else{
      return "skręca w Lewo";
    }
  }
  public function hamuj(){
    return "hamuje";
  }
  public function silnik($onOff){
      if($this->onOff==true){
        return "silnik włączony";
      }else{
        return "silnik wyłączony";
      }
  }
}

class Terenowy extends Samochod{
  public function __construct($przodTyl, $lewoPrawo,$onOff){
    $this->przodTyl=$przodTyl;
    $this->lewoPrawo=$lewoPrawo;
    $this->onOff=$onOff;
  }
  public function napend4x4(){

  }
  public function jedz($przodTyl){
    if($this->przodTyl==true){
      return "jedzie do przodu";
    }else{
      return "cofa";
    }
  }
  public function skrenc($lewoPrawo){
    if($this->lewoPrawo==true){
      return "skręca w Prawo";
    }else{
      return "skręca w Lewo";
    }
  }
  public function hamuj(){
    return "hamuje";
  }
  public function silnik($onOff){
      if($this->onOff==true){
        return "silnik włączony";
      }else{
        return "silnik wyłączony";
      }
  }
}

class Dostawczy extends Samochod{
  public function __construct($przodTyl, $lewoPrawo,$onOff){
    $this->przodTyl=$przodTyl;
    $this->lewoPrawo=$lewoPrawo;
    $this->onOff=$onOff;
  }
  public function jedz($przodTyl){
    if($this->przodTyl==true){
      return "jedzie do przodu";
    }else{
      return "cofa";
    }
  }
  public function skrenc($lewoPrawo){
    if($this->lewoPrawo==true){
      return "skręca w Prawo";
    }else{
      return "skręca w Lewo";
    }
  }
  public function hamuj(){
    return "hamuje";
  }
  public function silnik($onOff){
      if($this->onOff==true){
        return "silnik włączony";
      }else{
        return "silnik wyłączony";
      }
  }
}

$car1= new Osobowy(true,false,true);
echo $car1->silnik(true);
// $car2=new Terenowy();
// $car3=new Dostawczy();
?>