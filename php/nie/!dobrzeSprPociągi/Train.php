<?php
class Train {
    public $name;
    public $type;
    public $relation;
    private $locomotives = [];
    private $carriages = [];

    function __construct($name, $type) {
        $this->name = $name;
        if($type == 'P' || $type == 'ZT')
            $this->type = $type;
        else throw new Exception('Błędny typ pojazdu');
    }
    public function addLocomotive($type, $assignment) {
        array_push($this->locomotives, new Locomotive($type, $assignment));
    }
    public function addCarriage($type, $volume) {
        array_push($this->carriages, new Carriage($type, $volume));
    }
    public function getLocomotives() {
        if($this->type == 'ZT')
            return $this->name;
        else return $this->locomotives;
    }
    public function getCarriages() {
        if($this->type == 'ZT')
            return $this->name;
        else return $this->carriages;
    }
    public function setRelation($start, $end) {
        $this->relation = [$start, $end];
    }
}
class Locomotive {
    public $velocity;
    public $length;
    public $weight;
    private $type;
    private $assignment;
    private $engineStarted = false;

    function __construct($type, $assignment) {
        if($type == 'S' || $type == 'P' || $type == 'E')
            $this->type = $type;
        else throw new Exception('Błędny typ lokomotywy');

        if($type == 'S' || $type == 'E') {
            if($assignment == 'M' || $assignment == 'P' || $assignment == 'U' || $assignment == 'T')
                $this->assignment = $assignment;
            else throw new Exception('Błedne przypisanie lokomotywy');
        }
        else {
            if($assignment == 'O' || $assignment == 'P' || $assignment == 'T')
                $this->assignment = $assignment;
            else throw new Exception('Błedne przypisanie lokomotywy');
        }
    }
    public function startEngine() {
        $this->engineStarted = true;
    }
    public function stopEngine() {
        $this->engineStarted = false;
    }
    public function getTypeAssignment() {
        return $this->type . $this->assignment;
    }
}
class Carriage {
    public $type;
    public $volume;
    public $content;
    
    function __construct($type, $volume) {
        if($type == 'T' || $type == 'P')
            $this->type = $type;
        else throw new Exception('Błędny typ wagonu');

        $this->volume = $volume;
    }
    public function setContent($content) {
        $this->content = $content;
    }
    public function getType() {
        return $this->type;
    }
    public function getVolume() {
        return $this->volume;
    }
    public function getContent() {
        return $this->content;
    }
}
try {
    $train = new Train('Pociąg', 'P');
    $train->addLocomotive('P', 'U');
    foreach($train->getLocomotives() as $locomotive) {
        $locomotive->velocity;
    }
} catch(Exception $e) {
    echo $e;
}
?>