<?php
    class M 
    {
     public $n = 6;
     public $n2 = 8;
     public $n3 = 2;

     public function sum($a,$a2,$a3)
     {
        $this->n = $a;
        $this->n2 = $a2;
        $this->n3 = $a3;
        return $rasult = $this->n + $this->n2 + $this->n3;
     }

     public function sub($a,$a2,$a3)
     {
        $this->n = $a;
        $this->n2 = $a2;
        $this->n3 = $a3;
        return $rasult = $this->n + $this->n2 - $this->n3;
     }

     public function div($a,$a2,$a3) //
     {
        $this->n = $a;
        $this->n2 = $a2;
        $this->n3 = $a3;
        return $rasult =($this->n + $this->n2) / $this->n3;
        
     }
     public function __construct($a,$a2)
     {
        $this->n = $a;
        $this->n2 = $a2;
        echo $rasult =$this->n + $this->n2;
     }

    }
$obj = new M(4,6);
// echo $obj->div(8,4,3);
