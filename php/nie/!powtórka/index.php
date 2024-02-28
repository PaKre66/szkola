<!--ćw 1
 napisz klase abstrakcyjną zwierze w klasie 
znajdują się dwie metody abstrakcyjne medoda jedz 
i daj głos według tej klasy utwórz klase pochodną 
pies kot i koza te klasy implementują metody z klasy abstrakcyjnej-->
<?php
// abstract class zwierze{
//   abstract public function jedz();
//   abstract public function dajGlos();
// }
// class pies extends zwierze{

//   public function jedz(){
//     return("je");
//   }
//   public function dajGlos(){
//     return("daje głos");
//   }
// }
// class kot extends zwierze{

//   public function jedz(){
//     return("je");
//   }
//   public function dajGlos(){
//     return("daje głos");
//   }
// }
// class koza extends zwierze{

//   public function jedz(){
//     return("je");
//   }
//   public function dajGlos(){
//     return("daje głos");
//   }
// }
// $burek=new pies();
// echo $burek->dajGlos();
?>
<!-- ćw 2
napisz klasę abstrakcyjną osoba w której znajdą się 
pola chronione (protected zamiast public) $imie $nazwisko $rokUrodzenia ustawiane za pomocą konstruktora
 + abstrakcyjne metody abstrakcyjne getAge klasy pochodne pracownik 
 z dodatkowym polem $wyplata i metodę roczna wypłata która oblicza roczną pensję pracownika 
 + klasa pochodna od pracownik menager z dodatkowym polem bonus tkóry jest procentem doliczanym do rocznej pensji -->
<?php
abstract class Osoba{
  protected $imie,$nazwisko,$rokUrodzenia;
  abstract public function getAge();
}
class pracownik extends Osoba{
  private $wyplata;
  private $rok=12;
  public function __construct($wyplata, $imie,$nazwisko,$rokUrodzenia){
    $this-> wyplata=$wyplata;
    $this-> imie=$imie;
    $this-> nazwisko=$nazwisko;
    $this-> rokUrodzenia=$rokUrodzenia;
  
  }
  
  public function getAge(){
    return "lta";
  }
  public function rocznaWyplata(){
    
    return "pracownik $this->imie $this->nazwisko otrzymuje wynagrodzenie w wysokości: $this->wyplata *$this->rok";
  }
}
class menager extends pracownik{
  
}
$prac1=new pracownik("2400","Jan","Kowalski","1994");
echo $prac1->rocznaWyplata();
?>
