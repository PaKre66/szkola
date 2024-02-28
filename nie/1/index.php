<?php
  //zmienne deklaruje się znakiem $
  $zmiennaInt=123;
  $zmiennaFloat=12.3;
  $zmiennaBool=false;
  $zmiennaArray1=[1,"2a",true];
  $zmiennaArray2=array(1,"2a",true);
  $zmiennaAssoc1=[
    "klucz"=>"wartość"
  ];
  $zmiennaAssoc2=[
    [
      //tablica ma index 0
      "k1"=>1,
      "k2"=>"aaa"
    ],
    [
      //tablca ma index 1
      "k1"=>2
      "k2"=>"bbb"
    ]
  ];
  //wywoływnie elementu tablicy 
  echo $zmiennaAssoc2[0]["k2"];//aaa
  for ($i=0; $i<count($zmiennaAssoc1); $i++) { 
    echo $zmiennaAssoc2[$i]["k1"].''.$zmiennaAssoc2[$i]["k2"];
  }//wywołuje całą tablice
  var_dump($zmiennaInt);//pokazuje typ danych
  class Klasa{
    public $pole;
    function set_pole($pole){
      $this->pole=$pole;
    }
  }
  $zmiennaObject=new Klasa();
  $zmiennaObject->set_pole(223);

  //deklaracja stałych
  const STALA_1=123;
  define('STALA_2',321);
?>
