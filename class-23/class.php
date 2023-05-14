<?php
 
 class calculation
 {
    public $n1 = 6;
    public $n2 = 3;

    public function sum($n1,$n2)
    {
        $this->n1 = $n1;
        $this->n2 = $n2;
        return $rasult = $this->n1 + $this->n2; 
    }
    public function sub()
    {
        return $rasult = $this->n1 - $this->n2;
        $this->n1 = $n1;
        $this->n2 = $n2;
    }
    public function mul()
    {
        return $rasult = $this->n1 * $this->n2;
        $this->n1 = $n1;
        $this->n2 = $n2;
    }
    public function div()
    {
        return $rasult = $this->n1 / $this->n2;
        $this->n1 = $n1;
        $this->n2 = $n2;
    }
 }

$obj = new calculation();

// echo $obj->sum(5,8);