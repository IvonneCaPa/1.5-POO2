<?php

    class Triangle extends Shape{
        public function area(): string
        {
            $area = $this->height * $this->width / 2;
            return "El área del Triangulo es: $area";
        }
    }

?>  