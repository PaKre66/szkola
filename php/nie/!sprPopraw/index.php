<?php
class Train{
    public $name;
    public $type;
    private $carriages;
    private $locomotives;
    public $relation;
    public function __construct($name, $type)
    {
      $this->name=$name;
      $this->type=$type;
        try {
          if($type='P'){
            return 'ok typ P';
          }elseif($type='ZT'){
            return 'ok typ ZT';
          }else{
            return 'błąd zły typ';
          }
        }
        catch (Exception $e) {
            echo $e->getMessage("error");
        }
    }
  public function addLocomotive(){

  }
  public function addCarriage(){

  }
  public function getLocomotives(){

  }
  public function getCarriages(){

  }
  public function setRelation(){

  }
}

class Locomotive{
  private $type;
  private $assignment;
  public $velocity;
  public $length;
  private $engineStarted;
  public function __construct($type,$assignment)
  {
    $this->type=$type;
    $this->assignment=$assignment;
    try {
      if($this->type='S'){
        $this->assignment=('M'/'P'/'U'/'T');
      }elseif($this->type='E'){
        $this->assignment=('M'/'P'/'U'/'T');
      }elseif($this->type='P'){
        $this->assignment=('P'/'O'/'T');
      }else{
        return 'błąd';
      }
    }
    catch (Exception $e) {
        echo $e->getMessage("error");
    }
  }
  public function startEngine($engineStarted=true){
    return "silnik jest włączony";
  }
  public function stopEngine($engineStarted=false){
    return "silnik jest wyłączony";
  }
  public function getTypeAssignment(){

  }

}

class Carriage{
  public $type;
  public $volume;
  public $content;
  public function __construct($type,$volume){
    $this->type=$type;
    $this->volume=$volume;
    try {
    if($this->type='P'){
      return 'pasazerski';
    }elseif($this->type='T'){
      return 'towarowy';
    }else{
      return 'błąd zły typ';
    }
    }
    catch (Exception $e) {
        echo $e->getMessage("error");
    }
  }
  public function setContent(){

  }
  public function getType(){
    return $this->type;
  }
  public function getVolume(){

  }
}

?>