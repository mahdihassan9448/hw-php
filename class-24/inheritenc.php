<?php
    
    class calculation 
    {
        public $NumberOne = 46;
        public $Numbertwo = 76;

        public function sum($n1,$n2)
        {
            $this->NumberOne = $n1;
            $this->Numbertwo = $n2;

            $a= $this->NumberOne + $this->Numbertwo ;
            return $a ; //

        }
    }

    $objectcalculation = new calculation();
    echo $objectcalculation->sum(25,45);

