<?php
    interface Shape {
        public function area(); 
    }

    abstract class completeShape implements Shape{
        protected $width;
        protected $heigth;

        public function __construct($width, $heigth) {
            $this -> width  = $width;
            $this -> heigth = $heigth;
        }
    }
    class Rectangle extends completeShape {
        

        public function area() {
            $area = $this -> width * $this -> heigth;
            return $area;
        }
    }

    class Triangle extends completeShape {
       
        public function area() {
            $area = ($this -> width * $this -> heigth) /2;
            return $area;
        }
    }

    class Circle implements Shape{
        private $radio;

        public function __construct($radio){
            $this -> radio = $radio;
        }

        public function area() {
            $area =  pi()*($this-> radio * $this->radio);
            return $area;
        }
    }
    
    $rectangle = new Rectangle(6, 12);
    echo $rectangle -> area();

    $triangle = new Triangle(8, 4);
    echo $triangle -> area();
  
    $circle = new Circle (9);
    echo $circle -> area();
?>