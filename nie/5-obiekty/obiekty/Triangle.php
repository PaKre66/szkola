<?php
include_once('Figure.php');
class Triangle extends Figure
{
    private $a, $b, $c;
    public $error = false;
    public function __construct($a, $b, $c)
    {
        try {
            if($a + $b < $c || $a + $c < $b || $b + $c < $a) {
                $this->error = true;
                throw new Exception("Nie spełnia warunków!");
            }
            else {
                $this->a = $a;
                $this->b = $b;
                $this->c = $c;
            }
        }
        catch (Exception $err) {
            echo $err->getMessage();
        }
    }
    public function Area()
    {
        $p = $this->Perimeter() / 2;
        return (!$this->error) ? sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c)) : 0;
    }
    public function Perimeter()
    {
        return (!$this->error) ? $this->a + $this->b + $this->c : 0;
    }
}
