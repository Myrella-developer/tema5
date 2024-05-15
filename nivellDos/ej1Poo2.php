<?php
    interface Shape {
        public function area(); 
    }

    class Rectangle implements Shape {
        private $width;
        private $heigth;

        public function __construct($width, $heigth) {
            $this -> width  = $width;
            $this -> heigth = $heigth;
        }

        public function area() {
            $area = $this -> width * $this -> heigth;
            return $area;
        }
    }

    class Triangle implements Shape {
        private $width;
        private $heigth;

        public function __construct($width, $heigth) {
            $this -> width  = $width;
            $this -> heigth = $heigth;
        }

        public function area() {
            $area = ($this -> width * $this -> heigth) /2;
            return $area;
        }
    }

    
    $rectangle = new Rectangle(6, 12);
    echo $rectangle -> area();

    $triangle = new Triangle(8, 4);
    echo $triangle -> area();
?>