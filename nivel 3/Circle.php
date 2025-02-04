<?php
   
    class Circle extends Shape{
        private int|float $radio;

        public function __construct($radio)
        {
            $this->radio = $radio;
        }

        public function area():string
        {
            $area = M_PI * sqrt($this->radio);
            return "El área del Circulo es: $area";
        }
    }

?>  