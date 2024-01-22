<?php
include_once('Figure.php');
class prostokat extends Figure
{
    private $a, $b;
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function Area()
    {
        return $this->a * $this->b;
    }
    public function Perimeter()
    {
        return 2 * $this->a + 2 * $this->b;
    }
}
