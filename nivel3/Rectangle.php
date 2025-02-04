<?php
    class Rectangle extends Shape{
        public function area():string
        {
            $area = $this->height * $this->width;
            return "El área del Rectangulo es: $area";
        }
    }

?>  