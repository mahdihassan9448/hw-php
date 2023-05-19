<?php
    interface parentClass
    {

        public function sum($m,$m2);
        public function sub($n,$n2);
    }


    class chaildClass implements parentClass
    {
        public function sum($m,$m2)
        {
            echo $m+$m2;
        }
        public function sub($n,$n2)
        {
            echo $n-$n2;
        }
    }

    $obj = new chaildClass();
    $obj->sub(5,6);
