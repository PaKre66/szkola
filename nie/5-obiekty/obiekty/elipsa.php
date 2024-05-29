<?php
include_once('Figure.php');
class Ellipse extends Figure
{
    private $a, $b;
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function Area()
    {
        return pi() * $this->a * $this->b;
    }
    public function Perimeter()
    {
        return 2 * pi() * $this->r;
    }
}
